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
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package			BDI 
 * @license			GPL 
 * @filesource
 */


/**
 * Class SocieteAcheteuse 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    		Model
 */
class SocieteAcheteuse extends Cmodel
{
	/**
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_tvfi_bdi_societe_acheteuse';

	/**
	 * Name of the field that references the active record
	 * @var string
	 */
	protected $strRefField = 'id';

	/**
	 * Value of the field that references the active record
	 * @var mixed
	 */
	protected $varRefId;

   	protected $belongsTo = array( 'Pays' );

	protected $hasMany = array( 'DepartementSocieteAcheteuse' );
	
	protected $manyToMany = array
		(
			'TypeSocieteAcheteuse'		=> 'tl_tvfi_bdi_societe_acheteuse_to_type',
			'Format'					=> 'tl_tvfi_bdi_societe_acheteuse_to_format',
			'Resolution'				=> 'tl_tvfi_bdi_societe_acheteuse_to_resolution',
			'Theme'						=> 'tl_tvfi_bdi_societe_acheteuse_to_theme_programme',
			'Genre'						=> 'tl_tvfi_bdi_societe_acheteuse_to_genre',
		);

 	protected $validates_uniqueness_of = array( 'alias' );
	protected $afterSave = array( 'logAction' );

	protected $strBaseUrl = '/bdi/societes/presentation/fiche/';

	// FRONT OFFICE METHODS
	
	public function getLocalizedLink()
	{
		return sprintf('<a href="%s" title="%s">%s</a>',
							ampersand(($this->Environment->base. $GLOBALS['TL_LANGUAGE'] . $this->strBaseUrl . $this->alias .$GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS),
							$this->sta_nom,
							$this->sta_nom
							);
	}


	public function getAllSortedByAndOrdered($strQuery, $strSort, $strOrder)
	{
		
		$arrResults = $this->getAll('sta_nom asc', array($strQuery));
		
		
		switch($strSort)
		{
			case 'nom':
				
				if($strOrder == 'asc')
				{
					// We don't need to do anything -> already sorted
		
					return $arrResults;				
				} else {
					
					foreach($arrResults as $societe)
					{
						$_sorted[$societe->sta_nom] = $societe;
					}
					krsort($_sorted);
					return $_sorted;
				
				}
				break;
				
			case 'pays':
				
				foreach($arrResults as $societe)
				{
					$_pays[$societe->Pays()->localizedName][] = $societe;
				}				
				if($strOrder == 'asc')
				{
					ksort($_pays);
				} else {
					krsort($_pays);
				}
				
				foreach($_pays as $pays)
				{
					foreach($pays as $societe)
					{
						$_sorted[] = $societe;
					}
				}
				
				return $_sorted;
				break;
		
			case 'type':
				
				foreach($arrResults as $societe)
				{
					$societeTypes = is_array($societe->getTypesNames()) ? implode(', ', $societe->getTypesNames()) : 'unknown' ;
					$_types[$societeTypes][] = $societe;
				}				
				ksort($_types);
				
				foreach($_types as $type)
				{
					foreach($type as $societe)
					{
						$_sorted[] = $societe;
					}
				}
				
				return $_sorted;
				break;
		}
	
	
	}




	/**
	 * Returns all the societe types names as array
	 * @return array
	 */	
	public function getTypesNames()
	{
		$types = $this->TypeSocieteAcheteuse();
		
		if(count($types) < 1) return;

			foreach($types as $type)
			{
				$_types[] = $type->localizedName();
			}
			return $_types;
		
	}
	
	/**
	 * Returns all the societe types names as string
	 * @return array
	 */	
	public function getTypeNamesAsString()
	{
		$_types = $this->getTypesNames();
		if(is_array($_types))
		{
			return implode(', ', $_types);
		
		} else {
			return '';
		}  
		
	}


	/**
	 * Returns all the societe genre names as array
	 * @return array
	 */	
	public function getGenresNames()
	{
		$genres = $this->Genre();
				
		if(count($genres) < 1) return;
		
			foreach($genres as $genre)
			{
				$_genres[] = $genre->localizedName();
			}
			return $_genres;
		
	}

	/**
	 * Returns all the societe theme names as array
	 * @return array
	 */	
	public function getThemesNames()
	{
		$themes = $this->Theme();
				
		if(count($themes) < 1) return;
		
			foreach($themes as $theme)
			{
				$_themes[] = $theme->localizedName();
			}
			return $_themes;
		
	}

	/**
	 * Returns all the societe broadcast mean names as array
	 * @return array
	 */	
	public function getBroadcasts()
	{
		$this->loadLanguageFile('default');
		$_broadcast = array();
		
		if($this->sta_bit_cab == '1') $_broadcast[] = $GLOBALS['TL_CONFIG']['bdi']['broadcast']['cable'];
		if($this->sta_bit_sat == '1') $_broadcast[] = $GLOBALS['TL_CONFIG']['bdi']['broadcast']['satellite'];
		if($this->sta_bit_htz == '1') $_broadcast[] = $GLOBALS['TL_CONFIG']['bdi']['broadcast']['hertz'];
		if($this->sta_bit_htznum == '1') $_broadcast[] = $GLOBALS['TL_CONFIG']['bdi']['broadcast']['hertznum'];
		if($this->sta_bit_int == '1') $_broadcast[] = $GLOBALS['TL_CONFIG']['bdi']['broadcast']['internet'];
		
		return $_broadcast;
		
	}

	/**
	 * Returns all the societe language translation mean names as array
	 * @return array
	 */	
	public function getTranslations()
	{
		$this->loadLanguageFile('default');
		$_translation = array();
		
		if($this->sta_traduction == '1') $_translation[] = $GLOBALS['TL_CONFIG']['bdi']['translation']['dubbing'];
		if($this->sta_sous_titrage == '1') $_translation[] = $GLOBALS['TL_CONFIG']['bdi']['translation']['subtitles'];
		
		return $_translation;
		
	}
	

	// BACK OFFICE METHODS
	
	public function bo_save(DataContainer $dc)
	{
		$this->findBy('id', $dc->id);

		if(!strlen($this->alias))
		{
			$this->alias = standardize($this->sta_nom);
			if(!$this->save())
			{
				$this->alias = $this->alias.'_'.$this->id;
				$this->save();
			}
		} else {
			$this->save();
		}
		
		$this->logAction();
		
		return true;
	}
	
	
	/**
	 * Returns all the societe types
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_getTypes($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$types = $this->TypeSocieteAcheteuse();
		
		foreach($types as $type)
		{
			$_types[] = $type->id;
		}
		
		return serialize($_types);
	}

	/**
	 * Saves all the societe types
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_saveTypes($varValue, DataContainer $dc)
	{
		if(!strlen($varValue)) return 0;
		
		$this->findBy('id', $dc->id);
		$values = unserialize($varValue);
		
		$this->setManyToMany('TypeSocieteAcheteuse', $values);

		return 0;
			
	}

	/**
	 * Returns all the societe formats
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_getFormats($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$formats = $this->Format();
		
		foreach($formats as $format)
		{
			$_formats[] = $format->id;
		}
		
		return serialize($_formats);
	}

	/**
	 * Saves all the societe formats
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_saveFormats($varValue, DataContainer $dc)
	{
		if(!strlen($varValue)) return 0;
		
		$this->findBy('id', $dc->id);
		$values = unserialize($varValue);
		
		$this->setManyToMany('Format', $values);

		return 0;
			
	}


	/**
	 * Returns all the societe resolutions
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_getResolutions($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$resolutions = $this->Resolution();
		
		foreach($resolutions as $resolution)
		{
			$_resolutions[] = $resolution->id;
		}
		
		return serialize($_resolutions);
	}

	/**
	 * Saves all the societe resolutions
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_saveResolutions($varValue, DataContainer $dc)
	{
		if(!strlen($varValue)) return 0;

		$this->findBy('id', $dc->id);
		$values = unserialize($varValue);
		
		$this->setManyToMany('Resolution', $values);

		return 0;
	}

	/**
	 * Returns all the societe themes
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_getThemes($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$themes = $this->Theme();
		
		foreach($themes as $theme)
		{
			$_themes[] = $theme->id;
		}
		
		return serialize($_themes);
	}

	/**
	 * Saves all the societe themes
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_saveThemes($varValue, DataContainer $dc)
	{
		if(!strlen($varValue)) return 0;
		
		$this->findBy('id', $dc->id);
		$values = unserialize($varValue);
		
		$this->setManyToMany('Theme', $values);
		
		return 0;
	}

	/**
	 * Returns all the societe genres
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_getGenres($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$genres = $this->Genre();
		
		foreach($genres as $genre)
		{
			$_genres[] = $genre->id;
		}
		
		return serialize($_genres);
	}

	/**
	 * Saves all the societe genres
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_saveGenres($varValue, DataContainer $dc)
	{
		if(!strlen($varValue)) return 0;
		
		$this->findBy('id', $dc->id);
		$values = unserialize($varValue);
		
		$this->setManyToMany('Genre', $values);

		return 0;
	}

	
	/**
	 * Logs the societe action to the Journal
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function logAction()
	{
			
		if(TL_MODE == 'BE') $this->import('BackendUser', 'User');
		if(TL_MODE == 'FE') $this->import('FrontendUser', 'User');
		
		$action = new JournalAction();
		$arrAttributes = array('tvfimember_id' => $this->User->id, 'entity' => get_class($this) , 'item' => $this->id, 'action' => 'UPDATE', 'tl_mode' =>  TL_MODE);
		$action->updateAttributes($arrAttributes);
		unset($action, $arrAttributes);


	}
}
?>