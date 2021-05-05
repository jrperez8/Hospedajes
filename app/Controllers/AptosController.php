<?php

namespace App\Controllers;

class AptosController extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('aptos');
		echo view('layouts/footer');
	}
}