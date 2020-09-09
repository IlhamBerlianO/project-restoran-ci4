<?php namespace App\Controllers;

class Kategori extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo "<h1>Belajar CI4</h1>";
	}

	public function select()
	{
		echo "Menampilkan semua data";
	}

	public function selectWhere($id=null)
	{
		echo "Menampilkan semua data yang dipilih";
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
