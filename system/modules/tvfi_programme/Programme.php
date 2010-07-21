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
 * Class Programme
 *
 * @copyright		2010 - Kantik / Noodle 
 * @author			Alaittin Ozcan <aozcan@noodle.fr>, 
 * @package    		Model
 */
class Programme extends Cmodel
{
	/** 
	 * Name of the current table
	 * @var string
	 */
	protected $strTable = 'tl_tvfi_programme';

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
	
	protected $manyToMany = array
		(
			'Genre'  					=> 'tl_tvfi_programme_to_genre',
			'Format' 					=> 'tl_tvfi_programme_to_format',
			'Theme' 					=> 'tl_tvfi_programme_to_theme_programme',

			'Support' 				=> 'tl_tvfi_programme_to_support',
			'Version' 				=> 'tl_tvfi_programme_to_version',
			'SocieteVendeuse' => 'tl_tvfi_programme_to_bo_societe_vendeuse',			
			'FoSocieteVendeuse' => 'tl_tvfi_programme_to_fo_societe_vendeuse',			
		);


	protected $hasMany = array
		(
			'ProgrammePhoto'			
		);


	protected $strBaseUrl = '/programme/fiche/';

	// FRONT OFFICE METHODS
	
	public function getLocalizedLink()
	{
		return sprintf('<a href="%s" title="%s">%s</a>',
							ampersand(($this->Environment->base. $GLOBALS['TL_LANGUAGE'] . $this->strBaseUrl . $this->alias .$GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS),
							$this->localizedName,
							$this->localizedName
							);
	}
	
	
	public function getLocalizedName()
	{
		$_field = 'fpg_titre_' . $GLOBALS['TL_LANGUAGE'];
		return $this->$_field;
	}

	public function getUrl()
	{
		return ampersand(($this->Environment->base. $GLOBALS['TL_LANGUAGE'] . $this->strBaseUrl . $this->alias .$GLOBALS['TL_CONFIG']['urlSuffix']), ENCODE_AMPERSANDS);
	}


	
	public function getMainPhoto()
	{
		$photos = $this->ProgrammePhoto('id asc', array(), 1);
		
		return $photos[0]->fph_fichier;
	}



	// BACK OFFICE METHODS

 		
	/**
	 * Returns all the program formats
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
	 * Saves all the program formats
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
	 * Returns all the program themes
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
	 * Saves all the program themes
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
	 * Returns all the program genres
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
	 * Saves all the program genres
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
	 * Returns all the program supports
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_getSupports($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$supports = $this->Support();
		
		foreach($supports as $support)
		{
			$_supports[] = $support->id;
		}
		
		return serialize($_supports);
	}

	/**
	 * Saves all the program supports
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_saveSupports($varValue, DataContainer $dc)
	{
		if(!strlen($varValue)) return 0;
		
		$this->findBy('id', $dc->id);
		$values = unserialize($varValue);
		
		$this->setManyToMany('Support', $values);

		return 0;
	}
	
	/**
	 * Returns all the program versions
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_getVersions($varValue, DataContainer $dc)
	{
		$this->findBy('id', $dc->id);
		$versions = $this->Version();
		
		foreach($versions as $version)
		{
			$_versions[] = $version->id;
		}
		
		return serialize($_versions);
	}

	/**
	 * Saves all the program versions
	 * @var string
	 * @var DataContainer
	 * @return string
	 */	
	public function bo_saveVersions($varValue, DataContainer $dc)
	{
		if(!strlen($varValue)) return 0;
		
		$this->findBy('id', $dc->id);
		$values = unserialize($varValue);
		
		$this->setManyToMany('Version', $values);

		return 0;
	}
	
}
?>