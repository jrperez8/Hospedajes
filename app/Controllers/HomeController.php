<?php

namespace App\Controllers;

class HomeController extends BaseController
{
	public function index()
	{
		echo view('layouts/fheader');
		echo view('home');
		echo view('layouts/footer');
	}
}
