<?php

namespace App\Controllers\Resources;

use App\Models\SkemaSertifikasiModel;
use CodeIgniter\RESTful\ResourceController;

class SkemaSertifikasiResource extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$skemaSertifikasiModel = new SkemaSertifikasiModel();
		$dataSkema = $skemaSertifikasiModel->orderBy('nama', 'asc')->findAll();
		return json_encode([
			'status' =>'success',
			'data' => $dataSkema 
		]);
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		$skemaSertifikasiModel = new SkemaSertifikasiModel();
		$skema = $skemaSertifikasiModel->find($id);
		if ($skema == '') return json_encode([
			'status' => 'error',
			'message' => 'Data skema tidak ditemukan'
		]);
		return json_encode([
			'status' => 'success',
			'data' => $skema
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
			]
		];
		if (!$this->validate($rules)) {
			$validation = \Config\Services::validation();
			return json_encode([
				'status' => 'error',
				'errors' => $validation->getErrors()
			]);
		}

		$request = $this->request;
		$data = ['nama' => $request->getPost('nama')];
		
		$skemaSertifikasiModel = new SkemaSertifikasiModel();
		$id = $skemaSertifikasiModel->insert($data);
		$skema = $skemaSertifikasiModel->find($id);

		return json_encode([
			'status' => 'success',
			'data' => $skema
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
		$skemaSertifikasiModel = new SkemaSertifikasiModel();
		$skema = $skemaSertifikasiModel->find($id);

		$rules = [
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
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

		$request = $this->request;
		$data = ['nama' => $request->getPost('nama')];
		
		$id = $skemaSertifikasiModel->update($id, $data);
		$skema = $skemaSertifikasiModel->find($id);

		return json_encode([
			'status' => 'success',
			'data' => $skema
		]);
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		$skemaSertifikasiModel = new SkemaSertifikasiModel();
		$skemaSertifikasiModel->delete($id);

		return json_encode([
			'status' => 'success',
			'data' => $id
		]);
	}
}
