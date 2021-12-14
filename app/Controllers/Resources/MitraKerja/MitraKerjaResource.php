<?php

namespace App\Controllers\Resources\MitraKerja;

use App\Models\MitraKerja\MitraKerjaModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Upload;

class MitraKerjaResource extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$mitraKerjaModel = new MitraKerjaModel();

		$request = $this->request;
		$filter = [];
		
		$pencarian = $request->getGet('pencarian');
		$berdasarkan = $request->getGet('berdasarkan');
		if ($pencarian != '') {
			$filter['Pencarian berdasarkan ' . $berdasarkan] = $pencarian;
			$mitraKerjaModel->like($berdasarkan, $pencarian, 'both');
		}

		$tanggalAwalMou = $request->getGet('tanggal_awal_mou');
		$tanggalAkhirMou = $request->getGet('tanggal_akhir_mou');
		if ($tanggalAwalMou != '' && $tanggalAkhirMou != '') {
			$mitraKerjaModel->where("tanggal_mou BETWEEN '$tanggalAwalMou' AND '$tanggalAkhirMou'");
		}

		$limit = $request->getGet('limit');
		if ($limit == '') {
			$limit = 50;
		}

		$page = $request->getGet('page_mitra_kerja');
		if ($page == '') {
			$page = 1;
		}

		$sort = $request->getGet('sort');
		$sortBy = $request->getGet('sortBy');
		if ($sort != '' && $sortBy != '') {
			$mitraKerjaModel->orderBy($sortBy, $sort);
		} else {
			$mitraKerjaModel->orderBy('nama', 'asc');
		}

		$data['data'] = $mitraKerjaModel->paginate($limit, 'mitra_kerja');
		$data['pager'] = $mitraKerjaModel->pager;
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
		$mitraKerjaModel = new MitraKerjaModel();
		$mitraKerja = $mitraKerjaModel->asArray()->find($id);
		
		$mitraKerja['dokumen_filename'] = [];
		foreach (explode('|', $mitraKerja['dokumen']) as $file) {
			$mitraKerja['dokumen_filename'][] = utf8_decode(urldecode(basename($file)));
		}
		$mitraKerja['dokumen'] = explode('|', $mitraKerja['dokumen']);

		return json_encode([
			'status' => 'success',
			'data' => $mitraKerja,
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
		$request = $this->request;
		$rules = [
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'tanggal_mou' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal harus diisi'
				]
			],
			'nomor_mou' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nomor MoU harus diisi'
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
		$data = [
			'nama' => $request->getPost('nama'),
			'tanggal_mou' => $request->getPost('tanggal_mou'),
			'nomor_mou' => $request->getPost('nomor_mou'),
			'keterangan' => $request->getPost('keterangan'),
		];
		if ($files = $request->getFiles()) {
			$uploadPath = (new Upload())->publicDirectory;
			$dokumen = [];
			foreach ($files['dokumen'] as $file) {
				$file->move($uploadPath . '/files/mitra_kerja/dokumen/');
				$dokumen[] = utf8_decode(urldecode(site_url('/files/mitra_kerja/dokumen/' . $file->getName())));
			}
		}
		$data['dokumen'] = join('|', $dokumen);

		$mitraKerjaModel = new MitraKerjaModel();
		$id = $mitraKerjaModel->insert($data);
		$mitraKerja = $mitraKerjaModel->find($id);

		return json_encode([
			'status' => 'success',
			'data' => $mitraKerja
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
		$mitraKerjaModel = new MitraKerjaModel();
		$mitraKerja = $mitraKerjaModel->find($id);
		
		$request = $this->request;
		$rules = [
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'tanggal_mou' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tanggal harus diisi'
				]
			],
			'nomor_mou' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nomor MoU harus diisi'
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
		$data = [
			'nama' => $request->getPost('nama'),
			'tanggal_mou' => $request->getPost('tanggal_mou'),
			'nomor_mou' => $request->getPost('nomor_mou'),
			'keterangan' => $request->getPost('keterangan'),
		];
		$uploadPath = (new Upload())->publicDirectory;
		if ($request->getFileMultiple('dokumen')[0]->isValid()) {
			$dokumen = [];
			foreach ($request->getFileMultiple('dokumen') as $file) {
				$file->move($uploadPath . '/files/mitra_kerja/dokumen/');
				$dokumen[] = utf8_decode(urldecode(site_url('/files/mitra_kerja/dokumen/' . $file->getName())));
			}
			foreach (explode('|', $mitraKerja->dokumen) as $file) {
				if ($file != '') {
					if (file_exists($uploadPath . 'files/mitra_kerja/dokumen/' . utf8_decode(urldecode(basename($file))))) {
						unlink($uploadPath . 'files/mitra_kerja/dokumen/' . utf8_decode(urldecode(basename($file))));
					}
				}
			}
			$data['dokumen'] = join('|', $dokumen);
		} else {
			// Edit list File tanpa menggunakan file input
			$dokumen = explode('|', $request->getPost('dokumen_edit'));
			$mitraKerjaDokumen = explode('|', $mitraKerja->dokumen);
			$deletedFile = array_diff($mitraKerjaDokumen, $dokumen);
			if (count($deletedFile) > 0) {
				$data['dokumen'] = join('|', $dokumen);
				foreach ($deletedFile as $file) {
					if ($file != '') {
						if (file_exists($uploadPath . 'files/mitra_kerja/dokumen/' . utf8_decode(urldecode(basename($file))))) {
							unlink($uploadPath . 'files/mitra_kerja/dokumen/' . utf8_decode(urldecode(basename($file))));
						}
					}
				}
			} 
		}
		$id = $mitraKerjaModel->update($id, $data);

		return json_encode([
			'status' => 'success',
			'data' => $mitraKerja
		]);
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		$mitraKerjaModel = new MitraKerjaModel();
		$mitraKerja = $mitraKerjaModel->find($id);

		$uploadPath = (new Upload())->publicDirectory;
		foreach (explode('|', $mitraKerja->dokumen) as $dokumen) {
			if ($dokumen != '') {
				if (file_exists($uploadPath . 'files/mitra_kerja/dokumen/' . utf8_decode(basename($dokumen)))) {
					unlink($uploadPath . 'files/mitra_kerja/dokumen/' . utf8_decode(basename($dokumen)));
				}
			}
		}
		$mitraKerjaModel->delete($id);
		return json_encode([
			'status' => 'success',
			'data' => $id
		]);
	}
}
