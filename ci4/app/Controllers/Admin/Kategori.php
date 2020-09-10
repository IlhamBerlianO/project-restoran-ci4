<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo "<h1>Belajar CI4</h1>";
	}

	public function read()
	{
		$model = new Kategori_M();
		$kategori = $model -> findAll();

		$data = [
			'judul' => 'SELECT DATA DARI CONTROLLER',
			'kategori' => $kategori
		];

		return view ("kategori/select", $data);
	}

	// public function selectWhere($id=null)
	// {
	// 	echo "<h1>Menampilkan semua data yang dipilih $id</h1>";
	// }

	public function create()
	{
		return view ("kategori/insert");
	}

	public function insert()
	{
		$model = new Kategori_M();
		$model -> insert($_POST);

		return redirect()->to(base_url()."/admin/kategori");
	}

	public function find($id=null)
	{
		// echo view ("template/header");
		// echo view ("kategori/update");
		// echo view ("template/footer");
		echo "<h1>Update Data</h1>";
	}

	public function update($id=null)
	{
		echo "Prses update data $id";
	}

	public function delete($id=null)
	{
		$model = new Kategori_M();
		$model -> delete($id);

		return redirect()->to(base_url()."/admin/kategori");
	}
	
	//--------------------------------------------------------------------

}
