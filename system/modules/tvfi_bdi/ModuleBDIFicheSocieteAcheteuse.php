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
 **/


/**
 * Class ModuleBDIFicheSocieteAcheteuse 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleBDIFicheSocieteAcheteuse extends FrontEndBloc
{

	/**
	 * Template
	 * @var string
	 */
	protected $contentTemplate = 'fe_bdi_fiche_societe_acheteuse';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### FICHE SOCIETE ACHETEUSE ###';

			return $objTemplate->parse();
		}
		
		if (TL_MODE == 'FE' && $_GET['ajax'])
		{
			$societe = new SocieteAcheteuse();
				
			if(!$societe->findBy('alias', $_GET['fiche']))
			{
				die("UNKNOWN COMPANY");
				exit;		
			}

			$member = new TvfiMember();
			$member->setFromFrontUser();

			$member->addManyToMany('SocieteAcheteuse', $societe->id);

			
			echo json_encode(array('status' => 'OK', 'content' => 'société ajoutée à vos favoris'));
			exit;
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
		
		$societe = new SocieteAcheteuse();
				
		if(!$societe->findBy('alias', $_GET['fiche']))
		{
			// TODO : redirect to 404
			die("UNKNOWN COMPANY");
			return;		
		}
		
						
		$contentTemplate = new FrontendTemplate($this->contentTemplate);
		$contentTemplate->societe = $societe;
		

		$contentTemplate->isFavorite = count($member->manyToMany( 'SocieteAcheteuse', array('id', array('id = ' . $societe->id)))) > 0 ? true : false;		
		
		
		$contentTemplate->addToFavoriteLink = ampersand(($this->Environment->base.$objPage->alias.'/fiche/'.$_GET['fiche'].'/ajax/true/action/addToFavorites' . $GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);
		$contentTemplate->organigramLink = ampersand(($this->Environment->base. $GLOBALS['TL_LANGUAGE'] .'/bdi/societes/organigramme/fiche/'.$_GET['fiche'] . $GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);
		
		$this->content = $contentTemplate->parse();

		$GLOBALS['TL_HEAD'][] = '<script type="text/javascript" src="http://maps.google.com/maps?file=api&v=2&key='. $GLOBALS['TL_CONFIG']['xkn_store_locator_googlemap_key'] .'"></script>';
		
		$GLOBALS['TL_HEAD'][] = '<script type="text/javascript">
		
			//<![CDATA[
			var map = null;
		    var geocoder = new GClientGeocoder();
			
		window.onload = function()
		{
			load();
		}
		
		function load() {
		  if (GBrowserIsCompatible()) {
		    map = new GMap2(document.getElementById("gmap"));
		    map.setCenter(new GLatLng(48.9, 2.3), 7);
		    map.addControl(new GSmallMapControl());
		    map.addControl(new GMapTypeControl());
			showAddress("'. str_replace('<br />', ', ', $societe->sta_adresse) .'")	

		  }
		}


	    function showAddress(address) {
	      if (geocoder) {
	        geocoder.getLatLng(
	          address,
	          function(point) {
	            if (!point) {
	              alert("Adresse : " + address + " est introuvable");
	            } else {
	              map.setCenter(point, 13);
	              var marker = new GMarker(point);
	              map.addOverlay(marker);
	              //marker.openInfoWindowHtml(address);
	            }
	          }
	        );
	      } else {
	      	alert(" Error loading map ");
	      }
	    }

			
			GUnload();
			
			//]]>
		</script>';

		
		$this->bloc_ombre = 'ombreBox3';
		
		return parent::compile();
	}

}

?>