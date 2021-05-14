<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// echo view('layouts/header');
		echo view('index');
		// echo view('layouts/footer');

	}
	public function main()
	{
		return view('homeview');
	}
}
