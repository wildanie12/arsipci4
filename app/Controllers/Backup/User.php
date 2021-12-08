<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('user/dashboard');
    }
    public function dashboard()
    {
        return view('user/dashboard');
    }
}
