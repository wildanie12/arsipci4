<?php

namespace App\Controllers\Asesor;

use App\Controllers\BaseController;
use App\Models\Asesor\AsesorModel;

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

		$asesorModel = new AsesorModel();
		$data['dataKompetensiTeknis'] = $asesorModel->select('kompetensi_teknis')->distinct()->findAll();
		return view('asesor/internal/list', $data);
	}
}
