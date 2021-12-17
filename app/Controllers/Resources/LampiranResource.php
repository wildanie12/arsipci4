<?php

namespace App\Controllers\Resources;

use App\Models\LampiranModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Upload;

class LampiranResource extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$personilModel = new LampiranModel();

		$request = $this->request;
		$filter = [];
		
		$pencarian = $request->getGet('pencarian');
		$berdasarkan = $request->getGet('berdasarkan');
		if ($pencarian != '') {
			$filter['Pencarian berdasarkan ' . $berdasarkan] = $pencarian;
			$personilModel->like($berdasarkan, $pencarian, 'both');
		}

		$limit = $request->getGet('limit');
		if ($limit == '') {
			$limit = 50;
		}

		$page = $request->getGet('page_lampiran');
		if ($page == '') {
			$page = 1;
		}

		$sort = $request->getGet('sort');
		$sortBy = $request->getGet('sortBy');
		if ($sort != '' && $sortBy != '') {
			$personilModel->orderBy($sortBy, $sort);
		} else {
			$personilModel->orderBy('file', 'asc');
		}

		$data['data'] = $personilModel->paginate($limit, 'lampiran');
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
		$request = $this->request;
		$rules = [
			'file' => [
				'rules' => 'uploaded[file]',
				'errors' => [
					'uploaded' => 'File harus diisi',
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
			'deskripsi' => $request->getPost('deskripsi')
		];

		$uploadPath = (new Upload())->publicDirectory;
		$file = $request->getFile('file');
		if ($file->isValid()) {
			$file->move($uploadPath . 'files/lampiran');
			$data['file'] = 'files/lampiran/' . $file->getName();
		}
		
		$lampiranModel = new LampiranModel();
		$insertedId = $lampiranModel->insert($data);
		$data = $lampiranModel->find($insertedId);
		return json_encode([
			'status' => 'success',
			'data' => $data
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
		$lampiranModel = new LampiranModel();
		$lampiran = $lampiranModel->find($id);

		$uploadPath = (new Upload())->publicDirectory;
		if (file_exists($uploadPath . $lampiran->file)) {
			unlink($uploadPath . $lampiran->file);
		}

		$lampiranModel->delete($id);

		return json_encode([
			'status' => 'success',
			'data' => $id,
		]);
	}
}
