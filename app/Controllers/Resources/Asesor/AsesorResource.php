<?php

namespace App\Controllers\Resources\Asesor;

use App\Models\Asesor\AsesorModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Upload;

class AsesorResource extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$asesorModel = new AsesorModel();

		$request = $this->request;
		$filter = [];
		
		$pencarian = $request->getGet('pencarian');
		$berdasarkan = $request->getGet('berdasarkan');
		if ($pencarian != '') {
			$filter['Pencarian berdasarkan ' . $berdasarkan] = $pencarian;
			$asesorModel->like($berdasarkan, $pencarian, 'both');
		}

		$tempatLahir = $request->getGet('kompetensi_teknis');
		if ($tempatLahir != '') {
			$asesorModel->where('kompetensi_teknis', $tempatLahir);
		}

		$tempatLahir = $request->getGet('tanggal_sertifikat');
		if ($tempatLahir != '') {
			$asesorModel->where('tanggal_sertifikat', $tempatLahir);
		}

		$statusSertifikat = $request->getGet('status_sertifikat');
		if ($statusSertifikat != '') {
			if ($statusSertifikat == 'expired')
				$asesorModel->where('tanggal_expired_sertifikat <', date('Y-m-d'));
			else 
				$asesorModel->where('tanggal_expired_sertifikat >=', date('Y-m-d'));
		}

		$sifatPenempatan = $request->getGet('sifat_penempatan');
		if ($sifatPenempatan != '') {
			$asesorModel->where('sifat_penempatan', $sifatPenempatan);
		}

		$limit = $request->getGet('limit');
		if ($limit == '') {
			$limit = 50;
		}

		$page = $request->getGet('page_asesor');
		if ($page == '') {
			$page = 1;
		}

		$sort = $request->getGet('sort');
		$sortBy = $request->getGet('sortBy');
		if ($sort != '' && $sortBy != '') {
			$asesorModel->orderBy($sortBy, $sort);
		} else {
			$asesorModel->orderBy('nama', 'asc');
		}

		$data['data'] = $asesorModel->paginate($limit, 'asesor');
		$data['pager'] = $asesorModel->pager;
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
		//
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
		$request = $this->request;
		$rules = [
			'nama' => [
				'rules' => 'required',
				'errors' => ['required' => 'Nama wajib diisi']
			],
			'tempat_lahir' => [
				'rules' => 'required',
				'errors' => ['required' => 'Tempat lahir wajib diisi']
			],
			'tanggal_lahir' => [
				'rules' => 'required',
				'errors' => ['required' => 'Tanggal lahir wajib diisi']
			],
			'no_blanko' => [
				'rules' => 'required',
				'errors' => ['required' => 'No blanko wajib diisi']
			],
			'no_reg_sertifikat' => [
				'rules' => 'required',
				'errors' => ['required' => 'No REG Sertifikat wajib diisi']
			],
			'no_met_sertifikat' => [
				'rules' => 'required',
				'errors' => ['required' => 'no MET sertifikat wajib diisi']
			],
			'tanggal_sertifikat' => [
				'rules' => 'required',
				'errors' => ['required' => 'tanggal sertifikat wajib diisi']
			],
			'tanggal_expired_sertifikat' => [
				'rules' => 'required',
				'errors' => ['required' => 'tanggal expired sertifikat wajib diisi']
			],
			'kompetensi_teknis' => [
				'rules' => 'required',
				'errors' => ['required' => 'kompetensiteknis wajib diisi']
			],
			'sertifikat_asesor' => [
				'rules' => 'uploaded[sertifikat_asesor]',
				'errors' => ['uploaded' => 'sertifikat asesor wajib diisi']
			],
			'portofolio' => [
				'rules' => 'uploaded[portofolio]',
				'errors' => ['uploaded' => 'portofolio wajib diisi']
			],
			'cv' => [
				'rules' => 'uploaded[cv]',
				'errors' => ['uploaded' => 'cv wajib diisi']
			],
			'pas_foto' => [
				'rules' => 'uploaded[pas_foto]',
				'errors' => ['uploaded' => 'pas foto wajib diisi']
			],
			'ktp' => [
				'rules' => 'uploaded[ktp]',
				'errors' => ['uploaded' => 'ktp wajib diisi']
			],
			'sifat_penempatan' => [
				'rules' => 'required',
				'errors' => ['required' => 'sifat_penempatan wajib diisi']
			]
		];
		if (!$this->validate($rules)) {
			$validation = \Config\Services::validation();
			return json_encode([
				'status' => 'error',
				'errors' => $validation->getErrors()
			]);
		}

		$data = [
			'nama' => $request->getPost('nama'),
			'tempat_lahir' => $request->getPost('tempat_lahir'),
			'tanggal_lahir' => $request->getPost('tanggal_lahir'),
			'no_blanko' => $request->getPost('no_blanko'),
			'no_reg_sertifikat' => $request->getPost('no_reg_sertifikat'),
			'no_met_sertifikat' => $request->getPost('no_met_sertifikat'),
			'tanggal_sertifikat' => $request->getPost('tanggal_sertifikat'),
			'tanggal_expired_sertifikat' => $request->getPost('tanggal_expired_sertifikat'),
			'kompetensi_teknis' => $request->getPost('kompetensi_teknis'),
			'sifat_penempatan' => $request->getPost('sifat_penempatan'),
		];

		$uploadPath = (new Upload())->publicDirectory;
		$sertifikat_asesor = $request->getFile('sertifikat_asesor');
		if ($sertifikat_asesor->isValid()) {
			$sertifikat_asesor->move($uploadPath . 'files/asesor/sertifikat_asesor');
			$data['sertifikat_asesor'] = site_url('files/asesor/sertifikat_asesor/' . $sertifikat_asesor->getName());
		}

		$portofolio = $request->getFile('portofolio');
		if ($portofolio->isValid()) {
			$portofolio->move($uploadPath . 'files/asesor/portofolio');
			$data['portofolio'] = site_url('files/asesor/portofolio/' . $sertifikat_asesor->getName());
		}

		$cv = $request->getFile('cv');
		if ($cv->isValid()) {
			$cv->move($uploadPath . 'files/asesor/cv');
			$data['cv'] = site_url('files/asesor/cv/' . $sertifikat_asesor->getName());
		}

		$pas_foto = $request->getFile('pas_foto');
		if ($pas_foto->isValid()) {
			$pas_foto->move($uploadPath . 'files/asesor/pas_foto');
			$data['pas_foto'] = site_url('files/asesor/pas_foto/' . $sertifikat_asesor->getName());
		}

		$ktp = $request->getFile('ktp');
		if ($ktp->isValid()) {
			$ktp->move($uploadPath . 'files/asesor/ktp');
			$data['ktp'] = site_url('files/asesor/ktp/' . $sertifikat_asesor->getName());
		}

		$asesorModel = new AsesorModel();
		$insertedId = $asesorModel->insert($data);
		$asesor = $asesorModel->find($insertedId);

		return json_encode([
			'status' => 'success',
			'data' => $asesor
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
		//
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		//
	}
}
