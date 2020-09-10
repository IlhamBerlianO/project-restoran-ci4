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
			'judul' => 'DATA KATEGORI',
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
		$model = new Kategori_M();
		$kategori = $model -> find($id);

		$data = [
			'judul' => 'UPDATE DATA',
			'kategori' => $kategori
		];

		return view ("kategori/update", $data);
	}

	public function update()
	{
		$model = new Kategori_M();
		$model -> save($_POST);

		return redirect()->to(base_url()."/admin/kategori");
	}

	public function delete($id=null)
	{
		$model = new Kategori_M();
		$model -> delete($id);

		return redirect()->to(base_url()."/admin/kategori");
	}
	
	//--------------------------------------------------------------------

}
