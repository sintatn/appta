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

class Crud extends ModelClass
{

	## insert
	// framework mini not support for this function
	##############################################################

	## read
	##############################################################
	// fungsi untuk menampilkan semua data pada satu tabel
	public function read($table,$output=null)
	{
		$this->_db->table($table);
		return $this->_db->fetch($output);
	}

	// fungsi untuk menampilkan satu data pada satu tabel
	public function readID($table,$id)
	{
		$this->_db->table($table);
		return $this->_db->fetchid($id);
	}

	// fungsi untuk menampilkan data pada dua tabel relasi
	public function readJoin($tablefk,$tablepk,$output=null)
	{
		$this->_db->table($tablefk,$tablepk);
		return $this->_db->fetchjoin($output);
	}

	##############################################################


	## update
	// framework mini not support for this function
	##############################################################


	## delete
	##############################################################
	// menghapus isi pada suatu tabel
	public function delete($table)
	{
		$this->_db->table($table);
		return $this->_db->delete();
	}
	
	// fungsi untuk menghapus satu data pada tabel
	public function deleteId($table,$id)
	{
		$this->_db->table($table);
		return $this->_db->delete($id);
	}
	##############################################################
}