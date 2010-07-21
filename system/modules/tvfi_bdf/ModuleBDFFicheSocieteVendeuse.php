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
 * Class ModuleBDFFicheSocieteVendeuse 
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Erwan Ripoll <eripoll@noodle.fr>
 * @package    Controller
 */
class ModuleBDFFicheSocieteVendeuse extends FrontEndBloc
{

	/**
	 * Template
	 * @var string
	 */
	protected $contentTemplate = 'fe_bdf_fiche_societe_vendeuse';

	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### FICHE SOCIETE VENDEUSE ###';

			return $objTemplate->parse();
		}
		
		if (TL_MODE == 'FE' && $_GET['ajax'])
		{
			$societe = new FoSocieteVendeuse();
				
			if(!$societe->findBy('alias', $_GET['fiche']))
			{
				die("UNKNOWN COMPANY");
				exit;		
			}

			$member = new TvfiMember();
			$member->setFromFrontUser();

			$member->addManyToMany('FoSocieteVendeuse', $societe->id);

			
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
		
		$societe = new FoSocieteVendeuse();
				
		if(!$societe->findBy('alias', $_GET['fiche']))
		{
			// TODO : redirect to 404
			die("UNKNOWN COMPANY");
			return;		
		}
		
						
		$contentTemplate = new FrontendTemplate($this->contentTemplate);
		$contentTemplate->societe = $societe;
		

		$contentTemplate->isFavorite = count($member->manyToMany( 'FoSocieteVendeuse', array('id', array('id = ' . $societe->id)))) > 0 ? true : false;		
		
		
		$contentTemplate->addToFavoriteLink = ampersand(($this->Environment->base.$objPage->alias.'/fiche/'.$_GET['fiche'].'/ajax/true/action/addToFavorites' . $GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);
		$contentTemplate->organigramLink = ampersand(($this->Environment->base. $GLOBALS['TL_LANGUAGE'] .'/annuaire/societes/organigramme/fiche/'.$_GET['fiche'] . $GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);
		
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
			showAddress("' . $societe->fsv_adresse .', ' . $societe->fsv_ville .', F' . $societe->fsv_code_postal .'")	

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

		//$GLOBALS['TL_HEAD'][] = '<script type="text/javascript" src="plugins/mootabs/mootabs.js"> </script>';
		//$GLOBALS['TL_HEAD'][] = '<link media="screen" type="text/css" href="plugins/mootabs/mootabs.css" rel="stylesheet" />';
		
		$this->bloc_ombre = 'ombreBox3';
		
		$GLOBALS['TL_HEAD'][] = '<link rel="stylesheet" type="text/css" href="plugins/xkn_tools/horizontal.css" />';
		//$GLOBALS['TL_HEAD'][] = '<script type="text/javascript" src="/plugins/slideitmoo/slideitmoo.js"></script>';

$GLOBALS['TL_HEAD'][] = '<script language="javascript" type="text/javascript">
					window.addEvents({
						\'domready\': function(){

							new SlideItMoo({
										overallContainer: \'SlideItMoo_outer\',
										elementScrolled: \'SlideItMoo_inner\',
										thumbsContainer: \'SlideItMoo_items\',		
										itemsVisible:1,
										duration:300,
										itemsSelector: \'.SlideItMoo_element\',
										itemWidth: 505,
										showControls:1,
										startIndex:1,
										onChange: function(index){
											
										}
							
							});
						}
					});
				</script>';

		
		return parent::compile();
	}

}

?>