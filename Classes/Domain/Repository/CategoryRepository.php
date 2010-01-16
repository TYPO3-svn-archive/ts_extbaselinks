<?php
/***************************************************************
*  Copyright notice
*
*  (c)  TODO - Timo Schmidt 2010 <timo-schmidt@gmx.net>
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
 * Repository for Tx_TsExtbaselinks_Domain_Model_Category
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_TsExtbaselinks_Domain_Repository_CategoryRepository extends Tx_Extbase_Persistence_Repository {
	
	/**
	 * This method is used to retrieve all child categories by a given parent category id.
	 * 
	 * @return array
	 */
	public function findByParentCategory(Tx_TsExtbaselinks_Domain_Model_Category $parent = null){
		//on the firstlevel we need all categorys without a given parent category
		//on all other levels we need the category where uid_foreign contains the id 
		//of the parent category.
		
		if($parent instanceof Tx_TsExtbaselinks_Domain_Model_Category){ 
			$id = $parent->getUid();
		}else{
			$id = null; 			
		}
		
		/**
		 * Build Query:
		 * SELECT * FROM tx_tsextbaselinks_domain_model_category
		 * LEFT JOIN tx_tsextbaselinks_category_category_mm ON tx_tsextbaselinks_category_category_mm.uid_local = tx_tsextbaselinks_domain_model_category.uid
		 * WHERE uid_foreign (IS NULL | = 1,2,...)	
		 */	
			
		$query = $this->createQuery();
		$QOMFactory = $this->persistenceManager->getBackend()->getQOMFactory();

		/* @var $QOMFactory Tx_Extbase_Persistence_QOM_QueryObjectModelFactory */
		$left 			= $QOMFactory->selector(null, 'tx_tsextbaselinks_domain_model_category');
		$right			= $QOMFactory->selector(null, 'tx_tsextbaselinks_category_category_mm');
		$joinCondition 	= $QOMFactory->equiJoinCondition('tx_tsextbaselinks_category_category_mm', 'uid_local', 'tx_tsextbaselinks_domain_model_category', 'uid');
		$join 			= $QOMFactory->join($left, $right, Tx_Extbase_Persistence_QOM_QueryObjectModelConstantsInterface::JCR_JOIN_TYPE_INNER, $joinCondition);
		
		$query->setSource($join);
		$query->matching($query->equals('uid_foreign',$id));
		
		return $query->execute();
	}
}
?>