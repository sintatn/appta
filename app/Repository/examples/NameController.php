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

namespace app\Controllers;


#####################################
## EXAMPLE FOR CONTROLLER
#####################################

use app\Core\Controller; // alias namespace

// panduan untuk nama controller harus sesuai dengan nama file
class NameController extends Controller

{
	function __construct()
	{
		parent::__construct();
		// kode yang akan dijalankan terus ketika controller dipanggil
	}
	  
	  // method default dan harus ada di setiap controller
    public function index()
    {
     	// tulis kode disini
    }

    public function FunctionName($value='')
    {
    	# code...
    }
}
