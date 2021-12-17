<?php

namespace App\Models;

use CodeIgniter\Model;

class LampiranModel extends Model
{
	protected $table = 'lampiran';
	protected $returnType = 'object';
	protected $allowedFields = [
		'file',
		'deskripsi'
	];
	protected $useTimestamps = true;
}
