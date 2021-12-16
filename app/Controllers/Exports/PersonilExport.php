<?php

namespace App\Controllers\Exports;

use App\Controllers\BaseController;
use App\Models\Personil\PersonilModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class PersonilExport extends BaseController
{
	public function spreadsheet()
	{
		$request = $this->request;

		$personilModel = new PersonilModel();

		$spreadsheet = new Spreadsheet();
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->setCellValue('A1', 'LAPORAN DATA PERSONIL');
		$worksheet->getStyle('A1')->getFont()->setSize(20);
		$worksheet->mergeCells('A1:L1');

		$worksheet->setCellValue('A3', 'No');
		$worksheet->setCellValue('B3', 'ID');
		$worksheet->setCellValue('C3', 'Nama');
		$worksheet->setCellValue('D3', 'Alamat');
		$worksheet->setCellValue('E3', 'Tempat lahir');
		$worksheet->setCellValue('F3', 'Tanggal lahir');
		$worksheet->setCellValue('G3', 'NIK');
		$worksheet->setCellValue('H3', 'Jabatan');
		$worksheet->setCellValue('I3', 'CV');
		$worksheet->setCellValue('J3', 'Portofolio');
		$worksheet->setCellValue('K3', 'Pasfoto');
		$worksheet->setCellValue('L3', 'KTP');
		$worksheet->setCellValue('M3', 'SK Pengangkatan');

		$worksheet->getStyle('A3')->getFont()->setBold(true);
		$worksheet->getStyle('B3')->getFont()->setBold(true);
		$worksheet->getStyle('C3')->getFont()->setBold(true);
		$worksheet->getStyle('D3')->getFont()->setBold(true);
		$worksheet->getStyle('E3')->getFont()->setBold(true);
		$worksheet->getStyle('F3')->getFont()->setBold(true);
		$worksheet->getStyle('G3')->getFont()->setBold(true);
		$worksheet->getStyle('H3')->getFont()->setBold(true);
		$worksheet->getStyle('I3')->getFont()->setBold(true);
		$worksheet->getStyle('J3')->getFont()->setBold(true);
		$worksheet->getStyle('K3')->getFont()->setBold(true);
		$worksheet->getStyle('L3')->getFont()->setBold(true);
		$worksheet->getStyle('M3')->getFont()->setBold(true);

		$styleArray = [
			'borders' => [
				'outline' => [
					'borderStyle' => Border::BORDER_MEDIUM,
					'color' => ['argb' => 'FF000000']
				]
			]
		];
		$worksheet->getStyle('A3:M3')->applyFromArray($styleArray);

		$data = $personilModel->select('jabatan.nama AS jabatan, personil.*')
			->join('jabatan', 'jabatan.id = personil.jabatan_id')
			->orderBy('nama', 'asc')
			->findAll();
		foreach ($data as $index => $row) {
			$worksheet->setCellValueByColumnAndRow(1, 4 + $index, $index+1);
			$worksheet->setCellValueByColumnAndRow(2, 4 + $index, $row->id);
			$worksheet->setCellValueByColumnAndRow(3, 4 + $index, $row->nama);
			$worksheet->setCellValueByColumnAndRow(4, 4 + $index, $row->alamat);
			$worksheet->setCellValueByColumnAndRow(5, 4 + $index, $row->tempat_lahir);
			$worksheet->setCellValueByColumnAndRow(6, 4 + $index, $row->tanggal_lahir);
			$worksheet->setCellValueByColumnAndRow(7, 4 + $index, $row->nik);
			$worksheet->setCellValueByColumnAndRow(8, 4 + $index, $row->jabatan);

			$worksheet->setCellValueByColumnAndRow(9, 4 + $index, $row->sk_pengangkatan);
			$worksheet->getCellByColumnAndRow(9, 4 + $index)->getHyperlink()->setUrl($row->sk_pengangkatan);
			$worksheet->setCellValueByColumnAndRow(10, 4 + $index, $row->portofolio);
			$worksheet->getCellByColumnAndRow(10, 4 + $index)->getHyperlink()->setUrl($row->portofolio);
			$worksheet->setCellValueByColumnAndRow(11, 4 + $index, $row->cv);
			$worksheet->getCellByColumnAndRow(11, 4 + $index)->getHyperlink()->setUrl($row->cv);
			$worksheet->setCellValueByColumnAndRow(12, 4 + $index, $row->pas_foto);
			$worksheet->getCellByColumnAndRow(12, 4 + $index)->getHyperlink()->setUrl($row->pas_foto);
			$worksheet->setCellValueByColumnAndRow(13, 4 + $index, $row->ktp);
			$worksheet->getCellByColumnAndRow(13, 4 + $index)->getHyperlink()->setUrl($row->ktp);

			$worksheet->setCellValueByColumnAndRow(14, 4 + $index, ' ');
		}

		$worksheet->getColumnDimension('A')->setAutoSize(true);
		$worksheet->getColumnDimension('B')->setAutoSize(true);
		$worksheet->getColumnDimension('C')->setAutoSize(true);
		$worksheet->getColumnDimension('D')->setAutoSize(true);
		$worksheet->getColumnDimension('E')->setAutoSize(true);
		$worksheet->getColumnDimension('F')->setAutoSize(true);
		$worksheet->getColumnDimension('G')->setAutoSize(true);
		$worksheet->getColumnDimension('H')->setAutoSize(true);

		$fileName = 'Laporan Data Personil.xlsx';
		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $writer->save('php://output');
		die;
	}
}
