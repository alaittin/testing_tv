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
 * @package			Core 
 * @license			GPL 
 **/


/**
 * Class ModuleNotificationIcons 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleNotificationIcons extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mo_notification_icons';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### ICONE NOTIFICATIONS ###';

			return $objTemplate->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate module
	 */
	protected function compile()
	{
		global $objPage;

		$member = new TvfiMember();
		$member->setFromFrontUser();
		
		$this->Template = new FrontendTemplate($this->strTemplate);
		
		// Getting the last notification viewed timestamp
		
		$last = $member->tstamp_notifications;
		
		// The notifications depend on the member's group
		
		$totalNotifications = 0;
		
		if($member->isAdherent())
		{			
			// Get the notifications for the member's SocieteAcheteuses
		
			$societesAcheteuses = $member->SocieteAcheteuse();
			
			foreach($societesAcheteuses as $_societe)
			{
				$action = new JournalAction();
				$actions = $action->getAll( 'tstamp desc', array( 'tstamp >= '.$last.' and entity = ? and item = ?', 'SocieteAcheteuse', $_societe->id));
				
				$totalNotifications = $totalNotifications + count($actions);
			
			}
		
		
		}
				
		
		// Retrieving total favorite companies
		$this->Template->totalNotifications = $totalNotifications;
		$this->Template->member = $member;
		
		//$this->Database->
		
		
		return;
						
	}

}

?>