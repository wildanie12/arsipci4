<?php

namespace App\Controllers\Asesi;

use App\Controllers\BaseController;
use App\Models\Asesor\AsesorModel;
use App\Models\TUK\TUKModel;

class SurveilanceController extends BaseController
{
	public function index()
	{
		$data['ui_title'] = 'Manajemen data Asesi';
		$data['dataAsesor'] = (new AsesorModel())->orderBy('nama', 'asc')->findAll();
		$data['dataTuk'] = (new TUKModel())->orderBy('nama', 'asc')->findAll();
		return view('asesi/surveilance/list', $data);
	}
}
