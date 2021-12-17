<?php

namespace App\Controllers\Asesor;

use App\Controllers\BaseController;
use App\Models\Asesor\AsesorModel;

class AsesorEksternalController extends BaseController
{
	public function index()
	{
		$data = [
            'ui_title' => 'Data Asesor Eksternal'
        ];

		$asesorModel = new AsesorModel();
		$data['dataKompetensiTeknis'] = $asesorModel->select('kompetensi_teknis')->distinct()->findAll();
		return view('asesor/eksternal/list', $data);
	}
}
