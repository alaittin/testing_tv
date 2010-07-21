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
 * Class TvfiHtml
 *
 * change back-office forms replace use tabs as menu, each legend is ina different tab
 * @copyright		2010 - Kantik / Noodle 
 * @author			Alaittin Ozcan <aozcan@noodle.fr>, 
 * @package			TVFI
 *
 */
class TvfiHtml extends Backend
{

	/**
	 * function parseHtml, this is a helper method taken from: 
	 * parse page and return in as an array
	 * @param string
	 * @return array
	 */
	
	public function parseHtml( $s_str )
	{
		$i_indicatorL   = 0;
		$i_indicatorR   = 0;
		$s_tagOption    = "";
		$i_arrayCounter = 0;
		$a_html = array();
		// Search for a tag in string
		while( is_int(($i_indicatorL=strpos($s_str,"<",$i_indicatorR))) ) 
		{
			// Get everything into tag...
			$i_indicatorL++;
			$i_indicatorR = strpos($s_str,">", $i_indicatorL);
			$s_temp = substr($s_str, $i_indicatorL, ($i_indicatorR-$i_indicatorL) );
			$a_tag = explode( ' ', $s_temp );
			// Here we get the tag's name
			list( ,$s_tagName,, ) = each($a_tag);
			$s_tagName = strtoupper($s_tagName);
			// Well, I am not interesting in <br>, </font> or anything else like that...
			// So, this is false for tags without options.
			$b_boolOptions = is_array(($s_tagOption=each($a_tag))) && $s_tagOption[1];
			if( $b_boolOptions ) 
			{
				// Without this, we will mess up the array
				$i_arrayCounter = (int)count($a_html[$s_tagName]);
				// get the tag options, like src="htt://". Here, s_tagTokOption is 'src'	and s_tagTokValue is '"http://"'

				do {
					$s_tagTokOption = strtoupper(strtok($s_tagOption[1], "="));
					$s_tagTokValue = trim(strtok("="));
					$a_html[$s_tagName][$i_arrayCounter][$s_tagTokOption] = $s_tagTokValue;
					$b_boolOptions = is_array(($s_tagOption=each($a_tag))) &&	$s_tagOption[1];
				} while( $b_boolOptions );
			}
		}
		return $a_html;
	}
	
	/**
	 * function languageFileForTabs
	 * parse page and return in as an array
	 * @param string
	 * @return string
	 */
	
	public function languageFileForTabs($module){

		foreach ($GLOBALS['BE_MOD'] as $x => $y)
		{
			foreach ($y as $x1 => $y1)
			{			
				if ($x1 == $module){
					if (count($y1['tables']) == 1 )
					{		
						return $GLOBALS['TL_LANG'][$y1['tables'][0]];
					}
					# if there is more than one language file(=table) then load all of them
					elseif (count($y1['tables']) > 1 )
					{	
						$return_arr = array();
						foreach ($y1['tables'] as $k => $v)
						{
							$return_arr = array_merge((array)$return_arr,(array)$GLOBALS['TL_LANG'][$v]);
						}	
						return $return_arr;
					}
				}
			}
		}
		return "";
	}

	/**
	 * function replaceFieldsetWithTab
	 * parse page and return in as an array
	 * @param string
	 * @param string	
	 * @return string
	 */
		
	public function modifyHTML($strContent, $strTemplate){
		# save selected societe in session to use for editing related modules for example the programmes of the societe or contacts or users...
		if (($this->Input->get('do') == 'societe_vendeuse') && ($this->Input->get('id') != ''))
		{
			$sv = new SocieteVendeuse();
			$sv->findBy('id', $this->Input->get('id'));
			$this->Session->set('selected_societe_vendeuse', $sv);
		}


 		$strContent = $this->replaceFieldsetWithTab($strContent, $strTemplate);
 		#$strContent = $this->activeItemMenu($strContent, $strTemplate);
		return $strContent;
	}
	
	
	/**
	 * function activeItemMenu
	 * if there is an societe, programm etc then show its menu  at the top of leftside nav menu
	 * @param string
	 * @param string	
	 * @return string
	 */
		
	public function activeItemMenu($strContent, $strTemplate){
		
		if (($this->Input->get('do') == 'societe_vendeuse') && ($this->Input->get('id') != ''))
		{
			$sv = new SocieteVendeuse();
			$sv->findBy('id', $this->Input->get('id'));
			$this->Session->set('selected_societe_vendeuse', $sv);
		}

		$mods = array(
			'programmes' => array
			(
				'tables' => array('tl_tvfi_programmes'),
				'icon'   => 'system/modules/tvfi_programme/html/imgs/programme.gif',
				'title'   => 'Programmes',
				'do'			=> 'data_version',
				'act'			=> 'list_societe_programmes'
			),
	
			'member' => array
			(
				'tables' => array('tl_member'),
				'icon'   => 'system/modules/tvfi_bdf/html/imgs/utilisateur.gif',
				'title'   => 'Utilisateurs',
				'do'			=> 'data_version',
				'act'			=> 'list_societe_utilisateurs'			
			),	
			'data_version' => array
			(
				'tables' => array('tl_tvfi_data_version'),
				'icon'   => 'system/modules/tvfi_bdf/html/imgs/validate.png',
				'title'  => 'Validations',
				'do'		 => 'data_version',
				'act'	 	 => 'view_societe_changes'			
			)				
		);
 
		$sv = $this->Session->get('selected_societe_vendeuse'); 	

		if ($sv){
					$menu_str = "
								<li class=\"tl_level_1_group\" style='background:#EBFDD7;'>
										<a onclick=\"var el = document.getElementById('Societe_".$sv->id."');
										    el.style.display = (el.style.display != 'none' ? 'none' : '' ); return false;\" 
												href=\"typolight/main.php?do=societe_vendeuse&amp;id=".$sv->id."&amp;mtg=societe_vendeuse\">
												<img alt=\"\" src=\"system/themes/default/images/modMinus.gif\">
												".$sv->fsv_nom."
										</a>
								</li>
								<li id=\"Societe_".$sv->id."\" class=\"tl_parent\" style=\"display: inline;\">
			         		<ul class=\"tl_level_2\"  style='background:#EBFDD7;'>";
					
					foreach ($mods as $strModule=>$arrConfig) 
					{ 
			  			$menu_str .= "<li><a href=\"typolight/main.php?do=".$arrConfig['do']."&act=".$arrConfig['act']."\" class=".$arrConfig['class']." title=".$arrConfig['title']." ".$arrConfig['icon']."> ".$arrConfig['title']." </a></li>";
					}
			
			$menu_str .= "</ul></li>";
			$replace_item = "<ul class=\"tl_level_1\">";
								
			$strContent = str_replace($replace_item, $menu_str.$replace_item, $strContent);
		}
		return $strContent; 
	}
	
			
	/**
	 * function replaceFieldsetWithTab
	 * Replace field set tags with tabs for editing screens
	 * @param string
	 * @param string	
	 * @return string
	 */
		
	public function replaceFieldsetWithTab($strContent, $strTemplate){
		
		$content = $this->parseHtml($strContent);

		if ($strTemplate == 'be_main' && isset($content["FIELDSET"]))
		{
			$labels    = $this->languageFileForTabs($this->Input->get('do'));
			$tabsStr   = "<div class=\"tl_formbody_edit\">"."<ul id='tabs-nav'>";			
			$javaScipt = "<script type='text/javascript'>"; 

			foreach ($content["FIELDSET"] as $k => $v)
			{
				# create tabs' id
				$id = str_replace("\"","",str_replace('pal_','',$v['ID'])); 

				# create tabs 
				$tabsStr .= "<li class='tab' id='".$id."'><a href='?js=on&tab=".$id."'> <span class='tab-label'>".$labels[$id]."</span></a></li>";

				# hide from second legend to last one, just show first as default
				$javaScipt .= ($k != 0 ) ? "document.getElementById(".$v['ID'].").style.display='none';" : '';
			}
			
			# if there is last modified date in field set then show first two field set, (date, and the firts one)
			$javaScipt .= (!isset($content["FIELDSET"][0]['ID'])) ? "document.getElementById(".$content["FIELDSET"][1]['ID'].").style.display='block';" : '';
						
			$javaScipt .= "</script>";
			$tabsStr  .= "</ul>";

			# replace page content, insert js inside page code
			$strContent = str_replace("<div class=\"tl_formbody_edit\">",$tabsStr,$strContent);
			$strContent = str_replace("</body>",$javaScipt."</body>",$strContent);
		}

		return $strContent;
	}

}
?>