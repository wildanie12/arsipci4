<?php

namespace App\Controllers\Exports;

use App\Controllers\BaseController;
use App\Models\TUK\TUKModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class TUKExport extends BaseController
{
	/**
	 * Export data TUK via Excel Spreadsheet
	 * 
	 * @return mixed
	 */
	public function spreadsheet()
	{
		$spreadsheet = new Spreadsheet();
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->setCellValue('A1', 'LAPORAN DATA TEMPAT UJI KOMPETENSI (TUK)');
		$worksheet->getStyle('A1')->getFont()->setSize(20);
		$worksheet->mergeCells('A1:L1');

		$worksheet->setCellValue('A3', 'No');
		$worksheet->setCellValue('B3', 'ID');
		$worksheet->setCellValue('C3', 'Nama TUK');
		$worksheet->setCellValue('D3', 'Alamat TK');
		$worksheet->setCellValue('E3', 'Nomor SK');
		$worksheet->setCellValue('F3', 'Ketua TUK');
		$worksheet->setCellValue('G3', 'Nomor Telepon');
		$worksheet->setCellValue('H3', 'Panduan Mutu');
		$worksheet->setCellValue('I3', 'SOP');
		$worksheet->setCellValue('J3', 'SK TUK');
		$worksheet->setCellValue('K3', 'BA Verifikasi');
		$worksheet->setCellValue('L3', 'SPT Verifikator');
		$worksheet->setCellValue('M3', 'SK Checklist Persyaratan');
		$worksheet->setCellValue('N3', 'MoU');

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
		$worksheet->getStyle('N3')->getFont()->setBold(true);

		$styleArray = [
			'borders' => [
				'outline' => [
					'borderStyle' => Border::BORDER_MEDIUM,
					'color' => ['argb' => 'FF000000']
				]
			]
		];
		$worksheet->getStyle('A3:N3')->applyFromArray($styleArray);

		$TUKModel = new TUKModel();
		$data = $TUKModel->orderBy('nama', 'asc')->findAll();
		foreach ($data as $index => $row) {
			$no = $index + 1;
			$worksheet->setCellValueByColumnAndRow(1, 4 + $index, $no);
			$worksheet->setCellValueByColumnAndRow(2, 4 + $index, $row->id);
			$worksheet->setCellValueByColumnAndRow(3, 4 + $index, $row->nama);
			$worksheet->setCellValueByColumnAndRow(4, 4 + $index, $row->alamat);
			$worksheet->setCellValueByColumnAndRow(5, 4 + $index, $row->no_sk);
			$worksheet->setCellValueByColumnAndRow(6, 4 + $index, $row->ketua);
			$worksheet->setCellValueByColumnAndRow(7, 4 + $index, $row->no_telepon);

			$worksheet->setCellValueByColumnAndRow(8, 4 + $index, $row->panduan_mutu);
			$worksheet->setCellValueByColumnAndRow(9, 4 + $index, $row->sop);
			$worksheet->setCellValueByColumnAndRow(10, 4 + $index, $row->sk_tuk);
			$worksheet->setCellValueByColumnAndRow(11, 4 + $index, $row->ba_verifikasi);
			$worksheet->setCellValueByColumnAndRow(12, 4 + $index, $row->spt_verifikator);
			$worksheet->setCellValueByColumnAndRow(13, 4 + $index, $row->sk_checklist_persyaratan);
			$worksheet->setCellValueByColumnAndRow(14, 4 + $index, $row->mou);
			
			$worksheet->getCellByColumnAndRow(8, 4 + $index)->getHyperlink()->setUrl($row->panduan_mutu);
			$worksheet->getCellByColumnAndRow(9, 4 + $index)->getHyperlink()->setUrl($row->sop);
			$worksheet->getCellByColumnAndRow(10, 4 + $index)->getHyperlink()->setUrl($row->sk_tuk);
			$worksheet->getCellByColumnAndRow(11, 4 + $index)->getHyperlink()->setUrl($row->ba_verifikasi);
			$worksheet->getCellByColumnAndRow(12, 4 + $index)->getHyperlink()->setUrl($row->spt_verifikator);
			$worksheet->getCellByColumnAndRow(13, 4 + $index)->getHyperlink()->setUrl($row->sk_checklist_persyaratan);
			$worksheet->getCellByColumnAndRow(14, 4 + $index)->getHyperlink()->setUrl($row->mou);
		}

		$worksheet->getColumnDimension('A')->setAutoSize(true);
		$worksheet->getColumnDimension('B')->setAutoSize(true);
		$worksheet->getColumnDimension('C')->setAutoSize(true);
		$worksheet->getColumnDimension('D')->setAutoSize(true);
		$worksheet->getColumnDimension('E')->setAutoSize(true);
		$worksheet->getColumnDimension('F')->setAutoSize(true);
		$worksheet->getColumnDimension('G')->setAutoSize(true);
		$worksheet->getColumnDimension('H')->setWidth(10);
		$worksheet->getColumnDimension('I')->setWidth(10);
		$worksheet->getColumnDimension('J')->setWidth(10);
		$worksheet->getColumnDimension('K')->setWidth(10);
		$worksheet->getColumnDimension('L')->setWidth(10);
		$worksheet->getColumnDimension('M')->setWidth(10);
		$worksheet->getColumnDimension('N')->setWidth(10);

		$fileName = 'Laporan Data TUK.xlsx';
		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $writer->save('php://output');
		die;
	}
}
