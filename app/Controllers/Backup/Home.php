<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}
	public function dashboard()
	{
		return view('user/index');
	}
}
