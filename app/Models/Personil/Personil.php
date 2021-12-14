<?php

namespace App\Models\Personil;

use CodeIgniter\Model;

class Personil extends Model
{
	protected $table                = 'personil';
	protected $returnType           = 'object';
	protected $allowedFields        = [
		'nama',
		'alamat',
		'tempat_lahir',
		'tanggal_lahir',
		'nik',
		'jabatan',
		'cv',
		'portofolio',
		'pas_foto',
		'ktp',
		'sk_pengangkatan',
	];
	
	protected $useSoftDeletes       = true;
	protected $useTimestamps        = true;
}
