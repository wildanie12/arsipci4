<?= $this->extend('templates/sidebar'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= site_url('vendor/dropzonejs/dropzone.min.css') ?>" type="text/css" />
<?= $this->endSection() ?>

<?= $this->section('page-content'); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-shadow">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto px-4 text-center">
                            <i class="fas fa-file-alt mb-2" style="font-size: 32px"></i>
                            <h6 class="mb-0 font-weight-bold text-default text-center">
                                Manajemen <br/>Data <br/> Mitra Kerja
                            </h6>
                        </div>
                        <div class="col-md">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <label for="filter-limit" class="mb-0 font-weight-bold text-xs">Pencarian Nama</label>
                                                <div class="input-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                                    </div>
                                                    <input type="search" id="filter-pencarian" class="filter-pencarian form-control form-control-sm" placeholder="Cari disini...">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="filter-tanggal_awal_mou" class="mb-0 text-xs font-weight-bold">Periode Tanggal MoU</label>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text font-weight-bold" style="font-size: 10px;">
                                                            Mulai tanggal
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control filter-tanggal_awal_mou">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="filter-tanggal_awal_mou" class="mb-0 text-xs font-weight-bold">Periode Tanggal MoU</label>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text font-weight-bold" style="font-size: 10px;">
                                                            Sampai tanggal
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control filter-tanggal_akhir_mou">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <label for="filter-limit" class="mb-0 font-weight-bold text-xs">Limit</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                                    </div>
                                                    <input type="number" value="50" id="filter-limit" class="filter-limit form-control form-control-sm" min="0" step="5">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="form-group">
                                                <form action="<?= site_url('export/tuk/spreadsheet') ?>" method="post">
                                                    <button type="submit" class="btn btn-sm btn-block btn-success">
                                                        <i class="fas fa-file-excel mr-2"></i>
                                                        Export ke Spreadsheet
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto">
                                    <a href="#" class="btn btn-success rounded-circle btn-new-mitra_kerja">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="progress progress-sm mt-1 progress-data" style="visibility: hidden;">
                                <div class="progres-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="align-middle">#</th>
                                    <th class="align-middle">
                                        Nama
                                        <span class="ml-2 text-danger btn-sort" data-field="nama" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle">
                                        Tanggal MoU
                                        <span class="ml-2 text-warning btn-sort" data-field="tanggal_mou" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle">
                                        Nomor MoU
                                        <span class="ml-2 text-warning btn-sort" data-field="nomor_mou" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle">
                                        Keterangan
                                        <span class="ml-2 text-warning btn-sort" data-field="keterangan" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle">
                                        Dokumen
                                    </th>
                                    <th style="width: 30px"></th>
                                </tr>
                            </thead>
                            <tbody class="load-data">
                            </tbody>
                        </table>
                    </div>
                    <div class="load-pagination">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>



<?= $this->section('js_script')?>

<div class="modal fade" id="modal-new-mitra_kerja">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Tambah data Mitra Kerja</h6>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="loading position-absolute top-0 bottom-0 left-0 right-0 rounded" style="display: none;">
                    <div class="d-flex justify-content-center align-items-center h-100 flex-column">
                        <i class="fas fa-spin fa-sync text-white" style="font-size: 48px"></i>
                        <h4 class="text-center mt-3 text-white">Loading<br/>.....</h4>
                    </div>
                </div>
                <form action="<?= site_url('resource/mitra_kerja') ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-mitra_kerja-nama" class="text-sm mb-0 font-weight-bold">Nama Mitra Kerja</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                    </div>
                                    <input type="text" id="new-mitra_kerja-nama" class="form-control" name="nama" placeholder="Tuliskan nama TUK...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-mitra_kerja-tanggal" class="text-sm mb-0 font-weight-bold">Tanggal MoU</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" id="new-mitra_kerja-tanggal" class="form-control" name="tanggal" placeholder="Tuliskan Nomor SK TUK...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-mitra_kerja-nomor_mou" class="text-sm mb-0 font-weight-bold">Nomor MoU</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="text" id="new-mitra_kerja-nomor_mou" class="form-control" name="nomor_mou" placeholder="Tuliskan Nomor SK TUK...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nomor_mou" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-mitra_kerja-keterangan" class="text-sm mb-0 font-weight-bold">Keterangan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                    <textarea name="keterangan" id="new-mitra_kerja-keterangan" class="form-control"></textarea>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-keterangan" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="text-xs text-uppercase font-weight-bold" style="color: #c5c5c5">Dokumen-dokumen</div>
                            <hr class="mt-0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="font-weight-bold text-xs">Upload dokumen pendukung</label>
                                <input type="file" class="form-control pt-1" name="dokumen[]" accept=".doc,.docx,.pdf,.xls,xlsx,.ppt,.pptx" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;" multiple>
                                <ul class="list-group file-list" style="display: none; border-top-left-radius: 0; border-top-right-radius: 0;">
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <span class="text">File.pdf</span>
                                        <span class="badge badge-danger"><i class="fas fa-times position-relative" style="top: 1px; cursor: pointer"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <button type="button" class="btn btn-default px-4 mr-2" data-dismiss="modal">
                                <i class="fas fa-times mr-2"></i>
                                Tutup
                            </button>
                            <button type="submit" class="btn btn-primary flex-fill">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Kirim
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>


<div class="modal fade" id="modal-edit-mitra_kerja">
    <div class="modal-dialog modal-xl">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Tambah data TUK</h6>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="loading position-absolute top-0 bottom-0 left-0 right-0 rounded" style="display: none;">
                    <div class="d-flex justify-content-center align-items-center h-100 flex-column">
                        <i class="fas fa-spin fa-sync text-white" style="font-size: 48px"></i>
                        <h4 class="text-center mt-3 text-white">Loading<br/>.....</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <form>
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="PATCH">
                            <input type="hidden" name="id">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-nama" class="text-sm mb-0 font-weight-bold">Nama TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                            </div>
                                            <input type="text" id="edit-mitra_kerja-nama" class="form-control" name="nama" placeholder="Tuliskan nama TUK...">
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-no_sk" class="text-sm mb-0 font-weight-bold">Nomor SK TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                            </div>
                                            <input type="text" id="edit-mitra_kerja-no_sk" class="form-control" name="no_sk" placeholder="Tuliskan Nomor SK TUK...">
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_sk" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-alamat" class="text-sm mb-0 font-weight-bold">Alamat TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                            </div>
                                            <textarea name="alamat" id="edit-mitra_kerja-alamat" class="form-control"></textarea>
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-alamat" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-ketua" class="text-sm mb-0 font-weight-bold">Ketua TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            </div>
                                            <input type="text" id="edit-mitra_kerja-ketua" class="form-control" name="ketua" placeholder="Tuliskan Ketua TUK...">
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-ketua" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-no_telepon" class="text-sm mb-0 font-weight-bold">Nomor Telepon TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                            </div>
                                            <input type="text" id="edit-mitra_kerja-no_telepon" class="form-control" name="no_telepon" placeholder="Tuliskan Nomor Telepon TUK...">
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_telepon" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <div class="text-xs text-uppercase font-weight-bold" style="color: #c5c5c5">Dokumen-dokumen</div>
                                    <hr class="mt-0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-panduan_mutu" class="text-sm mb-0 font-weight-bold">Panduan Mutu</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-mitra_kerja-panduan_mutu" class="form-control pt-1" name="panduan_mutu">
                                        </div>
                                        <div class="mt-1 text-muted text-xs font-italic" style="line-height: 12px;">Upload file dokumen (pdf). Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-panduan_mutu" style="display: none;"></div>
                                        <div class="preview-document document-panduan_mutu" style="display: none;">
                                            <h6 class="text-center font-weight-bold">File.pdf</h6>
                                            <iframe
                                                src="http://arsip_ci4.test/files/tuk/mou/STIKI%20E-Learning%20Laporan.pdf"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="300px"
                                                width="100%"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-sop" class="text-sm mb-0 font-weight-bold">Dokumen SOP</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-mitra_kerja-sop" class="form-control pt-1" name="sop">
                                        </div>
                                        <div class="mt-1 text-muted text-xs font-italic" style="line-height: 12px;">Upload file dokumen (pdf). Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-sop" style="display: none;"></div>
                                        <div class="preview-document document-sop" style="display: none;">
                                            <h6 class="text-center font-weight-bold">File.pdf</h6>
                                            <iframe
                                                src="http://arsip_ci4.test/files/tuk/mou/STIKI%20E-Learning%20Laporan.pdf"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="300px"
                                                width="100%"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-sk_tuk" class="text-sm mb-0 font-weight-bold">Surat Keputusan TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-mitra_kerja-sk_tuk" class="form-control pt-1" name="sk_tuk">
                                        </div>
                                        <div class="mt-1 text-muted text-xs font-italic" style="line-height: 12px;">Upload file dokumen (pdf). Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-sk_tuk" style="display: none;"></div>
                                        <div class="preview-document document-sk_tuk" style="display: none;">
                                            <h6 class="text-center font-weight-bold">File.pdf</h6>
                                            <iframe
                                                src="http://arsip_ci4.test/files/tuk/mou/STIKI%20E-Learning%20Laporan.pdf"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="300px"
                                                width="100%"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-ba_verifikasi" class="text-sm mb-0 font-weight-bold">B.A. Verifikasi</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-mitra_kerja-ba_verifikasi" class="form-control pt-1" name="ba_verifikasi">
                                        </div>
                                        <div class="mt-1 text-muted text-xs font-italic" style="line-height: 12px;">Upload file dokumen (pdf). Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-ba_verifikasi" style="display: none;"></div>
                                        <div class="preview-document document-ba_verifikasi" style="display: none;">
                                            <h6 class="text-center font-weight-bold">File.pdf</h6>
                                            <iframe
                                                src="http://arsip_ci4.test/files/tuk/mou/STIKI%20E-Learning%20Laporan.pdf"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="300px"
                                                width="100%"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-spt_verifikator" class="text-sm mb-0 font-weight-bold">SPT Verifikator</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-mitra_kerja-spt_verifikator" class="form-control pt-1" name="spt_verifikator">
                                        </div>
                                        <div class="mt-1 text-muted text-xs font-italic" style="line-height: 12px;">Upload file dokumen (pdf). Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-spt_verifikator" style="display: none;"></div>
                                        <div class="preview-document document-spt_verifikator" style="display: none;">
                                            <h6 class="text-center font-weight-bold">File.pdf</h6>
                                            <iframe
                                                src="http://arsip_ci4.test/files/tuk/mou/STIKI%20E-Learning%20Laporan.pdf"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="300px"
                                                width="100%"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-sk_checklist_persyaratan" class="text-sm mb-0 font-weight-bold">SK Checklist Persyaratan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-mitra_kerja-sk_checklist_persyaratan" class="form-control pt-1" name="sk_checklist_persyaratan">
                                        </div>
                                        <div class="mt-1 text-muted text-xs font-italic" style="line-height: 12px;">Upload file dokumen (pdf). Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-sk_checklist_persyaratan" style="display: none;"></div>
                                        <div class="preview-document document-sk_checklist_persyaratan" style="display: none;">
                                            <h6 class="text-center font-weight-bold">File.pdf</h6>
                                            <iframe
                                                src="http://arsip_ci4.test/files/tuk/mou/STIKI%20E-Learning%20Laporan.pdf"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="300px"
                                                width="100%"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="edit-mitra_kerja-mou" class="text-sm mb-0 font-weight-bold">Dokumen MoU</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-mitra_kerja-mou" class="form-control pt-1" name="mou">
                                        </div>
                                        <div class="mt-1 text-muted text-xs font-italic" style="line-height: 12px;">Upload file dokumen (pdf). Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-mou" style="display: none;"></div>
                                        <div class="preview-document document-mou" style="display: none;">
                                            <h6 class="text-center font-weight-bold">File.pdf</h6>
                                            <iframe
                                                src="http://arsip_ci4.test/files/tuk/mou/STIKI%20E-Learning%20Laporan.pdf"
                                                frameBorder="0"
                                                scrolling="auto"
                                                height="300px"
                                                width="100%"
                                            ></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <button type="button" class="btn btn-default px-4 mr-2" data-dismiss="modal">
                                        <i class="fas fa-times mr-2"></i>
                                        Tutup
                                    </button>
                                    <button type="submit" class="btn btn-primary flex-fill">
                                        <i class="fas fa-paper-plane mr-2"></i>
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div> 
</div>

<script src="<?= site_url('vendor/dropzonejs/dropzone.min.js') ?>"></script>
<script>
    $(document).ready(function () {


        let dataParams = {
            limit: 50,
            berdasarkan: 'nama',
            view_content: 'mitra_kerja/ajax/table',
            view_pagination: 'mitra_kerja/ajax/pagination'
        }
        function refreshData(url) {
            url = 0 || url
            if (!url) url = "<?= site_url('resource/mitra_kerja') ?>"
            $(".progress-data").css('visibility', 'visible');
            $.ajax({
                type: "GET",
                url: url,
                data: dataParams,
                dataType: "json",
            })
            .done(function (response) {
                $(".progress-data").css('visibility', 'hidden');
                $(".load-data").html(response.content)
                $(".load-pagination").html(response.pagination)
                onLoadedData()
            })
        }
        function onLoadedData() {
            $(".btn-pagination").unbind('click').click(function (e) {
                e.preventDefault()
                link = $(this).attr('href')
                refreshData(link)
            })
            $(".btn-edit").unbind('click').click(function (e) {
                modalEditTUK.modal('show')
                modalEditTUK.find('.loading').show()
                e.preventDefault()
                id = $(this).data('id')
                modalEditTUK.find("[name='id']").val(id)
                $.ajax({
                    type: "GET",
                    url: "<?= site_url('resource/mitra_kerja/') ?>" + id,
                    dataType: "json",
                })
                .done(function(response) {
                    modalEditTUK.find("[name='nama']").val(response.data.nama)
                    modalEditTUK.find("[name='no_sk']").val(response.data.no_sk)
                    modalEditTUK.find("[name='alamat']").val(response.data.alamat)
                    modalEditTUK.find("[name='ketua']").val(response.data.ketua)
                    modalEditTUK.find("[name='no_telepon']").val(response.data.no_telepon)
                    
                    console.log('changing to ' + decodeURIComponent(response.data.panduan_mutu_filename))
                    modalEditTUK.find(".document-panduan_mutu h6").html(decodeURIComponent(response.data.panduan_mutu_filename))
                    modalEditTUK.find(".document-panduan_mutu iframe").attr('src', response.data.panduan_mutu)
                    modalEditTUK.find(".document-panduan_mutu").show()
                    
                    modalEditTUK.find(".document-sop h6").html(decodeURIComponent(response.data.sop_filename))
                    modalEditTUK.find(".document-sop iframe").attr('src', response.data.sop)
                    modalEditTUK.find(".document-sop").show()
                    
                    modalEditTUK.find(".document-sk_tuk h6").html(decodeURIComponent(response.data.sk_tuk_filename))
                    modalEditTUK.find(".document-sk_tuk iframe").attr('src', response.data.sk_tuk)
                    modalEditTUK.find(".document-sk_tuk").show()
                    
                    modalEditTUK.find(".document-ba_verifikasi h6").html(decodeURIComponent(response.data.ba_verifikasi_filename))
                    modalEditTUK.find(".document-ba_verifikasi iframe").attr('src', response.data.ba_verifikasi)
                    modalEditTUK.find(".document-ba_verifikasi").show()
                    
                    modalEditTUK.find(".document-spt_verifikator h6").html(decodeURIComponent(response.data.spt_verifikator_filename))
                    modalEditTUK.find(".document-spt_verifikator iframe").attr('src', response.data.spt_verifikator)
                    modalEditTUK.find(".document-spt_verifikator").show()
                    
                    modalEditTUK.find(".document-sk_checklist_persyaratan h6").html(decodeURIComponent(response.data.sk_checklist_persyaratan_filename))
                    modalEditTUK.find(".document-sk_checklist_persyaratan iframe").attr('src', response.data.sk_checklist_persyaratan)
                    modalEditTUK.find(".document-sk_checklist_persyaratan").show()

                    modalEditTUK.find(".document-mou h6").html(decodeURIComponent(response.data.mou_filename))
                    modalEditTUK.find(".document-mou iframe").attr('src', response.data.mou)
                    modalEditTUK.find(".document-mou").show()
                    
                    modalEditTUK.find('.loading').hide()
                })
            })

            $(".btn-delete").unbind('click').click(function (e) {
                e.preventDefault()
                if (confirm('Anda yakin?')) {
                    id = $(this).data('id')
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('resource/mitra_kerja/') ?>" + id,
                        data: {
                            _method: 'DELETE',
                            ['<?= csrf_token() ?>']: '<?= csrf_hash() ?>'
                        },
                        dataType: "json",
                    })
                    .done(function (response) {
                        refreshData()
                    })
                }
            })
        }
        refreshData()

        let modalNewMitraKerja = $("#modal-new-mitra_kerja")
        $(".btn-new-mitra_kerja").click(function (e) {
            e.preventDefault()
            modalNewMitraKerja.modal('show')
        })
        modalNewMitraKerja.on('shown.bs.modal', function() {
            let dokumenFileBuffer = []
            modalNewMitraKerja.find("[name='dokumen[]']").change(function () {
                dokumenFileBuffer = []
                fileListHtml = '';
                if (this.files.length > 0) {
                    modalNewMitraKerja.find('.file-list').show()
                    this.files.forEach(function (file, index) {
                        dokumenFileBuffer.push(file)
                        fileListHtml += `
                        <li class="list-group-item d-flex align-items-center justify-content-between">
                        <span class="text">${file.name}</span>
                        <div class="d-flex align-items-center">
                            <span class="text mr-3">${Math.floor(file.size / 1000)} KB</span>
                            <span class="btn-delete-file badge badge-danger" data-index="${index}" style="cursor: pointer"><i class="fas fa-times"></i></span>
                        </div>
                        </li>
                        `
                    })
                    modalNewMitraKerja.find('.file-list').html(fileListHtml)
                    modalNewMitraKerja.find('.btn-delete-file').unbind('click').click(function(e) {
                        if (confirm('Hapus file dokumen untuk di upload?'))
                        index = $(this).data('index')
                        const dataTransfer = new DataTransfer()
                        dokumenFileBuffer.forEach(function(file, id) {
                            if (id != index) dataTransfer.items.add(file)
                        })
                        modalNewMitraKerja.find("[name='dokumen[]']")[0].files = dataTransfer.files
                        modalNewMitraKerja.find("[name='dokumen[]']").trigger('change')
                    })
                }
                else {
                    modalNewMitraKerja.find('.file-list').hide()
                }
            })
            modalNewMitraKerja.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalNewMitraKerja.find('.loading').show()
                modalNewMitraKerja.find(".error-message").hide()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/mitra_kerja') ?>",
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    cache: false
                })
                .done(function(response) {
                    if (response.status == 'error') {
                        Object.entries(response.errors).forEach((error) => {
                            const [field, message] = error
                            modalNewMitraKerja.find('.error-' + field).html(message).show()
                        })
                    } else {
                        dokumenFileBuffer = []
                        modalNewMitraKerja.find('.file-list').hide()
                        modalNewMitraKerja.find('form')[0].reset()
                        modalNewMitraKerja.modal('hide')
                        modalNewMitraKerja.find(".error-message").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalNewMitraKerja.find('.loading').hide()
                })
            })
        })

        modalEditTUK = $("#modal-edit-mitra_kerja")
        modalEditTUK.on('shown.bs.modal', function() {
            modalEditTUK.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalEditTUK.find('.loading').show()
                modalEditTUK.find(".error-message").hide()
                id = modalEditTUK.find("[name='id']").val()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/mitra_kerja/') ?>" + id,
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    cache: false
                })
                .done(function(response) {
                    if (response.status == 'error') {
                        Object.entries(response.errors).forEach((error) => {
                            const [field, message] = error
                            modalEditTUK.find('.error-' + field).html(message).show()
                        })
                    } else {
                        modalEditTUK.find('form')[0].reset()
                        modalEditTUK.modal('hide')

                        modalEditTUK.find(".error-message").hide()
                        modalEditTUK.find(".document-panduan_mutu").show()
                        modalEditTUK.find(".document-sop").show()
                        modalEditTUK.find(".document-sk_tuk").show()
                        modalEditTUK.find(".document-ba_verifikasi").show()
                        modalEditTUK.find(".document-spt_verifikator").show()
                        modalEditTUK.find(".document-sk_checklist_persyaratan").show()
                        modalEditTUK.find(".document-mou").show()
                        refreshData()
                    }
                })
                .always(function() {
                    modalEditTUK.find('.loading').hide()
                })
            })


            modalEditTUK.find("[name='panduan_mutu'").change(function (e) {
                $(".document-panduan_mutu iframe").attr('src', URL.createObjectURL(e.target.files[0]))
                $(".document-panduan_mutu h6").html(e.target.files[0].name)
                $(".document-panduan_mutu").show()
            })
            modalEditTUK.find("[name='sop'").change(function (e) {
                $(".document-sop iframe").attr('src', URL.createObjectURL(e.target.files[0]))
                $(".document-sop h6").html(e.target.files[0].name)
                $(".document-sop").show()
            })
            modalEditTUK.find("[name='sk_tuk'").change(function (e) {
                $(".document-sk_tuk iframe").attr('src', URL.createObjectURL(e.target.files[0]))
                $(".document-sk_tuk h6").html(e.target.files[0].name)
                $(".document-sk_tuk").show()
            })
            modalEditTUK.find("[name='ba_verifikasi'").change(function (e) {
                $(".document-ba_verifikasi iframe").attr('src', URL.createObjectURL(e.target.files[0]))
                $(".document-ba_verifikasi h6").html(e.target.files[0].name)
                $(".document-ba_verifikasi").show()
            })
            modalEditTUK.find("[name='spt_verifikator'").change(function (e) {
                $(".document-spt_verifikator iframe").attr('src', URL.createObjectURL(e.target.files[0]))
                $(".document-spt_verifikator h6").html(e.target.files[0].name)
                $(".document-spt_verifikator").show()
            })
            modalEditTUK.find("[name='sk_checklist_persyaratan'").change(function (e) {
                $(".document-sk_checklist_persyaratan iframe").attr('src', URL.createObjectURL(e.target.files[0]))
                $(".document-sk_checklist_persyaratan h6").html(e.target.files[0].name)
                $(".document-sk_checklist_persyaratan").show()
            })
            modalEditTUK.find("[name='mou'").change(function (e) {
                $(".document-mou iframe").attr('src', URL.createObjectURL(e.target.files[0]))
                $(".document-mou h6").html(e.target.files[0].name)
                $(".document-mou").show()
            })
        })

        $(".filter-pencarian").on('input', function (e) {
            value = $(this).val()
            if (value != '' ) {
                dataParams.pencarian = value
            } else {
                delete dataParams.pencarian
            }
            refreshData()
        })
        $(".filter-limit").change(function (e) {
            value = $(this).val()
            if (value != '' ) {
                dataParams.limit = value
            } else {
                delete dataParams.limit
            }
            refreshData()
        })
        $(".filter-tanggal_awal_mou").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.tanggal_awal_mou = value
            } else {
                delete dataParams.tanggal_awal_mou
            }
            refreshData()
        })
        $(".filter-tanggal_akhir_mou").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.tanggal_akhir_mou = value
            } else {
                delete dataParams.tanggal_akhir_mou
            }
            refreshData()
        })
        $(".btn-sort").click(function (e) {
            e.preventDefault()
            field = $(this).attr('data-field')
            sort = $(this).attr('data-sort')
            $(".btn-sort").removeClass('text-danger')
            $(".btn-sort").addClass('text-warning')
            $(this).addClass('text-danger')

            if (sort == 'asc') {
                sort = 'desc'
                $(this).attr('data-sort', 'desc')
                $(this).find('i').removeClass('fa-sort-amount-down-alt')
                $(this).find('i').addClass('fa-sort-amount-up-alt')
            } else {
                sort = 'asc'
                $(this).attr('data-sort', 'asc')
                $(this).find('i').removeClass('fa-sort-amount-up-alt')
                $(this).find('i').addClass('fa-sort-amount-down-alt')
            }

            dataParams.sort = sort
            dataParams.sortBy = field
            refreshData()
        })
    })
</script>

<?= $this->endSection(); ?>
