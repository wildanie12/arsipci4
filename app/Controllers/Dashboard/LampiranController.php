<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class LampiranController extends BaseController
{
	public function index()
	{
		$data['ui_title'] = 'Data Asesor Internal';
		return view('dashboard/lampiran/list', $data);
	}
}
