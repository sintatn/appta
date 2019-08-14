<?php

/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author 		Firman Setiawan
 * @copyright	Copyright (c) Firman Setiawan
 *
 */

namespace app\Models;

#####################################
## EXAMPLE FOR CONTROLLER
#####################################

use app\Core\ModelClass;

class Name extends ModelClass
{
	private $table = ''; // isi dengan nama tabel sesuai dengan model yang digunakan

	function __construct()
	{
		parent::__construct(); // memanggil fungsi construct induk class
		$this->_db->table($this->table); // set untuk pemanggilan fungsi database
	}

	public function FunctionName($value='')
	{
		# code...
	}
	
}