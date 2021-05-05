<?php

namespace App\Controllers;

class AgregarController extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('agregar');
		echo view('layouts/footer');
	}
}