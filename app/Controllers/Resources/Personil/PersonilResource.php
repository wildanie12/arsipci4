<?php

namespace App\Controllers\Resources\Personil;

use App\Models\Personil\PersonilModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Upload;

class PersonilResource extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$personilModel = new PersonilModel();

		$request = $this->request;
		$filter = [];
		
		$pencarian = $request->getGet('pencarian');
		$berdasarkan = $request->getGet('berdasarkan');
		if ($pencarian != '') {
			$filter['Pencarian berdasarkan ' . $berdasarkan] = $pencarian;
			$personilModel->like($berdasarkan, $pencarian, 'both');
		}

		$jabatan_id = $request->getGet('jabatan_id');
		if ($jabatan_id != '') {
			$personilModel->where('jabatan_id', $jabatan_id);
		}

		$limit = $request->getGet('limit');
		if ($limit == '') {
			$limit = 50;
		}

		$page = $request->getGet('page_personil');
		if ($page == '') {
			$page = 1;
		}

		$sort = $request->getGet('sort');
		$sortBy = $request->getGet('sortBy');
		if ($sort != '' && $sortBy != '') {
			$personilModel->orderBy($sortBy, $sort);
		} else {
			$personilModel->orderBy('nama', 'asc');
		}

		$personilModel->select('jabatan.nama as nama_jabatan, personil.*');
		$personilModel->join('jabatan', 'personil.jabatan_id = jabatan.id');

		$data['data'] = $personilModel->paginate($limit, 'personil');
		$data['pager'] = $personilModel->pager;
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
		$rules = [
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi',
				]
			],
			'tempat_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tempat lahir harus diisi',
				]
			],
			'tanggal_lahir' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal lahir harus diisi',
				]
			],
			'jabatan_id' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Jabatan harus diisi',
				]
			],
			'nik' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'NIK harus diisi',
				]
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Alamat harus diisi',
				]
			],
			'sk_pengangkatan' => [
				'rules' => 'uploaded[sk_pengangkatan]',
				'errors' => [
					'uploaded' => 'sk_pengangkatan harus diisi'
				]
			],
			'portofolio' => [
				'rules' => 'uploaded[portofolio]',
				'errors' => [
					'uploaded' => 'portofolio harus diisi'
				]
			],
			'cv' => [
				'rules' => 'uploaded[cv]',
				'errors' => [
					'uploaded' => 'cv harus diisi'
				]
			],
			'pas_foto' => [
				'rules' => 'uploaded[pas_foto]',
				'errors' => [
					'uploaded' => 'pas_foto harus diisi'
				]
			],
			'ktp' => [
				'rules' => 'uploaded[ktp]',
				'errors' => [
					'uploaded' => 'ktp harus diisi'
				]
			]
		];
		if (!$this->validate($rules)) {
			$validation = \Config\Services::validation();
			return json_encode([
				'status' => 'error',
				'errors' => $validation->getErrors()
			]);
		}

		$request =  $this->request;
		$data = [
			'nama' => $request->getPost('nama'),
			'alamat' => $request->getPost('alamat'),
			'tempat_lahir' => $request->getPost('tempat_lahir'),
			'tanggal_lahir' => $request->getPost('tanggal_lahir'),
			'nik' => $request->getPost('nik'),
			'jabatan_id' => $request->getPost('jabatan_id'),
		];

		$uploadPath = (new Upload())->publicDirectory;
		$sk_pengangkatan = $request->getFile('sk_pengangkatan');
		if ($sk_pengangkatan->isValid()) {
			$sk_pengangkatan->move($uploadPath . 'files/personil/sk_pengangkatan');
			$data['sk_pengangkatan'] = site_url('files/personil/sk_pengangkatan/' . $sk_pengangkatan->getName());
		}
		$portofolio = $request->getFile('portofolio');
		if ($portofolio->isValid()) {
			$portofolio->move($uploadPath . 'files/personil/portofolio');
			$data['portofolio'] = site_url('files/personil/portofolio/' . $portofolio->getName());
		}
		$cv = $request->getFile('cv');
		if ($cv->isValid()) {
			$cv->move($uploadPath . 'files/personil/cv');
			$data['cv'] = site_url('files/personil/cv/' . $cv->getName());
		}
		$pas_foto = $request->getFile('pas_foto');
		if ($pas_foto->isValid()) {
			$pas_foto->move($uploadPath . 'files/personil/pas_foto');
			$data['pas_foto'] = site_url('files/personil/pas_foto/' . $pas_foto->getName());
		}
		$ktp = $request->getFile('ktp');
		if ($ktp->isValid()) {
			$ktp->move($uploadPath . 'files/personil/ktp');
			$data['ktp'] = site_url('files/personil/ktp/' . $ktp->getName());
		}

		$personilModel = new PersonilModel();
		$insertedId = $personilModel->insert($data);
		$personil = $personilModel->find($insertedId);

		return json_encode([
			'status' => 'success',
			'data' => $personil
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
