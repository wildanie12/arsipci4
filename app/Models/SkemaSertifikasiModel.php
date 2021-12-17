<?php

namespace App\Models;

use CodeIgniter\Model;

class SkemaSertifikasiModel extends Model
{
	protected $table                = 'skema_sertifikasi';
	protected $returnType           = 'object';
	protected $useSoftDeletes       = true;
	protected $useTimestamps        = true;
	protected $allowedFields        = [
		'nama',
		'alamat',
		'tempat_lahir',
		'tanggal_lahir',
		'nik',
		'pekerjaan',
		'pendidikan_terakhir',
		'email',
		'no_telepon',
		'tanggal_uji',
		'asesor_kompetensi',
		'tuk',
		'skema_sertifikasi',
		'no_blanko',
		'no_sertifikat',
		'tanggal_sertifikat',
		'tanggal_expired_sertifikat',
		'foto',
		'muk',
		'portofolio',
		'sertifikat_kompetensi',
		'is_notified',
	];

}
