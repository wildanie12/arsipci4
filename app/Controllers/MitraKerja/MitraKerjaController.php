<?php

namespace App\Controllers\MitraKerja;

use App\Controllers\BaseController;

class MitraKerjaController extends BaseController
{
	/**
	 * Menampilkan halaman manajemen Mitra kerja
	 * 
	 * @return mixed
	 */
	public function index()
	{
		$data = [
            'ui_title' => 'Data Mitra Kerja'
        ];
        return view('mitra_kerja/list', $data);
	}
}
