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
 * Class ModuleBreadcrumb
 *
 * Front end module "breadcrumb".
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.typolight.org>
 * @package    Controller
 */
class ModuleBreadcrumb extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_breadcrumb';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### BREADCRUMB NAVIGATION ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'typolight/main.php?do=modules&amp;act=edit&amp;id=' . $this->id;

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

		$pages = array();
		$items = array();
		$pageId = $objPage->id;
		$type = null;

		// Get all pages up to the root page
		do
		{
			$objPages = $this->Database->prepare("SELECT * FROM tl_page WHERE id=?")
									   ->limit(1)
									   ->execute($pageId);

			$type = $objPages->type;
			$pageId = $objPages->pid;
			$pages[] = $objPages->row();
		}
		while ($pageId > 0 && $type != 'root' && $objPages->numRows);

		// Get the first active regular page and display it instead of the root page
		if ($type == 'root')
		{
			if ($this->includeRoot)
			{
				$time = time();

				// Get first page
				$objFirstPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE pid=? AND type!='root' AND type!='error_403' AND type!='error_404'" . (!BE_USER_LOGGED_IN ? " AND (start='' OR start<$time) AND (stop='' OR stop>$time) AND published=1" : "") . " ORDER BY sorting")
											   ->limit(1)
											   ->execute($objPages->id);

				$items[] = array
				(
					'isRoot' => true,
					'isActive' => false,
					'href' => (($objFirstPage->numRows) ? $this->generateFrontendUrl($objFirstPage->fetchAssoc()) : $this->Environment->base),
					'title' => (strlen($objPages->pageTitle) ? specialchars($objPages->pageTitle) : specialchars($objPages->title)),
					'link' => $objPages->title
				);
			}

			array_pop($pages);
		}

		// Link to website root
		elseif ($this->includeRoot)
		{
			$items[] = array
			(
				'isRoot' => true,
				'isActive' => false,
				'href' => $this->Environment->base,
				'title' => specialchars($GLOBALS['TL_CONFIG']['websiteTitle']),
				'link' => $GLOBALS['TL_CONFIG']['websiteTitle']
			);
		}

		// Build breadcrumb menu
		for ($i=(count($pages)-1); $i>0; $i--)
		{
			if (($pages[$i]['hide'] && !$this->showHidden) || (!$pages[$i]['published'] && !BE_USER_LOGGED_IN))
			{
				continue;
			}

			// Get href
			switch ($pages[$i]['type'])
			{
				case 'redirect':
					$href = $pages[$i]['url'];

					if (strncasecmp($href, 'mailto:', 7) === 0)
					{
						$this->import('String');
						$href = $this->String->encodeEmail($href);
					}
					break;

				case 'forward':
					$objNext = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")
											  ->limit(1)
											  ->execute($pages[$i]['jumpTo']);

					if ($objNext->numRows)
					{
						$href = $this->generateFrontendUrl($objNext->fetchAssoc());
						break;
					}
					// DO NOT ADD A break; STATEMENT

				default:
					$href = $this->generateFrontendUrl($pages[$i]);
					break;
			}

			$items[] = array
			(
				'isRoot' => false,
				'isActive' => false,
				'href' => $href,
				'title' => (strlen($pages[$i]['pageTitle']) ? specialchars($pages[$i]['pageTitle']) : specialchars($pages[$i]['title'])),
				'link' => $pages[$i]['title']
			);
		}

		// Active article
		if (strlen($this->Input->get('articles')))
		{
			$items[] = array
			(
				'isRoot' => false,
				'isActive' => false,
				'href' => $this->generateFrontendUrl($pages[0]),
				'title' => (strlen($pages[0]['pageTitle']) ? specialchars($pages[0]['pageTitle']) : specialchars($pages[0]['title'])),
				'link' => $pages[0]['title']
			);

			list($strSection, $strArticle) = explode(':', $this->Input->get('articles'));

			if (is_null($strArticle))
			{
				$strArticle = $strSection;
			}

			// Get article title
			$objArticle = $this->Database->prepare("SELECT title FROM tl_article WHERE id=? OR alias=?")
										 ->limit(1)
										 ->execute((is_numeric($strArticle) ? $strArticle : 0), $strArticle);

			if ($objArticle->numRows)
			{
				$items[] = array
				(
					'isRoot' => false,
					'isActive' => true,
					'title' => specialchars($objArticle->title),
					'link' => $objArticle->title
				);
			}
		}

		// Active page
		else
		{
			$items[] = array
			(
				'isRoot' => false,
				'isActive' => true,
				'title' => (strlen($pages[0]['pageTitle']) ? specialchars($pages[0]['pageTitle']) : specialchars($pages[0]['title'])),
				'link' => $pages[0]['title']
			);
		}

		$this->Template->items = $items;
	}
}

?>