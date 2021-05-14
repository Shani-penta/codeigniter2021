<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function __construct() {
        helper("form");
    }
	public function index()
	{
		return view('login_view');

	}
}