<?php

namespace App\Controllers\Personil;

use App\Controllers\BaseController;
use App\Models\JabatanModel;

class PersonilController extends BaseController
{
	/**
	 * Menampilkan halaman manajemen personil
	 * 
	 * @return mixed
	 */
	public function index()
	{
		$data['ui_title'] = 'Data Asesor Internal';

		$jabatanModel = new JabatanModel();
		$data['dataJabatan'] = $jabatanModel->orderBy('nama', 'asc')->findAll();
		return view('personil/list', $data);
	}
}
