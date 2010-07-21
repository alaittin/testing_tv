<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

// Modify the palette
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace
(
	'gender;',
	'gender;{societe_legend:hide},societevendeuse_id,departement,fonction,commentaire;',
	$GLOBALS['TL_DCA']['tl_member']['palettes']['default']
	);

// Add the field meta data
$GLOBALS['TL_DCA']['tl_member']['fields']['societevendeuse_id'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_member']['societevendeuse_id'],
	'inputType'   => 'select',
	'foreignKey'  => 'tl_tvfi_bdf_fo_societe_vendeuse.fsv_nom',
	'eval'        => array('mandatory' => false, 'includeBlankOption' => true, 'tl_class' => 'w50'),
	);

$GLOBALS['TL_DCA']['tl_member']['fields']['departement'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_member']['departement'],
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class' => 'w50')
	);

$GLOBALS['TL_DCA']['tl_member']['fields']['fonction'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_member']['fonction'],
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>false, 'maxlength'=>255, 'size'=>10, 'tl_class' => 'clr')
	);

$GLOBALS['TL_DCA']['tl_member']['fields']['commentaire'] = array
(
	'label'     => &$GLOBALS['TL_LANG']['tl_member']['commentaire'],
	'inputType'			=> 'textarea',
	'eval'				=> array('mandatory'=>false, 'rows'=>4, 'tl_class' => 'clr')
#	'eval'				=> array('mandatory'=>false, 'rows'=>4, 'rte'=>'tinyMCE', 'helpwizard'=>true, 'tl_class' => 'clr')	
	);
	
?>