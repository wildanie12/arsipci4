<?php

namespace App\Controllers\Exports;

use App\Controllers\BaseController;
use App\Models\Asesi\AsesiModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AsesiExport extends BaseController
{
	public function spreadsheet()
	{
		$request = $this->request;

		$asesorModel = new AsesiModel();

		$spreadsheet = new Spreadsheet();
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->setCellValue('A1', 'LAPORAN DATA ASESI');
		$worksheet->getStyle('A1')->getFont()->setSize(20);
		$worksheet->mergeCells('A1:L1');

		$worksheet->setCellValue('A3', 'No');
		$worksheet->setCellValue('B3', 'ID');
		$worksheet->setCellValue('C3', 'Nama');
		$worksheet->setCellValue('D3', 'Alamat');
		$worksheet->setCellValue('E3', 'Tempat Lahir');
		$worksheet->setCellValue('F3', 'Tanggal Lahir');
		$worksheet->setCellValue('G3', 'NIK');
		$worksheet->setCellValue('H3', 'Pekerjaan');
		$worksheet->setCellValue('I3', 'Pendidikan Terakhir');
		$worksheet->setCellValue('J3', 'Email');
		$worksheet->setCellValue('K3', 'No Telepon');
		$worksheet->setCellValue('L3', 'Tanggal Uji');
		$worksheet->setCellValue('M3', 'Asesor Kompetensi');
		$worksheet->setCellValue('N3', 'TUK');
		$worksheet->setCellValue('O3', 'Skema Sertifikasi');
		$worksheet->setCellValue('P3', 'No Blanko');
		$worksheet->setCellValue('Q3', 'No Sertifikat');
		$worksheet->setCellValue('R3', 'Tanggal Sertifikat');
		$worksheet->setCellValue('S3', 'Tanggal Expired Sertifikat');
		$worksheet->setCellValue('T3', 'Foto');
		$worksheet->setCellValue('U3', 'MUK');
		$worksheet->setCellValue('V3', 'Portofolio');
		$worksheet->setCellValue('W3', 'Sertifikat Kompetensi');

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
		$worksheet->getStyle('Q3')->getFont()->setBold(true);
		$worksheet->getStyle('R3')->getFont()->setBold(true);
		$worksheet->getStyle('S3')->getFont()->setBold(true);
		$worksheet->getStyle('T3')->getFont()->setBold(true);
		$worksheet->getStyle('U3')->getFont()->setBold(true);
		$worksheet->getStyle('V3')->getFont()->setBold(true);
		$worksheet->getStyle('W3')->getFont()->setBold(true);

		$styleArray = [
			'borders' => [
				'outline' => [
					'borderStyle' => Border::BORDER_MEDIUM,
					'color' => ['argb' => 'FF000000']
				]
			]
		];
		$worksheet->getStyle('A3:W3')->applyFromArray($styleArray);

		$data = $asesorModel->orderBy('nama', 'asc')->findAll();
		foreach ($data as $index => $row) {
			$worksheet->setCellValueByColumnAndRow(1, 4 + $index, $index+1);
			$worksheet->setCellValueByColumnAndRow(2, 4 + $index, $row->id);
			$worksheet->setCellValueByColumnAndRow(3, 4 + $index, $row->nama);
			$worksheet->setCellValueByColumnAndRow(4, 4 + $index, $row->alamat);
			$worksheet->setCellValueByColumnAndRow(5, 4 + $index, $row->tempat_lahir);
			$worksheet->setCellValueByColumnAndRow(6, 4 + $index, $row->tanggal_lahir);
			$worksheet->setCellValueByColumnAndRow(7, 4 + $index, '="' . $row->nik . '"');
			$worksheet->setCellValueByColumnAndRow(8, 4 + $index, $row->pekerjaan);
			$worksheet->setCellValueByColumnAndRow(9, 4 + $index, $row->pendidikan_terakhir);
			$worksheet->setCellValueByColumnAndRow(10, 4 + $index, $row->email);
			$worksheet->setCellValueByColumnAndRow(11, 4 + $index, '="' . $row->no_telepon . '"');
			$worksheet->setCellValueByColumnAndRow(12, 4 + $index, $row->tanggal_uji);
			$worksheet->setCellValueByColumnAndRow(13, 4 + $index, $row->asesor_kompetensi);
			$worksheet->setCellValueByColumnAndRow(14, 4 + $index, $row->tuk);
			$worksheet->setCellValueByColumnAndRow(15, 4 + $index, $row->skema_sertifikasi);
			$worksheet->setCellValueByColumnAndRow(16, 4 + $index, '="' . $row->no_blanko . '"');
			$worksheet->setCellValueByColumnAndRow(17, 4 + $index, '="' . $row->no_sertifikat . '"');
			$worksheet->setCellValueByColumnAndRow(18, 4 + $index, $row->tanggal_sertifikat);
			$worksheet->setCellValueByColumnAndRow(19, 4 + $index, $row->tanggal_expired_sertifikat);

			$worksheet->setCellValueByColumnAndRow(20, 4 + $index, $row->foto);
			$worksheet->setCellValueByColumnAndRow(21, 4 + $index, $row->muk);
			$worksheet->setCellValueByColumnAndRow(22, 4 + $index, $row->portofolio);
			$worksheet->setCellValueByColumnAndRow(23, 4 + $index, $row->sertifikat_kompetensi);
			$worksheet->getCellByColumnAndRow(20, 4 + $index)->getHyperlink()->setUrl($row->foto);
			$worksheet->getCellByColumnAndRow(21, 4 + $index)->getHyperlink()->setUrl($row->muk);
			$worksheet->getCellByColumnAndRow(22, 4 + $index)->getHyperlink()->setUrl($row->portofolio);
			$worksheet->getCellByColumnAndRow(23, 4 + $index)->getHyperlink()->setUrl($row->sertifikat_kompetensi);

			$worksheet->setCellValueByColumnAndRow(24, 4 + $index, ' ');
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
		$worksheet->getColumnDimension('L')->setAutoSize(true);
		$worksheet->getColumnDimension('M')->setAutoSize(true);
		$worksheet->getColumnDimension('N')->setAutoSize(true);
		$worksheet->getColumnDimension('O')->setAutoSize(true);
		$worksheet->getColumnDimension('P')->setAutoSize(true);
		$worksheet->getColumnDimension('Q')->setAutoSize(true);
		$worksheet->getColumnDimension('R')->setAutoSize(true);
		$worksheet->getColumnDimension('S')->setAutoSize(true);

		$fileName = 'Laporan Data Asesi.xlsx';
		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
        $writer->save('php://output');
		die;
	}
}
