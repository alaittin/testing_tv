<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    CdCollection
 * @license    GPL
 * @filesource
 */


/**
 * Class ModuleCdCollection
 *
 * Front end module "CD collection".
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Controller
 */
class ModuleCdCollection extends Module
{

	protected $strTemplate = 'mod_cdcollection';
	
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/cd_collection/html/ajax.js';

	# AJAX CALL
	
	if ($this->Input->get('isAjax') == '1')
	{
	  $intId = $this->Input->post('cat');

	  $objReturn = $this->Database->prepare("SELECT cd.*, cat.title AS catTitle, cat.description AS catDescription FROM tl_cds_category AS cat JOIN tl_cds AS cd ON (cd.pid = cat.id) WHERE cat.id=?")->execute($intId);

	  $strReturn = '<table border="0" cellpadding"4">';

	  while ($objReturn->next())
	  {
	    $strReturn .= sprintf(
	    '<tr>
	      <td><img src="%s" height="100" width="100" alt="%s" /></td>
	      <td>
	        <p><strong>%s</strong></p>
	        %s
	      </td>
	    </tr>',
	    $objReturn->image, $objReturn->title, $objReturn->title, $objReturn->artist, $objReturn->comment);
	  }

	  $strReturn .= '</table>';
	  $strReturn = sprintf('<h3>%s</h3>%s', $objReturn->catTitle, $objReturn->catDescription) . $strReturn;

	  print $strReturn;
	  exit; // IMPORTANT!
	}
	
	
	protected function compile()
	{
		$intCategory = ($this->Input->get('cat')) ? $this->Input->get('cat') : 1;
		$arrCds = array();
		
		$objCds = $this->Database->prepare("SELECT * FROM tl_cds WHERE pid=? ORDER BY title")->execute($intCategory);
		$objCategory = $this->Database->prepare("SELECT * FROM tl_cds_category WHERE id=?")->execute($intCategory);
		$objCategories = $this->Database->execute("SELECT id, title FROM tl_cds_category ORDER BY title");
		
		while ($objCds->next())
		{
			$arrCds[] = array
			(
				'title' => $objCds->title,
				'artist' => $objCds->artist,
				'comment' => $objCds->comment,
				'src' => $objCds->image,
				'alt' => $objCds->title
			);
		}
		
		while ($objCategories->next())
		{
			$blnSelected = ($objCategories->id == $intCategory) ? true : false;
		
			$arrCategories[] = array
			(
				'id' => $objCategories->id,
				'title' => $objCategories->title,
				'selected' => $blnSelected
			);
		}
		
		$this->Template->cds = $arrCds;
		$this->Template->catTitle = $objCategory->title;
		$this->Template->catDescription = $objCategory->description;
		$this->Template->categories = $arrCategories;
	}

}


?>