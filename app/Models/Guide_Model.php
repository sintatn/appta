<?php
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 */

// -------------------------------------------------------------------------------------------------

namespace app\Models;

use app\Core\ModelClass;

// -------------------------------------------------------------------------------------------------

class Guide extends ModelClass
{
	private $table  = ''; //set ypur table name in here

	function __construct()
	{
		// call __construct modelclass
		// not delete (!important)
		parent::__construct();
		// set table name default for all method
		// table name set your model
		$this->_db->table($this->table);
	}

	// create --------------------------------------------------------------------------------------------------------

	//model untuk menambah data baru
	public function tambahtable()
	{
		$d['field1']		= $_POST['field2'];
		$d['field2']		= $_POST['field2'];
		$d['field3']		= $_POST['field3'];
		return $this->_db->insert($d);
	}

	//read -----------------------------------------------------------------------------------------------------------
	
	//model untuk melihat seluruh data dalam tabel
	public function listtable()
	{
		return $this->_db->fetch();
	}

	//model untuk meilhat salah satu data dalam tabel
	public function listtableid($id)
	{
		return $this->_db->fetchid($id);
	}

	//model untuk melihat salah satu data menurut file tertentu
	public function listtablesetfield($field)
	{
		$this->_db->where("field = '$field' OR field LIKE '%$field%'");
		return $this->_db->fetch();
	}

	//update ---------------------------------------------------------------------------------------------------------
	
	//model untuk mengubah salah satu data
	public function ubahtableid($id)
	{
		$d['field1']		= $_POST['field2'];
		$d['field2']		= $_POST['field2'];
		$d['field3']		= $_POST['field3'];
		return $this->_db->update($d,"id='$id'");
	}

	//model untuk mengubah seluruh data berdasarkan field tertentu
	public function ubahtablesetfield($id){

			$d['field1']		= $_POST['field1'];
		return $this->_db->update($d,"id='$id'");
	}

	//delete ---------------------------------------------------------------------------------------------------------
	
	//model untuk menghapus seluruh data dalam tabel
	public function hapustable()
	{
		return $this->_db->delete($this->tabel);
	}

	//model untuk menghapus salah satu data dalam tabel
	public function hapustableid($id)
	{
		return $this->_db->delete("id='$id'");
	}

	//jumdata----------------------------------------------------------------------------------------------------------

	//model untuk mengetahui jumlah data dalam tabel
	public function jumlahtable()
	{
		return $this->_db->jumdata();
	}

}