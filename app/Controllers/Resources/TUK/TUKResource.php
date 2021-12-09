<?php

namespace App\Controllers\Resources\TUK;

use App\Models\TUK\TUKModel;
use CodeIgniter\RESTful\ResourceController;
use Config\Upload;

class TUKResource extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$TUKModel = new TUKModel();

		$request = $this->request;
		$filter = [];
		
		$pencarian = $request->getGet('pencarian');
		$berdasarkan = $request->getGet('berdasarkan');
		if ($pencarian != '') {
			$filter['Pencarian berdasarkan ' . $berdasarkan] = $pencarian;
			$TUKModel->like($berdasarkan, $pencarian, 'both');
		}

		$limit = $request->getGet('limit');
		if ($limit == '') {
			$limit = 50;
		}

		$page = $request->getGet('page_tuk');
		if ($page == '') {
			$page = 1;
		}

		$data['data'] = $TUKModel->paginate($limit, 'tuk');
		$data['pager'] = $TUKModel->pager;
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
		$TUKModel = new TUKModel();
		$data = $TUKModel->asArray()->find($id);

		$data['panduan_mutu_filename'] = basename($data['panduan_mutu']);
		$data['sop_filename'] = basename($data['sop']);
		$data['sk_tuk_filename'] = basename($data['sk_tuk']);
		$data['ba_verifikasi_filename'] = basename($data['ba_verifikasi']);
		$data['spt_verifikator_filename'] = basename($data['spt_verifikator']);
		$data['sk_checklist_persyaratan_filename'] = basename($data['sk_checklist_persyaratan']);
		$data['mou_filename'] = basename($data['mou']);

		return json_encode([
			'status' => 'success',
			'data' => $data
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
				'errors' => ['required' => 'Nama harus diisi']
			],
			'no_sk' => [
				'rules' => 'required',
				'errors' => ['required' => 'Nomor SK harus diisi']
			],
			'alamat' => [
				'rules' => 'required',
				'errors' => ['required' => 'Alamat harus diisi']
			],
			'ketua' => [
				'rules' => 'required',
				'errors' => ['required' => 'Ketua TUK harus diisi']
			],
			'no_telepon' => [
				'rules' => 'required',
				'errors' => ['required' => 'Nomor Telepon harus diisi']
			],
			'panduan_mutu' => [
				'rules' => 'required',
				'errors' => ['required' => 'Dokumen Panduan Mutu harus diisi']
			],
			'sop' => [
				'rules' => 'required',
				'errors' => ['required' => 'Dokumen SOP harus diisi']
			],
			'sk_tuk' => [
				'rules' => 'required',
				'errors' => ['required' => 'SK TUK harus diisi']
			],
			'ba_verifikasi' => [
				'rules' => 'required',
				'errors' => ['required' => 'Dokumen BA Verifikasi harus diisi']
			],
			'spt_verificator' => [
				'rules' => 'required',
				'errors' => ['required' => 'Dokumen SPT Verifikator harus diisi']
			],
			'sk_checklist_persyaratan' => [
				'rules' => 'required',
				'errors' => ['required' => 'SK Checklist Persyaratan harus diisi']
			],
			'mou' => [
				'rules' => 'required',
				'errors' => ['required' => 'Dokumen MoU harus diisi']
			],
		];
		if (!$this->validate($rules)) {
			$validation = \Config\Services::validation();
			return json_encode([
				'status' => 'error',
				'rules' => 'required',
				'errors' => $validation->getErrors()
			]);
		}
		$data = [
			'nama' => $request->getPost('nama'),
			'alamat' => $request->getPost('alamat'),
			'no_sk' => $request->getPost('no_sk'),
			'ketua' => $request->getPost('ketua'),
			'no_telepon' => $request->getPost('no_telepon'),

			'panduan_mutu' => $request->getPost('panduan_mutu'),
			'sop' => $request->getPost('sop'),
			'sk_tuk' => $request->getPost('sk_tuk'),
			'ba_verifikasi' => $request->getPost('ba_verifikasi'),
			'spt_verifikator' => $request->getPost('spt_verifikator'),
			'sk_checklist_persyaratan' => $request->getPost('sk_checklist_persyaratan'),
			'mou' => $request->getPost('mou'),
		];

		// Upload
		$configPath = new Upload();

		$panduan_mutu = $request->getFile('panduan_mutu');
		if ($panduan_mutu->isValid()) {
			$panduan_mutu->move($configPath->publicDirectory . 'files/tuk/panduan_mutu');
			$data['panduan_mutu'] = site_url('files/tuk/panduan_mutu/' . $panduan_mutu->getName());
		}

		$sop = $request->getFile('sop');
		if ($sop->isValid()) {
			$sop->move($configPath->publicDirectory . 'files/tuk/sop');
			$data['sop'] = site_url('files/tuk/sop/' . $sop->getName());
		}

		$sk_tuk = $request->getFile('sk_tuk');
		if ($sk_tuk->isValid()) {
			$sk_tuk->move($configPath->publicDirectory . 'files/tuk/sk_tuk');
			$data['sk_tuk'] = site_url('files/tuk/sk_tuk/' . $sk_tuk->getName());
		}

		$ba_verifikasi = $request->getFile('ba_verifikasi');
		if ($ba_verifikasi->isValid()) {
			$ba_verifikasi->move($configPath->publicDirectory . 'files/tuk/ba_verifikasi');
			$data['ba_verifikasi'] = site_url('files/tuk/ba_verifikasi/' . $ba_verifikasi->getName());
		}

		$spt_verifikator = $request->getFile('spt_verifikator');
		if ($spt_verifikator->isValid()) {
			$spt_verifikator->move($configPath->publicDirectory . 'files/tuk/spt_verifikator');
			$data['spt_verifikator'] = site_url('files/tuk/spt_verifikator/' . $spt_verifikator->getName());
		}

		$sk_checklist_persyaratan = $request->getFile('sk_checklist_persyaratan');
		if ($sk_checklist_persyaratan->isValid()) {
			$sk_checklist_persyaratan->move($configPath->publicDirectory . 'files/tuk/sk_checklist_persyaratan');
			$data['sk_checklist_persyaratan'] = site_url('files/tuk/sk_checklist_persyaratan/' . $sk_checklist_persyaratan->getName());
		}

		$mou = $request->getFile('mou');
		if ($mou->isValid()) {
			$mou->move($configPath->publicDirectory . 'files/tuk/mou');
			$data['mou'] = site_url('files/tuk/mou/' . $mou->getName());
		}
		$TUKModel = new TUKModel();
		$insertedId = $TUKModel->insert($data);
		$data = $TUKModel->find($insertedId);
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
		if ($id != null) {
			$TUKModel = new TUKModel();
			$request = $this->request;

			$tuk = $TUKModel->find($id);

			$rules = [
				'nama' => [
					'rules' => 'required',
					'errors' => ['required' => 'Nama harus diisi']
				],
				'no_sk' => [
					'rules' => 'required',
					'errors' => ['required' => 'Nomor SK harus diisi']
				],
				'alamat' => [
					'rules' => 'required',
					'errors' => ['required' => 'Alamat harus diisi']
				],
				'ketua' => [
					'rules' => 'required',
					'errors' => ['required' => 'Ketua TUK harus diisi']
				],
				'no_telepon' => [
					'rules' => 'required',
					'errors' => ['required' => 'Nomor Telepon harus diisi']
				]
			];
			if (!$this->validate($rules)) {
				$validation = \Config\Services::validation();
				return json_encode([
					'status' => 'error',
					'rules' => 'required',
					'errors' => $validation->getErrors()
				]);
			}
			$data = [
				'nama' => $request->getPost('nama'),
				'alamat' => $request->getPost('alamat'),
				'no_sk' => $request->getPost('no_sk'),
				'ketua' => $request->getPost('ketua'),
				'no_telepon' => $request->getPost('no_telepon'),
			];

			// Upload
			$configPath = new Upload();

			$panduan_mutu = $request->getFile('panduan_mutu');
			if ($panduan_mutu->isValid()) {
				if ($tuk->panduan_mutu != '') {
					if (file_exists($configPath->publicDirectory . 'files/tuk/panduan_mutu/' . utf8_decode(urldecode(basename($tuk->panduan_mutu))))) {
						unlink($configPath->publicDirectory . 'files/tuk/panduan_mutu/' . utf8_decode(urldecode(basename($tuk->panduan_mutu))));
					}
				}
				$panduan_mutu->move($configPath->publicDirectory . 'files/tuk/panduan_mutu');
				$data['panduan_mutu'] = site_url('files/tuk/panduan_mutu/' . $panduan_mutu->getName());
			}

			$sop = $request->getFile('sop');
			if ($sop->isValid()) {
				if ($tuk->sop != '') {
					if (file_exists($configPath->publicDirectory . 'files/tuk/sop/' . utf8_decode(urldecode(basename($tuk->sop))))) {
						unlink($configPath->publicDirectory . 'files/tuk/sop/' . utf8_decode(urldecode(basename($tuk->sop))));
					}
				}
				$sop->move($configPath->publicDirectory . 'files/tuk/sop');
				$data['sop'] = site_url('files/tuk/sop/' . $sop->getName());
			}

			$sk_tuk = $request->getFile('sk_tuk');
			if ($sk_tuk->isValid()) {
				if ($tuk->sk_tuk != '') {
					if (file_exists($configPath->publicDirectory . 'files/tuk/sk_tuk/' . utf8_decode(urldecode(basename($tuk->sk_tuk))))) {
						unlink($configPath->publicDirectory . 'files/tuk/sk_tuk/' . utf8_decode(urldecode(basename($tuk->sk_tuk))));
					}
				}
				$sk_tuk->move($configPath->publicDirectory . 'files/tuk/sk_tuk');
				$data['sk_tuk'] = site_url('files/tuk/sk_tuk/' . $sk_tuk->getName());
			}

			$ba_verifikasi = $request->getFile('ba_verifikasi');
			if ($ba_verifikasi->isValid()) {
				if ($tuk->ba_verifikasi != '') {
					if (file_exists($configPath->publicDirectory . 'files/tuk/ba_verifikasi/' . utf8_decode(urldecode(basename($tuk->ba_verifikasi))))) {
						unlink($configPath->publicDirectory . 'files/tuk/ba_verifikasi/' . utf8_decode(urldecode(basename($tuk->ba_verifikasi))));
					}
				}
				$ba_verifikasi->move($configPath->publicDirectory . 'files/tuk/ba_verifikasi');
				$data['ba_verifikasi'] = site_url('files/tuk/ba_verifikasi/' . $ba_verifikasi->getName());
			}

			$spt_verifikator = $request->getFile('spt_verifikator');
			if ($spt_verifikator->isValid()) {
				if ($tuk->spt_verifikator != '') {
					if (file_exists($configPath->publicDirectory . 'files/tuk/spt_verifikator/' . utf8_decode(urldecode(basename($tuk->spt_verifikator))))) {
						unlink($configPath->publicDirectory . 'files/tuk/spt_verifikator/' . utf8_decode(urldecode(basename($tuk->spt_verifikator))));
					}
				}
				$spt_verifikator->move($configPath->publicDirectory . 'files/tuk/spt_verifikator');
				$data['spt_verifikator'] = site_url('files/tuk/spt_verifikator/' . $spt_verifikator->getName());
			}

			$sk_checklist_persyaratan = $request->getFile('sk_checklist_persyaratan');
			if ($sk_checklist_persyaratan->isValid()) {
				if ($tuk->sk_checklist_persyaratan != '') {
					if (file_exists($configPath->publicDirectory . 'files/tuk/sk_checklist_persyaratan/' . utf8_decode(urldecode(basename($tuk->sk_checklist_persyaratan))))) {
						unlink($configPath->publicDirectory . 'files/tuk/sk_checklist_persyaratan/' . utf8_decode(urldecode(basename($tuk->sk_checklist_persyaratan))));
					}
				}
				$sk_checklist_persyaratan->move($configPath->publicDirectory . 'files/tuk/sk_checklist_persyaratan');
				$data['sk_checklist_persyaratan'] = site_url('files/tuk/sk_checklist_persyaratan/' . $sk_checklist_persyaratan->getName());
			}

			$mou = $request->getFile('mou');
			if ($mou->isValid()) {
				if ($tuk->mou != '') {
					if (file_exists($configPath->publicDirectory . 'files/tuk/mou/' . utf8_decode(urldecode(basename($tuk->mou))))) {
						unlink($configPath->publicDirectory . 'files/tuk/mou/' . utf8_decode(urldecode(basename($tuk->mou))));
					}
				}
				$mou->move($configPath->publicDirectory . 'files/tuk/mou');
				$data['mou'] = site_url('files/tuk/mou/' . $mou->getName());
			}
			
			$TUKModel->update($id, $data);
			$data = $TUKModel->find($id);
			return json_encode([
				'status' => 'success',
				'data' => $data
			]);
		} else {
			return json_encode([
				'status' => 'error',
				'message' => 'ID kosong, Masukkan ID'
			]);
		}
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		$TUKModel = new TUKModel();
		$tuk = $TUKModel->find($id);

		$configPath = new Upload();

			if ($tuk->panduan_mutu != '') {
				if (file_exists($configPath->publicDirectory . 'files/tuk/panduan_mutu/' . utf8_decode(urldecode(basename($tuk->panduan_mutu))))) {
					unlink($configPath->publicDirectory . 'files/tuk/panduan_mutu/' . utf8_decode(urldecode(basename($tuk->panduan_mutu))));
				}
			}

			if ($tuk->sop != '') {
				if (file_exists($configPath->publicDirectory . 'files/tuk/sop/' . utf8_decode(urldecode(basename($tuk->sop))))) {
					unlink($configPath->publicDirectory . 'files/tuk/sop/' . utf8_decode(urldecode(basename($tuk->sop))));
				}
			}

			if ($tuk->sk_tuk != '') {
				if (file_exists($configPath->publicDirectory . 'files/tuk/sk_tuk/' . utf8_decode(urldecode(basename($tuk->sk_tuk))))) {
					unlink($configPath->publicDirectory . 'files/tuk/sk_tuk/' . utf8_decode(urldecode(basename($tuk->sk_tuk))));
				}
			}

			if ($tuk->ba_verifikasi != '') {
				if (file_exists($configPath->publicDirectory . 'files/tuk/ba_verifikasi/' . utf8_decode(urldecode(basename($tuk->ba_verifikasi))))) {
					unlink($configPath->publicDirectory . 'files/tuk/ba_verifikasi/' . utf8_decode(urldecode(basename($tuk->ba_verifikasi))));
				}
			}

			if ($tuk->spt_verifikator != '') {
				if (file_exists($configPath->publicDirectory . 'files/tuk/spt_verifikator/' . utf8_decode(urldecode(basename($tuk->spt_verifikator))))) {
					unlink($configPath->publicDirectory . 'files/tuk/spt_verifikator/' . utf8_decode(urldecode(basename($tuk->spt_verifikator))));
				}
			}

			if ($tuk->sk_checklist_persyaratan != '') {
				if (file_exists($configPath->publicDirectory . 'files/tuk/sk_checklist_persyaratan/' . utf8_decode(urldecode(basename($tuk->sk_checklist_persyaratan))))) {
					unlink($configPath->publicDirectory . 'files/tuk/sk_checklist_persyaratan/' . utf8_decode(urldecode(basename($tuk->sk_checklist_persyaratan))));
				}
			}

			if ($tuk->mou != '') {
				if (file_exists($configPath->publicDirectory . 'files/tuk/mou/' . utf8_decode(urldecode(basename($tuk->mou))))) {
					unlink($configPath->publicDirectory . 'files/tuk/mou/' . utf8_decode(urldecode(basename($tuk->mou))));
				}
			}

		$tuk->delete();
	}
}
