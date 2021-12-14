<?php

namespace App\Controllers\Resources\Asesor;

use App\Models\Asesor\AsesorModel;
use CodeIgniter\RESTful\ResourceController;

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

		$tempatLahir = $request->getGet('tempat_lahir');
		if ($tempatLahir != '') {
			$asesorModel->where('tempat_lahir', $tempatLahir);
		}

		$statusSertifikat = $request->getGet('status_sertifikat');
		if ($statusSertifikat != '') {
			if ($statusSertifikat == 'expired')
				$asesorModel->where('tanggal_expired_sertifikat >', date('Y-m-d'));
			else 
				$asesorModel->where('tanggal_expired_sertifikat <=', date('Y-m-d'));
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
		//
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
