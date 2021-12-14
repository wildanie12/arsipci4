<?php

namespace App\Models\Asesor;

use CodeIgniter\Model;

class AsesorModel extends Model
{
	protected $table                = 'asesor';
	protected $returnType           = 'object';
	protected $useSoftDeletes       = true;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'no_blanko',
		'no_reg_sertifikat',
		'no_met_sertifikat',
		'tanggal_sertifikat',
		'tanggal_expired_sertifikat',
		'kompetensi_teknis',
		'sertifikat_asesor',
		'portofolio',
		'cv',
		'pas_foto',
		'ktp',
		'sifat_penempatan'
	];
	protected $useTimestamps        = true;
}
