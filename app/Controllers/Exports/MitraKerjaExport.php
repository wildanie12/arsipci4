<?php

namespace App\Controllers\Exports;

use App\Controllers\BaseController;
use App\Models\MitraKerja\MitraKerjaModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class MitraKerjaExport extends BaseController
{
	public function spreadsheet()
	{
		$spreadsheet = new Spreadsheet();
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->setCellValue('A1', 'LAPORAN DATA MITRA KERJA');
		$worksheet->getStyle('A1')->getFont()->setSize(20);
		$worksheet->mergeCells('A1:L1');

		$worksheet->setCellValue('A3', 'No');
		$worksheet->setCellValue('B3', 'ID');
		$worksheet->setCellValue('C3', 'Nama TUK');
		$worksheet->setCellValue('D3', 'Tanggal MoU');
		$worksheet->setCellValue('E3', 'Nomor MoU');
		$worksheet->setCellValue('F3', 'Keterangan');
		$worksheet->setCellValue('G3', 'Dokumen');

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
		$worksheet->getStyle('A3:G3')->applyFromArray($styleArray);

		$mitraKerjaModel = new MitraKerjaModel();
		$data = $mitraKerjaModel->orderBy('nama', 'asc')->findAll();
		foreach ($data as $index => $row) {
			$no = $index + 1;
			$worksheet->setCellValueByColumnAndRow(1, 4 + $index, $no);
			$worksheet->setCellValueByColumnAndRow(2, 4 + $index, $row->id);
			$worksheet->setCellValueByColumnAndRow(3, 4 + $index, $row->nama);
			$worksheet->setCellValueByColumnAndRow(4, 4 + $index, $row->tanggal_mou);
			$worksheet->setCellValueByColumnAndRow(5, 4 + $index, $row->nomor_mou);
			$worksheet->setCellValueByColumnAndRow(6, 4 + $index, $row->keterangan);
			$dokumenArray = explode('|', $row->dokumen);
			foreach ($dokumenArray as $indexDokumen => $dokumen) {
				$worksheet->setCellValueByColumnAndRow(7 + $indexDokumen, 4 + $index, $dokumen);
				$worksheet->getCellByColumnAndRow(7 + $indexDokumen, 4 + $index, $dokumen)->getHyperlink()->setUrl($dokumen);
			}
			$worksheet->setCellValueByColumnAndRow(7 + $indexDokumen + 1, 4 + $index, ' ');
			
		}

		$worksheet->getColumnDimension('A')->setAutoSize(true);
		$worksheet->getColumnDimension('B')->setAutoSize(true);
		$worksheet->getColumnDimension('C')->setAutoSize(true);
		$worksheet->getColumnDimension('D')->setAutoSize(true);
		$worksheet->getColumnDimension('E')->setAutoSize(true);
		$worksheet->getColumnDimension('F')->setAutoSize(true);

		$fileName = 'Laporan Data Mitra Kerja.xlsx';
		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $writer->save('php://output');
		die;
	}
}
