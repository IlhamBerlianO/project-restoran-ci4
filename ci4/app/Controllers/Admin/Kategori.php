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
		$data = [
			'judul' => 'SELECT DATA DARI CONTROLLER',
			'kategori' => ['Makanan', 'Minuman', 'Jajan', 'Gorengan', 'Buah']
		];

		return view ("kategori/select", $data);
	}

	public function selectWhere($id=null)
	{
		echo "<h1>Menampilkan semua data yang dipilih $id</h1>";
	}

	public function formInsert()
	{
		return view ("kategori/forminsert");
	}

	public function formUpdate($id=null)
	{
		echo view ("template/header");
		echo view ("kategori/update");
		echo view ("template/footer");
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
