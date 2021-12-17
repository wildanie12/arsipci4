<?php

namespace App\Controllers\Resources\Asesi;

use App\Models\Asesi\AsesiModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Upload;

class AsesiResource extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$asesiModel = new AsesiModel();
		$request = $this->request;
		$filter = [];
		

		$pencarian = $request->getGet('pencarian');
		$berdasarkan = $request->getGet('berdasarkan');
		if ($pencarian != '') {
			$filter['Pencarian berdasarkan ' . $berdasarkan] = $pencarian;
			$asesiModel->like($berdasarkan, $pencarian, 'both');
		}

		$asesorId = $request->getGet('asesor_id');
		if ($asesorId != '') {
			$asesiModel->where('asesor_kompetensi', $asesorId);
		}
		$tukId = $request->getGet('tuk_id');
		if ($tukId != '') {
			$asesiModel->where('tuk', $tukId);
		}
		$skemaSertifikasiId = $request->getGet('skema_sertifikasi_id');
		if ($skemaSertifikasiId != '') {
			$asesiModel->where('skema_sertifikasi', $skemaSertifikasiId);
		}

		$expired = $request->getGet('expired');
		if ($expired != '') {
			$asesiModel->where("asesi.tanggal_expired_sertifikat < '" . date('Y-m-d') . "'");
		}
		
		$tanggalUjiAwal = $request->getGet('tanggal_uji_awal');
		$tanggalUjiAkhir = $request->getGet('tanggal_uji_akhir');
		if ($tanggalUjiAwal != '' && $tanggalUjiAkhir != '') {
			$asesiModel->where("tanggal_uji BETWEEN '$tanggalUjiAwal' AND '$tanggalUjiAkhir'");
		} else if ($tanggalUjiAwal != '') {
			$asesiModel->where("tanggal_uji >= '$tanggalUjiAwal'");
		} else if ($tanggalUjiAkhir != '') {
			$asesiModel->where("tanggal_uji <= '$tanggalUjiAkhir'");
		}

		$tanggalSertifikatAwal = $request->getGet('tanggal_sertifikat_awal');
		$tanggalSertifikatAkhir = $request->getGet('tanggal_sertifikat_akhir');
		if ($tanggalSertifikatAwal != '' && $tanggalSertifikatAkhir != '') {
			$asesiModel->where("tanggal_sertifikat BETWEEN '$tanggalSertifikatAwal' AND '$tanggalSertifikatAkhir'");
		} else if ($tanggalSertifikatAwal != '') {
			$asesiModel->where("tanggal_sertifikat >= '$tanggalSertifikatAwal'");
		} else if ($tanggalSertifikatAkhir != '') {
			$asesiModel->where("tanggal_sertifikat <= '$tanggalSertifikatAkhir'");
		}

		$limit = $request->getGet('limit');
		if ($limit == '') {
			$limit = 50;
		}

		$page = $request->getGet('page_asesi');
		if ($page == '') {
			$page = 1;
		}

		$sort = $request->getGet('sort');
		$sortBy = $request->getGet('sortBy');
		if ($sort != '' && $sortBy != '') {
			$asesiModel->orderBy($sortBy, $sort);
		} else {
			$asesiModel->orderBy('nama', 'asc');
		}

		$asesiModel->select('
			asesor.nama AS asesor_nama, 
			tuk.nama AS tuk_nama, 
			skema_sertifikasi.nama AS skema_sertifikasi_nama, 
			asesi.*
		');
		$asesiModel->join('asesor', 'asesor.id = asesi.asesor_kompetensi', 'left');
		$asesiModel->join('tuk', 'tuk.id = asesi.tuk', 'left');
		$asesiModel->join('skema_sertifikasi', 'skema_sertifikasi.id = asesi.skema_sertifikasi', 'left');

		$data['data'] = $asesiModel->paginate($limit, 'asesi');
		$data['pager'] = $asesiModel->pager;
		$data['page'] = $page;
		$data['limit'] = $limit;

		$view_content = $request->getGet('view_content');
		$view_pagination = $request->getGet('view_pagination');
		$view_filter = $request->getGet('view_filter');

		if ($view_content != '') {
			if ($view_content != 'json') {
				return json_encode([
					'status' => 'success',
					'content' => view($view_content, $data),
					'pagination' => ($view_pagination != '') ? view($view_pagination, $data) : '',
					'filter' => ($view_filter != '') ? view($view_filter, $data) : '',
				], ENT_QUOTES);
			} else {
				return json_encode([
					'status' => 'success',
					'data' => $data
				]);
			}
		} else {
			return json_encode([
				'status' => 'error',
				'message' => 'Tidak ada view yang diberikan'
			]);
		}
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		$asesiModel = new AsesiModel();
		$asesi = $asesiModel->asArray()->find($id);

		$asesi['foto_filename'] = utf8_decode(urldecode(basename($asesi['foto'])));
		$asesi['muk_filename'] = utf8_decode(urldecode(basename($asesi['muk'])));
		$asesi['portofolio_filename'] = utf8_decode(urldecode(basename($asesi['portofolio'])));
		$asesi['sertifikat_kompetensi_filename'] = utf8_decode(urldecode(basename($asesi['sertifikat_kompetensi'])));
		
		return json_encode([
			'status' => 'success',
			'data' => $asesi,
		]);
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		//
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		$rules = [
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Alalmat harus diisi'
				]
			],
			'tempat_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tempat lahir harus diisi'
				]
			],
			'tanggal_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal lahir harus diisi'
				]
			],
			'nik' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'NIK harus diisi'
				]
			],
			'pekerjaan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Pekerjaan harus diisi'
				]
			],
			'pendidikan_terakhir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Pendidikan terakhir harus diisi'
				]
			],
			'email' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Email harus diisi'
				]
			],
			'no_telepon' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'No telepon harus diisi'
				]
			],
			'tanggal_uji' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal Uji harus diisi'
				]
			],
			'asesor_kompetensi' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Asesor Kompetensi harus diisi'
				]
			],
			'tuk' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'TUK harus diisi'
				]
			],
			'skema_sertifikasi' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Skema sertifikasi harus diisi'
				]
			],
			'no_blanko' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'No blanko harus diisi'
				]
			],
			'no_sertifikat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'No sertifikat harus diisi'
				]
			],
			'tanggal_sertifikat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal sertifikat harus diisi'
				]
			],
			'tanggal_expired_sertifikat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal expired sertifikat harus diisi'
				]
				],
			'foto' => [
				'rules' => 'uploaded[foto]',
				'errors' => [
					'uploaded' => 'foto harus diisi'
				],
			],
			'muk' => [
				'rules' => 'uploaded[muk]',
				'errors' => [
					'uploaded' => 'muk harus diisi'
				],
			],
			'portofolio' => [
				'rules' => 'uploaded[portofolio]',
				'errors' => [
					'uploaded' => 'portofolio harus diisi'
				],
			],
			'sertifikat_kompetensi' => [
				'rules' => 'uploaded[sertifikat_kompetensi]',
				'errors' => [
					'uploaded' => 'sertifikat_kompetensi harus diisi'
				],
			],
		];

		if (!$this->validate($rules)) {
			$validation = \Config\Services::validation();
			return json_encode([
				'status' => 'error',
				'errors' => $validation->getErrors()
			]);
		}
		
		$request = $this->request;
		$data = [
			'nama' => $request->getPost('nama'),
			'alamat' => $request->getPost('alamat'),
			'tempat_lahir' => $request->getPost('tempat_lahir'),
			'tanggal_lahir' => $request->getPost('tanggal_lahir'),
			'nik' => $request->getPost('nik'),
			'pekerjaan' => $request->getPost('pekerjaan'),
			'pendidikan_terakhir' => $request->getPost('pendidikan_terakhir'),
			'email' => $request->getPost('email'),
			'no_telepon' => $request->getPost('no_telepon'),
			'tanggal_uji' => $request->getPost('tanggal_uji'),
			'asesor_kompetensi' => $request->getPost('asesor_kompetensi'),
			'tuk' => $request->getPost('tuk'),
			'skema_sertifikasi' => $request->getPost('skema_sertifikasi'),
			'no_blanko' => $request->getPost('no_blanko'),
			'no_sertifikat' => $request->getPost('no_sertifikat'),
			'tanggal_sertifikat' => $request->getPost('tanggal_sertifikat'),
			'tanggal_expired_sertifikat' => $request->getPost('tanggal_expired_sertifikat'),
			'is_notified' => $request->getPost('is_notified'),
		];

		$uploadPath = (new Upload())->publicDirectory;
		
		$foto = $request->getFile('foto');
		if ($foto->isValid()) {
			$foto->move($uploadPath . '/files/asesi/foto');
			$data['foto'] = site_url('files/asesi/foto/' . $foto->getName());
		}
		$muk = $request->getFile('muk');
		if ($muk->isValid()) {
			$muk->move($uploadPath . '/files/asesi/muk');
			$data['muk'] = site_url('files/asesi/muk/' . $muk->getName());
		}
		$portofolio = $request->getFile('portofolio');
		if ($portofolio->isValid()) {
			$portofolio->move($uploadPath . '/files/asesi/portofolio');
			$data['portofolio'] = site_url('files/asesi/portofolio/' . $portofolio->getName());
		}
		$sertifikat_kompetensi = $request->getFile('sertifikat_kompetensi');
		if ($sertifikat_kompetensi->isValid()) {
			$sertifikat_kompetensi->move($uploadPath . '/files/asesi/sertifikat_kompetensi');
			$data['sertifikat_kompetensi'] = site_url('files/asesi/sertifikat_kompetensi/' . $sertifikat_kompetensi->getName());
		}

		$asesiModel = new AsesiModel();
		$insertedId = $asesiModel->insert($data);
		$asesi = $asesiModel->find($insertedId);

		return json_encode([
			'status' => 'success',
			'data' => $asesi,
		]);
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		//
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		$rules = [
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Alalmat harus diisi'
				]
			],
			'tempat_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tempat lahir harus diisi'
				]
			],
			'tanggal_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal lahir harus diisi'
				]
			],
			'nik' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'NIK harus diisi'
				]
			],
			'pekerjaan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Pekerjaan harus diisi'
				]
			],
			'pendidikan_terakhir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Pendidikan terakhir harus diisi'
				]
			],
			'email' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Email harus diisi'
				]
			],
			'no_telepon' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'No telepon harus diisi'
				]
			],
			'tanggal_uji' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal Uji harus diisi'
				]
			],
			'asesor_kompetensi' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Asesor Kompetensi harus diisi'
				]
			],
			'tuk' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'TUK harus diisi'
				]
			],
			'skema_sertifikasi' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Skema sertifikasi harus diisi'
				]
			],
			'no_blanko' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'No blanko harus diisi'
				]
			],
			'no_sertifikat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'No sertifikat harus diisi'
				]
			],
			'tanggal_sertifikat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal sertifikat harus diisi'
				]
			],
			'tanggal_expired_sertifikat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal expired sertifikat harus diisi'
				]
			],
		];

		if (!$this->validate($rules)) {
			$validation = \Config\Services::validation();
			return json_encode([
				'status' => 'error',
				'errors' => $validation->getErrors()
			]);
		}
		
		$asesiModel = new AsesiModel();
		$asesi = $asesiModel->find($id);

		$request = $this->request;
		$data = [
			'nama' => $request->getPost('nama'),
			'alamat' => $request->getPost('alamat'),
			'tempat_lahir' => $request->getPost('tempat_lahir'),
			'tanggal_lahir' => $request->getPost('tanggal_lahir'),
			'nik' => $request->getPost('nik'),
			'pekerjaan' => $request->getPost('pekerjaan'),
			'pendidikan_terakhir' => $request->getPost('pendidikan_terakhir'),
			'email' => $request->getPost('email'),
			'no_telepon' => $request->getPost('no_telepon'),
			'tanggal_uji' => $request->getPost('tanggal_uji'),
			'asesor_kompetensi' => $request->getPost('asesor_kompetensi'),
			'tuk' => $request->getPost('tuk'),
			'skema_sertifikasi' => $request->getPost('skema_sertifikasi'),
			'no_blanko' => $request->getPost('no_blanko'),
			'no_sertifikat' => $request->getPost('no_sertifikat'),
			'tanggal_sertifikat' => $request->getPost('tanggal_sertifikat'),
			'tanggal_expired_sertifikat' => $request->getPost('tanggal_expired_sertifikat'),
			'is_notified' => $request->getPost('is_notified'),
		];

		$uploadPath = (new Upload())->publicDirectory;
		
		$foto = $request->getFile('foto');
		if ($foto->isValid()) {
			$foto->move($uploadPath . '/files/asesi/foto');
			$data['foto'] = site_url('files/asesi/foto/' . $foto->getName());
			if (file_exists($uploadPath . 'files/asesi/foto/' . utf8_decode(urldecode(basename($asesi->foto)))) && $asesi->foto != '') {
				unlink($uploadPath . 'files/asesi/foto/' . utf8_decode(urldecode(basename($asesi->foto))));
			}
		}
		$muk = $request->getFile('muk');
		if ($muk->isValid()) {
			$muk->move($uploadPath . '/files/asesi/muk');
			$data['muk'] = site_url('files/asesi/muk/' . $muk->getName());
			if (file_exists($uploadPath . 'files/asesi/muk/' . utf8_decode(urldecode(basename($asesi->muk)))) && $asesi->muk != '') {
				unlink($uploadPath . 'files/asesi/muk/' . utf8_decode(urldecode(basename($asesi->muk))));
			}
		}
		$portofolio = $request->getFile('portofolio');
		if ($portofolio->isValid()) {
			$portofolio->move($uploadPath . '/files/asesi/portofolio');
			$data['portofolio'] = site_url('files/asesi/portofolio/' . $portofolio->getName());
			if (file_exists($uploadPath . 'files/asesi/portofolio/' . utf8_decode(urldecode(basename($asesi->portofolio)))) && $asesi->portofolio != '') {
				unlink($uploadPath . 'files/asesi/portofolio/' . utf8_decode(urldecode(basename($asesi->portofolio))));
			}
		}
		$sertifikat_kompetensi = $request->getFile('sertifikat_kompetensi');
		if ($sertifikat_kompetensi->isValid()) {
			$sertifikat_kompetensi->move($uploadPath . '/files/asesi/sertifikat_kompetensi');
			$data['sertifikat_kompetensi'] = site_url('files/asesi/sertifikat_kompetensi/' . $sertifikat_kompetensi->getName());
			if (file_exists($uploadPath . 'files/asesi/sertifikat_kompetensi/' . utf8_decode(urldecode(basename($asesi->sertifikat_kompetensi)))) && $asesi->sertifikat_kompetensi != '') {
				unlink($uploadPath . 'files/asesi/sertifikat_kompetensi/' . utf8_decode(urldecode(basename($asesi->sertifikat_kompetensi))));
			}
		}

		$asesiModel = new AsesiModel();
		$updatedId = $asesiModel->update($id, $data);
		$asesi = $asesiModel->find($updatedId);

		return json_encode([
			'status' => 'success',
			'data' => $asesi,
		]);
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		$asesiModel = new AsesiModel();
		$asesi = $asesiModel->find($id);

		$uploadPath = (new Upload())->publicDirectory;
		if (file_exists($uploadPath . 'files/asesi/foto/' . utf8_decode(urldecode(basename($asesi->foto)))) && $asesi->foto != '') {
			unlink($uploadPath . 'files/asesi/foto/' . utf8_decode(urldecode(basename($asesi->foto))));
		}
		if (file_exists($uploadPath . 'files/asesi/muk/' . utf8_decode(urldecode(basename($asesi->muk)))) && $asesi->muk != '') {
			unlink($uploadPath . 'files/asesi/muk/' . utf8_decode(urldecode(basename($asesi->muk))));
		}
		if (file_exists($uploadPath . 'files/asesi/portofolio/' . utf8_decode(urldecode(basename($asesi->portofolio)))) && $asesi->portofolio != '') {
			unlink($uploadPath . 'files/asesi/portofolio/' . utf8_decode(urldecode(basename($asesi->portofolio))));
		}
		if (file_exists($uploadPath . 'files/asesi/sertifikat_kompetensi/' . utf8_decode(urldecode(basename($asesi->sertifikat_kompetensi)))) && $asesi->sertifikat_kompetensi != '') {
			unlink($uploadPath . 'files/asesi/sertifikat_kompetensi/' . utf8_decode(urldecode(basename($asesi->sertifikat_kompetensi))));
		}
		$asesiModel->delete($id);

		return json_encode([
			'status' => 'success',
			'data' => $id
		]);
	}
}
