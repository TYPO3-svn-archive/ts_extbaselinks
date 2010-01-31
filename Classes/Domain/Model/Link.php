<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 
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
 * Link
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */


class Tx_TsExtbaselinks_Domain_Model_Link extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * description
	 * @var string
	 * @validate NotEmpty
	 */
	protected $description;
	
	/**
	 * url
	 * @var string
	 * @validate NotEmpty
	 */
	protected $url;
	
	/**
	 * mark_dead
	 * @var string
	 */
	protected $mark_dead;
	
	/**
	 * category
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_TsExtbaselinks_Domain_Model_Category>
	 */
	protected $category;
	

	/**
	 * Constructor. Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 */
	public function __construct() {
		
	}
	
	/**
	 * Getter for title
	 *
	 * @return string title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Setter for title
	 *
	 * @param string $title title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
	
	/**
	 * Getter for description
	 *
	 * @return string description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Setter for description
	 *
	 * @param string $description description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}
	
	/**
	 * Getter for url
	 *
	 * @return string url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Setter for url
	 *
	 * @param string $url url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}
	
	/**
	 * Getter for mark_dead
	 *
	 * @return string mark_dead
	 */
	public function getMark_dead() {
		return $this->mark_dead;
	}

	/**
	 * Setter for mark_dead
	 *
	 * @param string $mark_dead mark_dead
	 * @return void
	 */
	public function setMark_dead($mark_dead) {
		$this->mark_dead = $mark_dead;
	}
	
	/**
	 * Getter for category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_TsExtbaselinks_Domain_Model_Category> category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Setter for category
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_TsExtbaselinks_Domain_Model_Category> $category category
	 * @return void
	 */
	public function setCategory(Tx_Extbase_Persistence_ObjectStorage $category) {
		$this->category = $category;
	}
	
}
?>