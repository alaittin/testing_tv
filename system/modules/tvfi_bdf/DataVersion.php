<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright		2010 - Kantik / Noodle 
 * @author			Alaittin Ozcan <aozcan@noodle.fr>, 
 * @package			TVFI
 * @license			GPL 
 * @filesource
 */


/**
 * Class DataVersion 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Alaittin Ozcan <aozcan@noodle.fr>,
 * @package    		Model
 */
class DataVersion extends BackendModule
{
	
	/**
	 * Template
	 * @var string
	 */	
	protected $strTemplate = 'societe_change_list';
	
	/**
	 * Generate module
	 */	
	public function compile()
	{	
		
		if ($this->Input->get('act') == 'view_societe_changes')
		{
			$this->viewSocieteChanges();
		}
		else 
		{
			$this->changedSocieteList();			
		}
		$this->confirmChanges();
	}


	/**
	 * List of changed(bo_societe) societes
	 */		
	
	public function changedSocieteList()
	{ 
	 
		
		$pids = $this->Database->prepare("SELECT DISTINCT(dv.pid),dv.*,s.fsv_nom as name, dv.column_name as col_name FROM tl_tvfi_data_version AS dv 
																			LEFT JOIN tl_tvfi_bdf_bo_societe_vendeuse AS s ON dv.pid=s.id
																			WHERE table_name='tl_tvfi_bdf_bo_societe_vendeuse' AND status NOT IN ('accept','reject') GROUP BY dv.pid")
													->execute();

		while ($pids->next())
		{
			$arrChanges[] = array
			(
			'id'            	=> $pids->id,            
			'pid'             => $pids->pid,           
			'tstamp'          => $pids->tstamp,      
			'created_by'      => $pids->created_by,    
			'table_name'      => $pids->table_name,    
			'column_name'     => $pids->column_name,   
			'old_value'       => $pids->old_value,     
			'new_value'       => $pids->new_value,     
			'status'          => $pids->status,        
			'updated_by'      => $pids->updated_by,    
			'updated_tstamp'  => $pids->updated_tstamp,
			'name'   	 => $pids->name, 
			);
		}

		$this->Template->changedObj = $arrChanges;
	}
	
	
	/**
	 * List changed fields of the related societe 
	 */
	public function viewSocieteChanges()
	{
		$this->Template = new BackendTemplate('societe_change');
		$this->Template->href = $this->getReferer(true);
		$this->loadLanguageFile('tl_tvfi_bdf_bo_societe_vendeuse');
		$this->Template->button = $GLOBALS['TL_LANG']['MSC']['backBT'];		
		$labels = &$GLOBALS['TL_LANG']['tl_tvfi_bdf_bo_societe_vendeuse'];
		$this->Template->labels = $labels;
		
		$intChange = ($this->Input->get('id')) ? $this->Input->get('id') : 0; #die
		if ($intChange == 0)
		{
				$intChange = ($this->Input->post('id')) ? $this->Input->post('id') : 0; 
		}

		$objSociete = $this->Database->prepare("SELECT * FROM tl_tvfi_bdf_bo_societe_vendeuse WHERE id=?")->execute($intChange);
		$objChanges = $this->Database->prepare("SELECT * FROM tl_tvfi_data_version WHERE pid=? AND status NOT IN ('accept','reject') ORDER BY id")->execute($intChange);		
		$tsv = new TypeSocieteVendeuse();
		$all_types = $tsv->bo_listTypeAsArray();

		while ($objChanges->next())
		{
			$arrChanges[] = array
			(
 				'id'            	=> $objChanges->id,            
				'pid'             => $objChanges->pid,           
				'tstamp'          => $objChanges->tstamp,      
				'created_by'      => $objChanges->created_by,    
				'table_name'      => $objChanges->table_name,    
				'column_name'     => $objChanges->column_name,   
				'old_value'       => $objChanges->old_value,     
				'new_value'       => $objChanges->new_value,     
				'status'          => $objChanges->status,        
				'updated_by'      => $objChanges->updated_by,    
				'updated_tstamp'  => $objChanges->updated_tstamp,
			);
		}
		
		$this->Template->societe    = $objSociete;
		$this->Template->arrChanges = $arrChanges;
		$this->Template->all_types  = $all_types;
 
	}

	/**
	 * if accepted then apply changes to the related table 
	 * if rejected then rollback changes on orginal table
	 * if hold then do nothing (for now)
	 */
	public function confirmChanges()
	{
		if(TL_MODE == 'BE') $this->import('BackendUser', 'User');
		if ($this->Input->post('FORM_SUBMIT') == 'confirm_changes')
		{
			$statuses = $this->Input->post('statuses');
			foreach ($statuses as $key => $change_id) {
				if ($this->Input->post('status_'.$change_id))
				{
						$bo_fo = array('tl_tvfi_bdf_bo_societe_vendeuse' => 'tl_tvfi_bdf_fo_societe_vendeuse');
				
            $row = $this->Database->prepare("SELECT * FROM tl_tvfi_data_version WHERE id = ? ")
				 					  							->execute($change_id)
				 					  							->fetchAssoc();		

					# if change is accepted then apply it
					if ($this->Input->post('status_'.$change_id) == "accept")
					{		
							if ($row['column_name'] == 'type') # If relation type is accepted
							{
								$fo = new FoSocieteVendeuse();
								$fo->findBy('id', $row['pid']);								
								$fo->setManyToMany('TypeFoSocieteVendeuse', unserialize($row['new_value']));
							}
							else{
								$this->Database->prepare("UPDATE ".$bo_fo[$row['table_name']]." SET ".$row['column_name']."=? WHERE id=?")
							 							 ->execute($row['new_value'],$row['pid']);
							}
				      $this->Database->prepare("UPDATE tl_tvfi_data_version SET status = ?, updated_by=?, updated_tstamp=? WHERE id = ?")
				 										 ->execute('accept', $this->User->id, time(), $row['id']);
					}
 
					
					# if change is put on hold do not do anythig for now
					if ($this->Input->post('status_'.$change_id) == "hold")
					{}
					
					
					# if change is not accepted then rollback the change (return original data to previous state)
					if ($this->Input->post('status_'.$change_id) == "reject")
					{
							if ($row['column_name'] == 'type') # If relation type is rejected, Rollback
							{
								$bo = new SocieteVendeuse();
								$bo->findBy('id', $row['pid']);
								$bo->setManyToMany('TypeSocieteVendeuse', unserialize($row['old_value']));
							}
							else{				
								$this->Database->prepare("UPDATE ".$row['table_name']." SET ".$row['column_name']."=? WHERE id=?")
						 							 	->execute($row['old_value'], $row['pid']);
							}
			      	$this->Database->prepare("UPDATE tl_tvfi_data_version SET status = ?, updated_by=?, updated_tstamp=?  WHERE id = ?")
				 										 ->execute('reject', $this->User->id, time(), $row['id']);
					}
				}
			}
			// Redirect
			if (isset($_POST['saveNclose']))
			{
				$_SESSION['TL_INFO'] = '';
				$_SESSION['TL_ERROR'] = '';
				$_SESSION['TL_CONFIRM'] = '';

				setcookie('BE_PAGE_OFFSET', 0, 0, '/');
				$this->redirect($this->getReferer());
			}

			elseif (isset($_POST['save']))
			{
				$_SESSION['TL_INFO'] = '';
				$_SESSION['TL_ERROR'] = '';
				$_SESSION['TL_CONFIRM'] = '';

				setcookie('BE_PAGE_OFFSET', 0, 0, '/');
				$strUrl = $this->addToUrl('do=data_version&act=view_societe_changes&id='.$this->Input->post('id'));

				$this->redirect($strUrl);
			}
		}
	}	
	
	
}
?>