<?php

namespace App\Models\MitraKerja;

use CodeIgniter\Model;

class MitraKerjaModel extends Model
{
	protected $table                = 'mitra_kerja';
	protected $returnType           = 'object';
	protected $useSoftDeletes       = false;
	protected $allowedFields        = [
		'nama',
		'tanggal_mou',
		'nomor_mou',
		'keterangan',
		'dokumen'
	];
	protected $useTimestamps        = true;
}
