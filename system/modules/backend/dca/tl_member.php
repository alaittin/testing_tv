<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Backend
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_member
 */
$GLOBALS['TL_DCA']['tl_member'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'    		=> 'Table',
#		'ptable'							=> 'tl_tvfi_bdf_bo_societe_vendeuse',
		'enableVersioning'    => true,
		'onsubmit_callback' 	=> array
		(
			array('tl_member', 'storeDateAdded')
		)
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('lastname'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields'                  => array('firstname', 'lastname', 'username'),
			'format'                  => '%s %s <span style="color:#b3b3b3; padding-left:3px;">[%s]</span>',
			'label_callback'          => array('tl_member', 'addIcon')
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
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset(); return AjaxRequest.toggleVisibility(this, %s);"',
				'button_callback'     => array('tl_member', 'toggleIcon')
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_member']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'                => array('login', 'assignDir'),
		'default'                     => '{personal_legend},firstname,lastname,dateOfBirth,gender;{address_legend:hide},company,street,postal,city,state,country;{contact_legend},phone,mobile,fax,email,website,language;{groups_legend},groups;{login_legend:hide},login;{homedir_legend:hide},assignDir;{account_legend},disable,start,stop',
	),

	// Subpalettes
	'subpalettes' => array
	(
		'login'                       => 'username,password',
		'assignDir'                   => 'homeDir'
	),


	// Fields
	'fields' => array
	(
		'firstname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['firstname'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50')
		),
		'lastname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['lastname'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50')
		),
		'dateOfBirth' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['dateOfBirth'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50 wizard')
		),
		'gender' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['gender'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('male', 'female'),
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('includeBlankOption'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50')
		),
		'company' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['company'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50')
		),
		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['street'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50')
		),
		'postal' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['postal'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>32, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50')
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['city'],
			'exclude'                 => true,
			'filter'                  => true,
			'search'                  => true,
			'sorting'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50')
		),
		'state' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['state'],
			'exclude'                 => true,
			'sorting'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50')
		),
		'country' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['country'],
			'exclude'                 => true,
			'filter'                  => true,
			'sorting'                 => true,
			'inputType'               => 'select',
			'options'                 => $this->getCountries(),
			'eval'                    => array('includeBlankOption'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50')
		),
		'phone' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['phone'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'phone', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50')
		),
		'mobile' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['mobile'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'phone', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50')
		),
		'fax' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['fax'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>64, 'rgxp'=>'phone', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50')
		),
		'email' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['email'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'rgxp'=>'email', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50')
		),
		'website' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['website'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50')
		),
		'language' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['language'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'select',
			'options'                 => $this->getLanguages(),
			'eval'                    => array('includeBlankOption'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50')
		),
		'groups' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['groups'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkboxWizard',
			'foreignKey'              => 'tl_member_group.name',
			'eval'                    => array('multiple'=>true, 'feEditable'=>true, 'feGroup'=>'login'),
			'wizard' => array
			(
				array('tl_member', 'addGroupWizard')
			),
			'save_callback' => array
			(
				array('tl_member', 'updateGroupMembership')
			)
		),
		'login' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['login'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
		),
		'username' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['username'],
			'exclude'                 => true,
			'search'                  => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'unique'=>true, 'rgxp'=>'extnd', 'nospace'=>true, 'maxlength'=>64, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'login')
		),
		'password' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['password'],
			'exclude'                 => true,
			'inputType'               => 'password',
			'eval'                    => array('mandatory'=>true, 'rgxp'=>'extnd', 'minlength'=>$GLOBALS['TL_CONFIG']['minPasswordLength'], 'feEditable'=>true, 'feGroup'=>'login'),
			'save_callback' => array
			(
				array('tl_member', 'setNewPassword')
			)
		),
		'assignDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['assignDir'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('submitOnChange'=>true)
		),
		'homeDir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['homeDir'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'tl_class'=>'clr')
		),
		'disable' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['disable'],
			'exclude'                 => true,
			'filter'                  => true,
			'inputType'               => 'checkbox'
		),
		'start' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['start'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50 wizard')
		),
		'stop' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_member']['stop'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'date', 'datepicker'=>$this->getDatePickerString(), 'tl_class'=>'w50 wizard')
		),
		'dateAdded' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['dateAdded'],
			'sorting'                 => true,
			'flag'                    => 6,
			'eval'                    => array('rgxp'=>'datim')
		),
		'lastLogin' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['MSC']['lastLogin'],
			'sorting'                 => true,
			'flag'                    => 6,
			'eval'                    => array('rgxp'=>'datim')
		)
	)
);


/**
 * Class tl_member
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Controller
 */
class tl_member extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}


	/**
	 * Add an image to each record
	 * @param array
	 * @param string
	 * @return string
	 */
	public function addIcon($row, $label)
	{
		$image = 'member';

		if ($row['disable'] || strlen($row['start']) && $row['start'] > time() || strlen($row['stop']) && $row['stop'] < time())
		{
			$image .= '_';
		}

		return sprintf('<div class="list_icon" style="background-image:url(\'system/themes/%s/images/%s.gif\');">%s</div>', $this->getTheme(), $image, $label);
	}


	/**
	 * Call the "setNewPassword" callback
	 * @param string
	 * @param object
	 * @return string
	 */
	public function setNewPassword($strPassword, $user)
	{
		// Return if there is no user (e.g. upon registration)
		if (!$user)
		{
			return $strPassword;
		}

		$objUser = $this->Database->prepare("SELECT * FROM tl_member WHERE id=?")
								  ->limit(1)
								  ->execute($user->id);

		// HOOK: set new password callback
		if ($objUser->numRows)
		{
			if (isset($GLOBALS['TL_HOOKS']['setNewPassword']) && is_array($GLOBALS['TL_HOOKS']['setNewPassword']))
			{
				foreach ($GLOBALS['TL_HOOKS']['setNewPassword'] as $callback)
				{
					$this->import($callback[0]);
					$this->$callback[0]->$callback[1]($objUser, $strPassword);
				}
			}
		}

		return $strPassword;
	}


	/**
	 * Store the date when the account has been added
	 * @param object
	 */
	public function storeDateAdded(DataContainer $dc)
	{
		// Return if there is no active record (override all)
		if (!$dc->activeRecord || $dc->activeRecord->dateAdded > 0)
		{
			return;
		}

		// Fallback solution for existing accounts
		if ($dc->activeRecord->lastLogin > 0)
		{
			$time = $dc->activeRecord->lastLogin;
		}
		else
		{
			$time = time();
		}

		$this->Database->prepare("UPDATE tl_member SET dateAdded=? WHERE id=?")
					   ->execute($time, $dc->id);
	}


	/**
	 * Generate the group wizard
	 * @param object
	 * @return string
	 */
	public function addGroupWizard(DataContainer $dc)
	{
		if ($this->Input->get('act') != 'overrideAll')
		{
			return '';
		}

		return '
</div>
<div>
  <h3 style="padding-top:7px"><label for="ctrl_update_mode">' . $GLOBALS['TL_LANG']['MSC']['updateMode'] . '</label></h3>
  <div id="ctrl_update_mode" class="tl_radio_container">
    <input type="radio" name="update_mode" id="opt_update_mode_1" class="tl_radio" value="add" onfocus="Backend.getScrollOffset();" /> <label for="opt_update_mode_1">' . $GLOBALS['TL_LANG']['MSC']['updateAdd'] . '</label><br />
    <input type="radio" name="update_mode" id="opt_update_mode_2" class="tl_radio" value="remove" onfocus="Backend.getScrollOffset();" /> <label for="opt_update_mode_2">' . $GLOBALS['TL_LANG']['MSC']['updateRemove'] . '</label><br />
    <input type="radio" name="update_mode" id="opt_update_mode_0" class="tl_radio" value="replace" checked="checked" onfocus="Backend.getScrollOffset();" /> <label for="opt_update_mode_0">' . $GLOBALS['TL_LANG']['MSC']['updateReplace'] . '</label>
  </div>';
	}


	/**
	 * Save the member groups according to the update mode
	 * @param mixed
	 * @param object
	 * @return mixed
	 */
	public function updateGroupMembership($varValue, DataContainer $dc)
	{
		if ($this->Input->get('act') != 'overrideAll' || !$this->Input->post('update_mode'))
		{
			return $varValue;
		}

		$objGroups = $this->Database->prepare("SELECT groups FROM tl_member WHERE id=?")
									->limit(1)
									->execute($dc->id);

		if ($objGroups->numRows < 1)
		{
			return $varValue;
		}

		$old = deserialize($objGroups->groups, true);
		$new = deserialize($varValue, true);

		switch ($this->Input->post('update_mode'))
		{
			case 'add':
				$varValue = array_values(array_unique(array_merge($old, $new)));
				break;

			case 'remove':
				$varValue = array_values(array_diff($old, $new));
				break;

			case 'replace':
				$varValue = $new;
				break;
		}

		if (!is_array($varValue) || empty($varValue))
		{
			return '';
		}

		return serialize($varValue);
	}


	/**
	 * Return the "toggle visibility" button
	 * @param array
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @param string
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (strlen($this->Input->get('tid')))
		{
			$this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 1));
			$this->redirect($this->getReferer());
		}

		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_member::disable', 'alexf'))
		{
			return '';
		}

		$href .= '&amp;tid='.$row['id'].'&amp;state='.$row['disable'];

		if ($row['disable'])
		{
			$icon = 'invisible.gif';
		}		

		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}


	/**
	 * Disable/enable a user group
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($intId, $blnVisible)
	{
		// Check permissions
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_member::disable', 'alexf'))
		{
			$this->log('Not enough permissions to activate/deactivate member ID "'.$intId.'"', 'tl_member toggleVisibility', TL_ERROR);
			$this->redirect('typolight/main.php?act=error');
		}

		$this->createInitialVersion('tl_member', $intId);
	
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_member']['fields']['disable']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_member']['fields']['disable']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnVisible = $this->$callback[0]->$callback[1]($blnVisible, $this);
			}
		}

		// Update the database
		$this->Database->prepare("UPDATE tl_member SET disable='" . ($blnVisible ? '' : 1) . "' WHERE id=?")
					   ->execute($intId);

		$this->createNewVersion('tl_member', $intId);

		// HOOK: update newsletter subscriptions
		if (in_array('newsletter', $this->Config->getActiveModules()))
		{
			$objUser = $this->Database->prepare("SELECT email FROM tl_member WHERE id=?")
									  ->limit(1)
									  ->execute($intId);

			if ($objUser->numRows)
			{
				$this->Database->prepare("UPDATE tl_newsletter_recipients SET active=? WHERE email=?")
							   ->execute(($blnVisible ? 1 : ''), $objUser->email);
			}
		}
	}
}

?>