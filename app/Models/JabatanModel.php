<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
	protected $table                = 'jabatan';
	protected $returnType           = 'object';
	protected $useSoftDeletes       = true;
	protected $allowedFields        = [
		'nama'
	];
	protected $useTimestamps        = true;
}
