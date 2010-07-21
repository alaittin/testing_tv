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
 * This is the data container array for table tl_cds.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2007
 * @author     Leo Feyer <leo@typolight.org>
 * @package    CdCollection
 * @license    GPL
 * @filesource
 */


/**
 * Table tl_cds
 */

$GLOBALS['TL_DCA']['tl_cds'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_cds_category',
	),
	
	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'headerFields'            => array('title', 'description'),
			'panelLayout'             => 'search,limit',
			'child_record_callback'   => array('tl_cds', 'listCds')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cds']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cds']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cds']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_cds']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
	
	),
	
	// Palettes
	'palettes' => array
	(
#		'default'                     => '{title_legend},title,artist;{image_legend},image;{comment_legend:hide},comment'
		'default'                     => '{title_legend},title,artist;{image_legend},image'
	),
	
	// Fields
	'fields' => array
	(
        'title' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cds']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>true, 'maxlength'=>64, 'tl_class'=>'w50')
        ),
        'artist' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cds']['artist'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>true, 'maxlength'=>64, 'tl_class'=>'w50')
        ),
        'image' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cds']['image'],
            'inputType'               => 'fileTree',
            'eval'                    => array('files'=>true, 'filesOnly'=>true, 'fieldType'=>'radio')
        ),
        'comment' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_cds']['comment'],
            'inputType'               => 'textarea',
			'eval'                    => array('rte'=>'tinyFlash', 'tl_class'=>'long')
        )
	)
);

class tl_cds extends Backend {
	
	/**
	 * List cds of our collection
	 * @param array
	 * @return string
	 */
	public function listCds($arrRow)
	{
		return '<div class="limit_height block">
			<img src=" ' . $arrRow['image'] . '  " style="height:100px; width:100px; float:left; margin-right: 1em;" /><p><strong>' . $arrRow['title'] . '</strong> (' . $arrRow['artist'] . ')</p>' . $arrRow['comment']
			. '</div>' . "\n";
	}
 
}

?>