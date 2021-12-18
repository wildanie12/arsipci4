<?php

namespace App\Models\TUK;

use CodeIgniter\Model;

class TUKModel extends Model
{
	protected $table                = 'tuk';
	protected $returnType           = 'object';
	protected $useSoftDeletes       = true;
	protected $useTimestamps        = true;
	protected $allowedFields        = [
		'nama',
		'alamat',
		'no_sk',
		'ketua',
		'no_telepon',
		'panduan_mutu',
		'sop',
		'sk_tuk',
		'ba_verifikasi',
		'spt_verifikator',
		'sk_checklist_persyaratan',
		'mou',
	];
}
