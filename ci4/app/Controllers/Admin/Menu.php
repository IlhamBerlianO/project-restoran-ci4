<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Menu extends BaseController
{
	public function index()
	{
		return view('menu/form');
	}

	public function insert()
	{
		$file = $this->request->getFile('gambar');

		$name = $file->getName();

		$file->move('./upload');

		echo $name." Sudah Di Upload";
	}

	// public function select()
	// {
	// 	echo "<h1>untuk menampilkan data</h1>";
	// }
	
	// public function update($id=null,$nama=null)
	// {
	// 	echo "<h1>untuk update data dengan id : $id  $nama</h1>";
	// }

	//--------------------------------------------------------------------

}
