<?php

namespace App\Controllers\Resources;

use App\Models\JabatanModel;
use CodeIgniter\RESTful\ResourceController;

class JabatanResource extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$jabatanModel = new JabatanModel();
		$data = $jabatanModel->orderBy('nama', 'asc')->findALl();
		return json_encode([
			'status' => 'success',
			'data' => $data
		]);
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		$jabatanModel = new JabatanModel();
		$jabatan = $jabatanModel->find($id);

		return json_encode([
			'status' => 'success',
			'data' => $jabatan
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
		
		$jabatanModel = new JabatanModel();
		$id = $jabatanModel->insert($data);
		$jabatan = $jabatanModel->find($id);

		return json_encode([
			'status' => 'success',
			'data' => $jabatan
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
		$jabatanModel = new JabatanModel();
		$jabatan = $jabatanModel->find($id);

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
		
		$id = $jabatanModel->update($id, $data);
		$jabatan = $jabatanModel->find($id);

		return json_encode([
			'status' => 'success',
			'data' => $jabatan
		]);
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		$jabatanModel = new JabatanModel();
		$jabatanModel->delete($id);

		return json_encode([
			'status' => 'success',
			'data' => $id
		]);
	}
}
