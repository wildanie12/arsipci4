<?php

namespace App\Controllers\Resources\Asesi;

use App\Models\Asesi\AsesiModel;
use CodeIgniter\RESTful\ResourceController;

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
