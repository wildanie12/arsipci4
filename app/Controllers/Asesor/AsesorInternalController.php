<?php

namespace App\Controllers\Asesor;

use App\Controllers\BaseController;

class AsesorInternalController extends BaseController
{
	/**
	 * Menampilkan halaman list asesor internal
	 * 
	 * @return mixed
	 */
	public function index()
	{
		$data = [
            'ui_title' => 'Data Asesor Internal'
        ];
		return view('asesor/internal/list', $data);
	}
}
