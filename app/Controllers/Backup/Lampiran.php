<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelLampiran;

class Lampiran extends Controller
{
    public function index()
    {

        $lampiran = new ModelLampiran();
        $data = [
            'tampildata' => $lampiran->tampildata()->getResult()
        ];
        echo view('user/lampiran', $data);
    }
}
