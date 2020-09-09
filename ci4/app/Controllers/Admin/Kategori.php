<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Kategori extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo "<h1>Belajar CI4</h1>";
	}

	public function select()
	{
		echo "<h1>Menampilkan semua data</h1>";
	}

	public function selectWhere($id=null)
	{
		echo "<h1>Menampilkan semua data yang dipilih $id</h1>";
	}

	public function formInsert()
	{
		echo "Menampilkan form insert";
	}

	public function formUpdate()
	{
		echo "Menampilkan form update";
	}

	public function update($id=null)
	{
		echo "Prses update data $id";
	}

	public function delete($id=null)
	{
		echo "Proses delete data";
	}
	
	//--------------------------------------------------------------------

}
