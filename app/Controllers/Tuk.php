<?php

namespace App\Controllers;


class Tuk extends BaseController
{
    
    public function index()
    {
        $data = [
            'ui_title' => 'Data Asesi'
        ];
        return view('user/tuk', $data);
    }


    public function ajax_list()
    {
        $asesiModel = new \App\Models\Asesi();
        $data_asesi = $asesiModel->findAll();

        $data = [];
        foreach ($data_asesi as $index =>  $asesi) {
            $data[$index]['id'] = $asesi->id;
            $data[$index]['nama'] = $asesi->nama;
            $data[$index]['alamat'] = $asesi->alamat;
            $data[$index]['tempat_lahir'] = $asesi->tempat_lahir;
            $data[$index]['tanggal_lahir'] = $asesi->tanggal_lahir;
            $data[$index]['nik'] = $asesi->nik;
            $data[$index]['pekerjaan'] = $asesi->pekerjaan;
            $data[$index]['pendidikan_terakhir'] = $asesi->pendidikan_terakhir;
            $data[$index]['email'] = $asesi->email;
            $data[$index]['no_telepon'] = $asesi->no_telepon;
            $data[$index]['tanggal_uji'] = $asesi->tanggal_uji;
            $data[$index]['asesor_kompetensi'] = $asesi->asesor_kompetensi;
            $data[$index]['tuk'] = $asesi->tuk;
            $data[$index]['skema_sertifikasi'] = $asesi->skema_sertifikasi;
            $data[$index]['no_blanko'] = $asesi->no_blanko;
            $data[$index]['no_sertifikat'] = $asesi->no_sertifikat;
            $data[$index]['tanggal_sertifikat'] = $asesi->tanggal_sertifikat;
            $data[$index]['tanggal_expired_sertifikat'] = $asesi->tanggal_expired_sertifikat;
            $data[$index]['foto'] = $asesi->foto;
            $data[$index]['muk'] = $asesi->muk;
            $data[$index]['portofolio'] = $asesi->portofolio;
            $data[$index]['sertifikat_kompetensi'] = $asesi->sertifikat_kompetensi;
            $data[$index]['foto'] = site_url('arsip/asesi/foto/' . $asesi->foto);
            $data[$index]['muk'] = site_url('arsip/asesi/muk/' . $asesi->muk);
            $data[$index]['portofolio'] = site_url('arsip/asesi/portofolio/' . $asesi->portofolio);
            $data[$index]['sertifikat_kompetensi'] = site_url('arsip/asesi/sertifikat_kompetensi/' . $asesi->sertifikat_kompetensi);
        }

        $json = [
            "info" => "Berhasil",
            "success" => true,
            "data" => $data
        ];
        echo json_encode($json);
    }

    public function ajax_single()
    {
        $request = $this->request;
        
        $id = $request->getGet('id');
        $asesiModel = new \App\Models\Asesi();
        $asesi = $asesiModel->find($id);

        $data['id'] = $asesi->id;
        $data['nama'] = $asesi->nama;
        $data['alamat'] = $asesi->alamat;
        $data['tempat_lahir'] = $asesi->tempat_lahir;
        $data['tanggal_lahir'] = $asesi->tanggal_lahir;
        $data['nik'] = $asesi->nik;
        $data['pekerjaan'] = $asesi->pekerjaan;
        $data['pendidikan_terakhir'] = $asesi->pendidikan_terakhir;
        $data['email'] = $asesi->email;
        $data['no_telepon'] = $asesi->no_telepon;
        $data['tanggal_uji'] = $asesi->tanggal_uji;
        $data['asesor_kompetensi'] = $asesi->asesor_kompetensi;
        $data['tuk'] = $asesi->tuk;
        $data['skema_sertifikasi'] = $asesi->skema_sertifikasi;
        $data['no_blanko'] = $asesi->no_blanko;
        $data['no_sertifikat'] = $asesi->no_sertifikat;
        $data['tanggal_sertifikat'] = $asesi->tanggal_sertifikat;
        $data['tanggal_expired_sertifikat'] = $asesi->tanggal_expired_sertifikat;
        $data['foto'] = site_url('arsip/asesi/foto/' . $asesi->foto);
        $data['muk'] = site_url('arsip/asesi/muk/' . $asesi->muk);
        $data['portofolio'] = site_url('arsip/asesi/portofolio/' . $asesi->portofolio);
        $data['sertifikat_kompetensi'] = site_url('arsip/asesi/sertifikat_kompetensi/' . $asesi->sertifikat_kompetensi);

        echo json_encode($data);
    }

    public function ajax_create()
    {
        $request = $this->request;
        if ($request->isAJAX()) {


            $rules = [
                'no_sertifikat' => [
                    'rules' => 'required|is_unique[asesi.no_sertifikat]',
                    'errors' => [
                        'required' => 'No Sertifikat harus di isi',
                        'is_unique' => 'No Sertifikat sudah terdaftar'
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi'
                    ]
                ],
            ];

            if (!$this->validate($rules)) {
                $validation = \Config\Services::validation();
                echo json_encode(['error' => join(', ', $validation->getErrors())]);
                die;
            }


            $data_insert = [
                "nama" => $request->getPost('nama'),
                "alamat" => $request->getPost('alamat'),
                "tempat_lahir" => $request->getPost('tempat_lahir'),
                "tanggal_lahir" => $request->getPost('tanggal_lahir'),
                "nik" => $request->getPost('nik'),
                "pekerjaan" => $request->getPost('pekerjaan'),
                "pendidikan_terakhir" => $request->getPost('pendidikan_terakhir'),
                "email" => $request->getPost('email'),
                "no_telepon" => $request->getPost('no_telepon'),
                "tanggal_uji" => $request->getPost('tanggal_uji'),
                "asesor_kompetensi" => $request->getPost('asesor_kompetensi'),
                "tuk" => $request->getPost('tuk'),
                "skema_sertifikasi" => $request->getPost('skema_sertifikasi'),
                "no_blanko" => $request->getPost('no_blanko'),
                "no_sertifikat" => $request->getPost('no_sertifikat'),
                "tanggal_sertifikat" => $request->getPost('tanggal_sertifikat'),
                "tanggal_expired_sertifikat" => $request->getPost('tanggal_expired_sertifikat'),
            ];

            $foto = $request->getFile('foto');
            if ($foto->isValid()) {
                $foto->move(ROOTPATH . '/public/arsip/asesi/foto');
                $data_insert['foto'] = $foto->getName();
            }
            
            $muk = $request->getFile('muk');
            if ($muk->isValid()) {
                $muk->move(ROOTPATH . '/public/arsip/asesi/muk');
                $data_insert['muk'] = $muk->getName();
            }
            
            $portofolio = $request->getFile('portofolio');
            if ($portofolio->isValid()) {
                $portofolio->move(ROOTPATH . '/public/arsip/asesi/portofolio');
                $data_insert['portofolio'] = $portofolio->getName();
            }
            
            $sertifikat_kompetensi = $request->getFile('sertifikat_kompetensi');
            if ($sertifikat_kompetensi->isValid()) {
                $sertifikat_kompetensi->move(ROOTPATH . '/public/arsip/asesi/sertifikat_kompetensi');
                $data_insert['sertifikat_kompetensi'] = $sertifikat_kompetensi->getName();
            }

            
            
            $asesiModel = new \App\Models\Asesi();
            $query = $asesiModel->insert($data_insert);

            if ($query) {
                $json = array(
                    'success' => true,
                    'info' => 'Berhasil',
                );
            }
            else {
                $json = array(
                    'success' => false,
                    'info' => 'Gagal.!',
                );
            }

            echo json_encode($json);
        }
    }

    public function ajax_modify($id)
    {
        $request = $this->request;
        if ($request->isAJAX()) {

            $data_modify = [
                "nama" => $request->getPost('nama'),
                "alamat" => $request->getPost('alamat'),
                "tempat_lahir" => $request->getPost('tempat_lahir'),
                "tanggal_lahir" => $request->getPost('tanggal_lahir'),
                "nik" => $request->getPost('nik'),
                "pekerjaan" => $request->getPost('pekerjaan'),
                "pendidikan_terakhir" => $request->getPost('pendidikan_terakhir'),
                "email" => $request->getPost('email'),
                "no_telepon" => $request->getPost('no_telepon'),
                "tanggal_uji" => $request->getPost('tanggal_uji'),
                "asesor_kompetensi" => $request->getPost('asesor_kompetensi'),
                "tuk" => $request->getPost('tuk'),
                "skema_sertifikasi" => $request->getPost('skema_sertifikasi'),
                "no_blanko" => $request->getPost('no_blanko'),
                "no_sertifikat" => $request->getPost('no_sertifikat'),
                "tanggal_sertifikat" => $request->getPost('tanggal_sertifikat'),
                "tanggal_expired_sertifikat" => $request->getPost('tanggal_expired_sertifikat'),
            ];

            $foto = $request->getFile('foto');
            if ($foto->isValid()) {
                $foto->move(ROOTPATH . '/public/arsip/asesi/foto');
                $data_modify['foto'] = $foto->getName();
            }
            
            $muk = $request->getFile('muk');
            if ($muk->isValid()) {
                $muk->move(ROOTPATH . '/public/arsip/asesi/muk');
                $data_modify['muk'] = $muk->getName();
            }
            
            $portofolio = $request->getFile('portofolio');
            if ($portofolio->isValid()) {
                $portofolio->move(ROOTPATH . '/public/arsip/asesi/portofolio');
                $data_modify['portofolio'] = $portofolio->getName();
            }
            
            $sertifikat_kompetensi = $request->getFile('sertifikat_kompetensi');
            if ($sertifikat_kompetensi->isValid()) {
                $sertifikat_kompetensi->move(ROOTPATH . '/public/arsip/asesi/sertifikat_kompetensi');
                $data_modify['sertifikat_kompetensi'] = $sertifikat_kompetensi->getName();
            }
            
            $asesiModel = new \App\Models\Asesi();
            $query = $asesiModel->update($id, $data_modify);

            if ($query) {
                $json = array(
                    'success' => true,
                    'info' => 'Berhasil',
                );
            }
            else {
                $json = array(
                    'success' => false,
                    'info' => 'Gagal.!',
                );
            }

            echo json_encode($json);
        }
    }

    public function ajax_delete()
    {
        $request = $this->request;
        
        if ($request->isAJAX()) {
            $id = $request->getPost('id');

            $asesiModel = new \App\Models\Asesi();
            $asesi = $asesiModel->find($id);

            if ($asesi->foto != 'img_unavailable.png' && $asesi->foto != '') {
                if (file_exists(ROOTPATH . '/public/arsip/asesi/foto/' . $asesi->foto)) {
                    unlink(ROOTPATH . '/public/arsip/asesi/foto/' . $asesi->foto);
                }
            }

            if ($asesi->muk != 'img_unavailable.png' && $asesi->muk != '') {
                if (file_exists(ROOTPATH . '/public/arsip/asesi/muk/' . $asesi->muk)) {
                    unlink(ROOTPATH . '/public/arsip/asesi/muk/' . $asesi->muk);
                }
            }

            if ($asesi->portofolio != 'img_unavailable.png' && $asesi->portofolio != '') {
                if (file_exists(ROOTPATH . '/public/arsip/asesi/portofolio/' . $asesi->portofolio)) {
                    unlink(ROOTPATH . '/public/arsip/asesi/portofolio/' . $asesi->portofolio);
                }
            }

            if ($asesi->sertifikat_kompetensi != 'img_unavailable.png' && $asesi->sertifikat_kompetensi != '') {
                if (file_exists(ROOTPATH . '/public/arsip/asesi/sertifikat_kompetensi/' . $asesi->sertifikat_kompetensi)) {
                    unlink(ROOTPATH . '/public/arsip/asesi/sertifikat_kompetensi/' . $asesi->sertifikat_kompetensi);
                }
            }

            $asesiModel->delete($id);

            echo json_encode([
                'success' => true,
                'status' => 'success'
            ]);
        }
    }
}
