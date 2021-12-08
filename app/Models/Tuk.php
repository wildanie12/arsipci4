<?php
namespace App\Models;

use CodeIgniter\Model;

class Tuk extends Model
{
    protected $table      = 'tuk';
    protected $primaryKey = 'id';

    protected $returnType = 'object';

    protected $allowedFields = [
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
    ];
}
?>