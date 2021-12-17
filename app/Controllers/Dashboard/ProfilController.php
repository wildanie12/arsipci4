<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class ProfilController extends BaseController
{
	public function index()
	{
		$data['ui_title'] = 'Data Asesor Internal';
		return view('dashboard/profil', $data);
	}
}
