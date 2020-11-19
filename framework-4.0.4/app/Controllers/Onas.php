<?php namespace App\Controllers;

use App\Models\UsersModel;


class Onas extends BaseController
{
	public function index()
	{
		$model = new UsersModel();
		$data = [
			'users' => $model->getUsers(),
			'title' => 'O nas',
		];
		echo view('templates/header', $data);
		echo view('users/onas_lista', $data);
		echo view('templates/footer', $data);
	}

	//--------------------------------------------------------------------

}
