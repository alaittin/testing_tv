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
 * @package    Frontend
 * @license    LGPL
 * @filesource
 */


/**
 * Class ContentAccordion
 *
 * Front end content element "accordion".
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Controller
 */
class ContentAccordion extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_accordion';


	/**
	 * Generate content element
	 */
	protected function compile()
	{
		// Accordion start
		if ($this->mooType == 'start')
		{
			if (TL_MODE == 'FE')
			{
				$this->strTemplate = 'ce_accordion_start';
				$this->Template = new FrontendTemplate($this->strTemplate);
				$this->Template->setData($this->arrData);
			}
			else
			{
				$this->strTemplate = 'be_wildcard';
				$this->Template = new BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### ACCORDION WRAPPER START ###';
				$this->Template->title = $this->mooHeadline;
			}
		}

		// Accordion end
		elseif ($this->mooType == 'stop')
		{
			if (TL_MODE == 'FE')
			{
				$this->strTemplate = 'ce_accordion_stop';
				$this->Template = new FrontendTemplate($this->strTemplate);
				$this->Template->setData($this->arrData);
			}
			else
			{
				$this->strTemplate = 'be_wildcard';
				$this->Template = new BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### ACCORDION WRAPPER END ###';
			}
		}

		// Accordion default
		else
		{
			$this->import('String');

			// Clean RTE output
			$this->Template->text = str_ireplace
			(
				array('<u>', '</u>', '</p>', '<br /><br />', ' target="_self"'),
				array('<span style="text-decoration:underline;">', '</span>', "</p>\n", "<br /><br />\n", ''),
				$this->String->encodeEmail($this->text)
			);

			$this->Template->addImage = false;

			// Add image
			if ($this->addImage && strlen($this->singleSRC) && is_file(TL_ROOT . '/' . $this->singleSRC))
			{
				$this->addImageToTemplate($this->Template, $this->arrData);
			}
		}

		$classes = deserialize($this->mooClasses);

		$this->Template->toggler = strlen($classes[0]) ? $classes[0] : 'toggler';
		$this->Template->accordion = strlen($classes[1]) ? $classes[1] : 'accordion';
		$this->Template->headlineStyle = $this->mooStyle;
		$this->Template->headline = $this->mooHeadline;
	}
}

?>