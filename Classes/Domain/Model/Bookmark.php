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
 * Bookmark
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */


class Tx_TsExtbaselinks_Domain_Model_Bookmark extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * comment
	 * @var string
	 * @validate NotEmpty
	 */
	protected $comment;
	
	/**
	 * public_state
	 * @var boolean
	 * @validate NotEmpty
	 */
	protected $public_state;
	
	/**
	 * link
	 * @var Tx_TsExtbaselinks_Domain_Model_Link
	 */
	protected $link;
	
	/**
	 * user
	 * @var Tx_TsExtbaselinks_Domain_Model_FeUser
	 */
	protected $user;
	

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
	 * Getter for comment
	 *
	 * @return string comment
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Setter for comment
	 *
	 * @param string $comment comment
	 * @return void
	 */
	public function setComment($comment) {
		$this->comment = $comment;
	}
	
	/**
	 * Getter for public_state
	 *
	 * @return boolean public_state
	 */
	public function getPublic_state() {
		return $this->public_state;
	}

	/**
	 * Setter for public_state
	 *
	 * @param boolean $public_state public_state
	 * @return void
	 */
	public function setPublic_state($public_state) {
		$this->public_state = $public_state;
	}
	
	/**
	 * Getter for link
	 *
	 * @return Tx_TsExtbaselinks_Domain_Model_Link link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Setter for link
	 *
	 * @param Tx_TsExtbaselinks_Domain_Model_Link $link link
	 * @return void
	 */
	public function setLink(Tx_TsExtbaselinks_Domain_Model_Link $link) {
		$this->link = $link;
	}
	
	/**
	 * Getter for user
	 *
	 * @return Tx_TsExtbaselinks_Domain_Model_FeUser user
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * Setter for user
	 *
	 * @param Tx_TsExtbaselinks_Domain_Model_FeUser $user user
	 * @return void
	 */
	public function setUser(Tx_TsExtbaselinks_Domain_Model_FeUser $user) {
		$this->user = $user;
	}
	
}
?>