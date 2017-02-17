<?php

/*
 * This file is part of the Tributum project.
 *
 * (c) Nils Bohrs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Tributum;

use Tributum\Database;

class Database extends \PDO {
	
	/*
	 * class variables
	 */
	
	
	/*
	 * getter/setter
	 */
	
	
	/**
	 * constructor
	 * @param string $dbPath absolute path to database file
	 */
	public function __construct(string $dbPath) {
		
		// open database
		parent::__construct('sqlite:'.$dbPath);
	}
}
