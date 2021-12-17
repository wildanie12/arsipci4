<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\Asesi\AsesiModel;
use App\Models\Asesor\AsesorModel;
use App\Models\MitraKerja\MitraKerjaModel;
use App\Models\Personil\PersonilModel;
use App\Models\TUK\TUKModel;

class DashboardController extends BaseController
{
	public function index()
	{
		$data['ui_title'] = 'Data Asesor Internal';

		$data['countMitraKerja'] = (new MitraKerjaModel())->countAllResults();
		$data['countTuk'] = (new TUKModel())->countAllResults();
		$data['countPersonil'] = (new PersonilModel())->countAllResults();
		$data['countAsesor'] = (new AsesorModel())->countAllResults();
		$data['countAsesorInternal'] = (new AsesorModel())->where('sifat_penempatan', 'internal')->countAllResults();
		$data['countAsesorEksternal'] = (new AsesorModel())->where('sifat_penempatan', 'eksternal')->countAllResults();
		$data['countAsesi'] = (new AsesiModel())->countAllResults();
		$data['countSurveilance'] = (new AsesiModel())->where("asesi.tanggal_expired_sertifikat < '" . date('Y-m-d') . "'")->countAllResults();

		return view('dashboard/index', $data);
	}
}
