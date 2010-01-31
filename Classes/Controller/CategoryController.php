<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Timo Schmidt <timo-schmidt@gmx.net>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Controller for the category object. 
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_TsExtbaselinks_Controller_CategoryController extends Tx_Extbase_MVC_Controller_ActionController {
	
	/**
	 * Shows a browseable list of categories.
	 * 
	 * @param Tx_TsExtbaselinks_Domain_Model_Category $parent
	 * @return string The rendered list action
	 */
	public function listAction(Tx_TsExtbaselinks_Domain_Model_Category $parent = null) {
		//create an instance of the category repository
		$categoryRepository = new Tx_TsExtbaselinks_Domain_Repository_CategoryRepository();
		$this->view->assign('categories', $categoryRepository->findByParentCategory($parent));
	}
	
}
?>
