<?php

namespace App\Controllers\Exports;

use App\Controllers\BaseController;
use App\Models\Asesor\AsesorModel;
use App\Models\MitraKerja\MitraKerjaModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AsesorExport extends BaseController
{
	public function spreadsheet()
	{
		$request = $this->request;

		$asesorModel = new AsesorModel();

		$sifatPenempatan = $request->getPost('sifat_penempatan');
		if ($sifatPenempatan != '') {
			$asesorModel->where('sifat_penempatan', $sifatPenempatan);
		}


		$spreadsheet = new Spreadsheet();
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->setCellValue('A1', 'LAPORAN DATA ASESOR');
		$worksheet->getStyle('A1')->getFont()->setSize(20);
		$worksheet->mergeCells('A1:L1');

		$worksheet->setCellValue('A3', 'No');
		$worksheet->setCellValue('B3', 'ID');
		$worksheet->setCellValue('C3', 'Nama');
		$worksheet->setCellValue('D3', 'Tempat Lahir');
		$worksheet->setCellValue('E3', 'Tanggal Lahir');
		$worksheet->setCellValue('F3', 'No Blanko');
		$worksheet->setCellValue('G3', 'No REG Sertifikat');
		$worksheet->setCellValue('H3', 'No MET Sertifiakt');
		$worksheet->setCellValue('I3', 'Tanggal Sertifikat');
		$worksheet->setCellValue('J3', 'Tanggal Expired Sertifikat');
		$worksheet->setCellValue('K3', 'Kompetensi Teknis');
		$worksheet->setCellValue('L3', 'Sertifikat Asesor');
		$worksheet->setCellValue('M3', 'Portofolio');
		$worksheet->setCellValue('N3', 'CV');
		$worksheet->setCellValue('O3', 'Pas foto');
		$worksheet->setCellValue('P3', 'KTP');

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
		$worksheet->getStyle('O3')->getFont()->setBold(true);
		$worksheet->getStyle('P3')->getFont()->setBold(true);

		$styleArray = [
			'borders' => [
				'outline' => [
					'borderStyle' => Border::BORDER_MEDIUM,
					'color' => ['argb' => 'FF000000']
				]
			]
		];
		$worksheet->getStyle('A3:P3')->applyFromArray($styleArray);

		$data = $asesorModel->orderBy('nama', 'asc')->findAll();
		foreach ($data as $index => $row) {
			$worksheet->setCellValueByColumnAndRow(1, 4 + $index, $index+1);
			$worksheet->setCellValueByColumnAndRow(2, 4 + $index, $row->id);
			$worksheet->setCellValueByColumnAndRow(3, 4 + $index, $row->nama);
			$worksheet->setCellValueByColumnAndRow(4, 4 + $index, $row->tempat_lahir);
			$worksheet->setCellValueByColumnAndRow(5, 4 + $index, $row->tanggal_lahir);
			$worksheet->setCellValueByColumnAndRow(6, 4 + $index, $row->no_blanko);
			$worksheet->setCellValueByColumnAndRow(7, 4 + $index, $row->no_reg_sertifikat);
			$worksheet->setCellValueByColumnAndRow(8, 4 + $index, $row->no_met_sertifikat);
			$worksheet->setCellValueByColumnAndRow(9, 4 + $index, $row->tanggal_sertifikat);
			$worksheet->setCellValueByColumnAndRow(10, 4 + $index, $row->tanggal_expired_sertifikat);
			$worksheet->setCellValueByColumnAndRow(11, 4 + $index, $row->kompetensi_teknis);

			$worksheet->setCellValueByColumnAndRow(12, 4 + $index, $row->sertifikat_asesor);
			$worksheet->getCellByColumnAndRow(12, 4 + $index)->getHyperlink()->setUrl($row->sertifikat_asesor);
			$worksheet->setCellValueByColumnAndRow(13, 4 + $index, $row->portofolio);
			$worksheet->getCellByColumnAndRow(13, 4 + $index)->getHyperlink()->setUrl($row->portofolio);
			$worksheet->setCellValueByColumnAndRow(14, 4 + $index, $row->cv);
			$worksheet->getCellByColumnAndRow(14, 4 + $index)->getHyperlink()->setUrl($row->cv);
			$worksheet->setCellValueByColumnAndRow(15, 4 + $index, $row->pas_foto);
			$worksheet->getCellByColumnAndRow(15, 4 + $index)->getHyperlink()->setUrl($row->pas_foto);
			$worksheet->setCellValueByColumnAndRow(16, 4 + $index, $row->ktp);
			$worksheet->getCellByColumnAndRow(16, 4 + $index)->getHyperlink()->setUrl($row->ktp);

			$worksheet->setCellValueByColumnAndRow(17, 4 + $index, ' ');
		}

		$worksheet->getColumnDimension('A')->setAutoSize(true);
		$worksheet->getColumnDimension('B')->setAutoSize(true);
		$worksheet->getColumnDimension('C')->setAutoSize(true);
		$worksheet->getColumnDimension('D')->setAutoSize(true);
		$worksheet->getColumnDimension('E')->setAutoSize(true);
		$worksheet->getColumnDimension('F')->setAutoSize(true);
		$worksheet->getColumnDimension('G')->setAutoSize(true);
		$worksheet->getColumnDimension('H')->setAutoSize(true);
		$worksheet->getColumnDimension('I')->setAutoSize(true);
		$worksheet->getColumnDimension('J')->setAutoSize(true);
		$worksheet->getColumnDimension('K')->setAutoSize(true);

		$fileName = 'Laporan Data Asesor.xlsx';
		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $writer->save('php://output');
		die;
	}
}
