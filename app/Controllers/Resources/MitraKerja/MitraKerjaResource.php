<?php

namespace App\Controllers\Resources\MitraKerja;

use App\Models\MitraKerja\MitraKerjaModel;
use CodeIgniter\RESTful\ResourceController;

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
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'tanggal' => [
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

		print_r($request->getFiles());
		die;
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
