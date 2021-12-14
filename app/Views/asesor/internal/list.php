<?= $this->extend('templates/sidebar'); ?>

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
                                Manajemen <br/>Tempat Uji <br/> Kompetensi
                            </h6>
                        </div>
                        <div class="col-md">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <label for="filter-limit" class="mb-0 font-weight-bold text-xs">Pencarian</label>
                                                <div class="input-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                                    </div>
                                                    <input type="search" id="filter-pencarian" class="filter-pencarian form-control form-control-sm" placeholder="Cari disini...">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-md-8">
                                            <div class="form-group mb-0 text-center" style="padding-bottom: 1px;">
                                                <label for="filter-limit" class="mb-0 font-weight-bold text-xs">Cari berdasarkan</label><br/>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-nama" value="nama" class="filter-berdasarkan custom-control-input" checked>
                                                    <label for="filter-berdasarkan-nama" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">Nama</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-no_sk" value="no_reg_sertifikat" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-no_sk" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">No Reg Sertifikat</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-ketua" value="no_met_sertifikat" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-ketua" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">No Met Sertifikat</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-0">
                                                <label for="filter-kompetensi_teknis" class="mb-0 font-weight-bold text-xs">Kompetensi Teknis</label>
                                                <div class="input-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-flask"></i></span>
                                                    </div>
                                                    <select id="filter-kompetensi_teknis" class="form-control form-control-sm filter-kompetensi_teknis">
                                                        <option value="">-- Pilih kompetensi --</option>
                                                        <?php foreach($dataKompetensiTeknis as $kompetensi) : ?>
                                                            <option value="<?= $kompetensi->kompetensi_teknis ?>"><?= $kompetensi->kompetensi_teknis ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <label for="filter-tanggal_sertifikat" class="mb-0 font-weight-bold text-xs">Tanggal Sertifikat</label>
                                                <div class="input-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control form-control-sm filter-tanggal_sertifikat" id="filter-tanggal_sertifikat">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <label for="filter-status_sertifikat" class="mb-0 font-weight-bold text-xs">Status Sertifikat</label>
                                                <div class="input-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                                                    </div>
                                                    <select id="filter-status_sertifikat" class="form-control form-control-sm filter-status_sertifikat">
                                                        <option value="">-- Pilih --</option>
                                                        <option value="aktif">Aktif</option>
                                                        <option value="expired">Expired</option>
                                                    </select>
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
                                                <div class="input-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                                    </div>
                                                    <input type="number" value="50" id="filter-limit" class="filter-limit form-control form-control-sm" min="0" step="5">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <form action="<?= site_url('export/tuk/spreadsheet') ?>" method="post">
                                                    <button type="submit" class="btn btn-sm btn-block btn-success">
                                                        <i class="fas fa-file-excel mr-2"></i>
                                                        Export
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto">
                                    <a href="#" class="btn btn-success rounded-circle btn-new-asesor">
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
                                    <th class="align-middle" style="width: 20%">
                                        Nama
                                        <span class="ml-2 text-danger btn-sort" data-field="nama" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle">
                                        TTL
                                        <span class="ml-2 text-warning btn-sort" data-field="tempat_lahir" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle" style="width: 10%">
                                        Kompetensi <br/>Teknis
                                        <span class="ml-2 text-warning btn-sort" data-field="kompetensi_teknis" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle" style="width: 35%">
                                        Sertifikat
                                    </th>
                                    <th class="align-middle" style="width: 35%">
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

<div class="modal fade" id="modal-new-asesor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Tambah data Asesor Internal</h6>
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
                <form>
                    <?= csrf_field() ?>
                    <input type="hidden" name="sifat_penempatan" value="internal">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesor-nama" class="text-sm mb-0 font-weight-bold">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                    </div>
                                    <input type="text" id="new-asesor-nama" class="form-control" name="nama" placeholder="Tuliskan nama lengkap asesor...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesor-tempat_lahir" class="text-sm mb-0 font-weight-bold">Tempat Lahir</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-birthday-cake"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tuliskan Tempat lahir..">
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tempat_lahir" style="display: none;"></div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_lahir" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesor-no_blanko" class="text-sm mb-0 font-weight-bold">Nomor Blanko</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-file-alt"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="no_blanko" placeholder="Tuliskan nomor blanko..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_blanko" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesor-no_reg_sertifikat" class="text-sm mb-0 font-weight-bold">Nomor REG Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-file-alt"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="no_reg_sertifikat" placeholder="Tuliskan REG..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_reg_sertifikat" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesor-no_met_sertifikat" class="text-sm mb-0 font-weight-bold">Nomor MET Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-file-alt"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="no_met_sertifikat" name="no_met_sertifikat" placeholder="Tuliskan MET..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_met_sertifikat" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesor-kompetensi_teknis" class="text-sm mb-0 font-weight-bold">Kompetensi Teknis</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-flask"></i></span>
                                    </div>
                                    <input type="text" id="new-asesor-kompetensi_teknis" class="form-control" name="kompetensi_teknis" placeholder="Tuliskan kompetensi teknis">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-kompetensi_teknis" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesor-tanggal_sertifikat" class="text-sm mb-0 font-weight-bold">Tanggal Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                                    </div>
                                    <input type="date" id="new-asesor-tanggal_sertifikat" class="form-control" name="tanggal_sertifikat">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_sertifikat" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesor-tanggal_expired_sertifikat" class="text-sm mb-0 font-weight-bold">Tanggal Expired Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                                    </div>
                                    <input type="date" id="new-asesor-tanggal_expired_sertifikat" class="form-control" name="tanggal_expired_sertifikat">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_expired_sertifikat" style="display: none;"></div>
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
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-asesor-sertifikat_asesor" class="text-sm mb-0 font-weight-bold">Sertifikat Asesor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-asesor-sertifikat_asesor" class="form-control pt-1" name="sertifikat_asesor">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sertifikat_asesor" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-asesor-portofolio" class="text-sm mb-0 font-weight-bold">Portofolio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-asesor-portofolio" class="form-control pt-1" name="portofolio">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-portofolio" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-asesor-cv" class="text-sm mb-0 font-weight-bold">CV</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-asesor-cv" class="form-control pt-1" name="cv">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-cv" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-asesor-pas_foto" class="text-sm mb-0 font-weight-bold">Pas Foto</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="image/*" id="new-asesor-pas_foto" class="form-control pt-1" name="pas_foto">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-pas_foto" style="display: none;"></div>
                            </div>
                            <div class="image-preview preview-pas_foto mb-2" style="display:none">
                                <img class="img-thumbnail" src="<?= site_url('img/img_unavailable.png') ?>">
                            </div> 
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-asesor-ktp" class="text-sm mb-0 font-weight-bold">Scan KTP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="image/*" id="new-asesor-ktp" class="form-control pt-1" name="ktp">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-ktp" style="display: none;"></div>
                            </div>
                            <div class="image-preview preview-ktp mb-2" style="display:none">
                                <img class="img-thumbnail" src="<?= site_url('img/img_unavailable.png') ?>">
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


<div class="modal fade" id="modal-edit-tuk">
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
                                        <label for="edit-tuk-nama" class="text-sm mb-0 font-weight-bold">Nama TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                            </div>
                                            <input type="text" id="edit-tuk-nama" class="form-control" name="nama" placeholder="Tuliskan nama TUK...">
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-tuk-no_sk" class="text-sm mb-0 font-weight-bold">Nomor SK TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                            </div>
                                            <input type="text" id="edit-tuk-no_sk" class="form-control" name="no_sk" placeholder="Tuliskan Nomor SK TUK...">
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_sk" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="edit-tuk-alamat" class="text-sm mb-0 font-weight-bold">Alamat TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                            </div>
                                            <textarea name="alamat" id="edit-tuk-alamat" class="form-control"></textarea>
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-alamat" style="display: none;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-tuk-ketua" class="text-sm mb-0 font-weight-bold">Ketua TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                            </div>
                                            <input type="text" id="edit-tuk-ketua" class="form-control" name="ketua" placeholder="Tuliskan Ketua TUK...">
                                        </div>
                                        <div class="text-xs text-danger font-weight-bold font-italic error-message error-ketua" style="display: none;"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edit-tuk-no_telepon" class="text-sm mb-0 font-weight-bold">Nomor Telepon TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                            </div>
                                            <input type="text" id="edit-tuk-no_telepon" class="form-control" name="no_telepon" placeholder="Tuliskan Nomor Telepon TUK...">
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
                                        <label for="edit-tuk-panduan_mutu" class="text-sm mb-0 font-weight-bold">Panduan Mutu</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-tuk-panduan_mutu" class="form-control pt-1" name="panduan_mutu">
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
                                        <label for="edit-tuk-sop" class="text-sm mb-0 font-weight-bold">Dokumen SOP</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-tuk-sop" class="form-control pt-1" name="sop">
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
                                        <label for="edit-tuk-sk_tuk" class="text-sm mb-0 font-weight-bold">Surat Keputusan TUK</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-tuk-sk_tuk" class="form-control pt-1" name="sk_tuk">
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
                                        <label for="edit-tuk-ba_verifikasi" class="text-sm mb-0 font-weight-bold">B.A. Verifikasi</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-tuk-ba_verifikasi" class="form-control pt-1" name="ba_verifikasi">
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
                                        <label for="edit-tuk-spt_verifikator" class="text-sm mb-0 font-weight-bold">SPT Verifikator</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-tuk-spt_verifikator" class="form-control pt-1" name="spt_verifikator">
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
                                        <label for="edit-tuk-sk_checklist_persyaratan" class="text-sm mb-0 font-weight-bold">SK Checklist Persyaratan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-tuk-sk_checklist_persyaratan" class="form-control pt-1" name="sk_checklist_persyaratan">
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
                                        <label for="edit-tuk-mou" class="text-sm mb-0 font-weight-bold">Dokumen MoU</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                            </div>
                                            <input type="file" accept="application/pdf" id="edit-tuk-mou" class="form-control pt-1" name="mou">
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


<script>
    $(document).ready(function () {

        let dataParams = {
            limit: 50,
            berdasarkan: 'nama',
            sifat_penempatan: 'internal',
            view_content: 'asesor/ajax/table',
            view_pagination: 'asesor/ajax/pagination'
        }
        function refreshData(url) {
            url = 0 || url
            if (!url) url = "<?= site_url('resource/asesor') ?>"
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
                    url: "<?= site_url('resource/tuk/') ?>" + id,
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
                        url: "<?= site_url('resource/tuk/') ?>" + id,
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

        let modalNewAsesor = $("#modal-new-asesor")
        $(".btn-new-asesor").click(function (e) {
            e.preventDefault()
            modalNewAsesor.modal('show')
        })

        modalNewAsesor.on('shown.bs.modal', function() {
            modalNewAsesor.find("[name='pas_foto']").change(function(e) {
                const pasFoto = new FileReader()
                pasFoto.readAsDataURL(this.files[0])
                pasFoto.onload = function (e) {
                    modalNewAsesor.find(".preview-pas_foto img").attr('src', e.target.result)
                    modalNewAsesor.find(".preview-pas_foto").show()
                }
            })
            modalNewAsesor.find("[name='ktp']").change(function (e) {
                const ktpReader = new FileReader()
                ktpReader.readAsDataURL(this.files[0])
                ktpReader.onload = function (e) {
                    modalNewAsesor.find(".preview-ktp img").attr('src', e.target.result)
                    modalNewAsesor.find(".preview-ktp").show()
                }
            })

            modalNewAsesor.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalNewAsesor.find('.loading').show()
                modalNewAsesor.find(".error-message").hide()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/asesor') ?>",
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
                            modalNewAsesor.find('.error-' + field).html(message).show()
                        })
                    } else {
                        modalNewAsesor.find('form')[0].reset()
                        modalNewAsesor.modal('hide')
                        modalNewAsesor.find(".error-message").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalNewAsesor.find('.loading').hide()
                })
            })
        })

        modalEditTUK = $("#modal-edit-tuk")
        modalEditTUK.on('shown.bs.modal', function() {
            modalEditTUK.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalEditTUK.find('.loading').show()
                modalEditTUK.find(".error-message").hide()
                id = modalEditTUK.find("[name='id']").val()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/tuk/') ?>" + id,
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
        $(".filter-berdasarkan").change(function (e) {
            value = $(this).val()
            if (value != '' ) {
                dataParams.berdasarkan = value
            } else {
                delete dataParams.berdasarkan
            }
            refreshData()
        }) 
        $(".filter-kompetensi_teknis").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.kompetensi_teknis = value
            } else {
                delete dataParams.kompetensi_teknis
            }
            refreshData()
        })
        $(".filter-tanggal_sertifikat").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.tanggal_sertifikat = value
            } else {
                delete dataParams.tanggal_sertifikat
            }
            refreshData()
        })
        $(".filter-status_sertifikat").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.status_sertifikat = value
            } else {
                delete dataParams.status_sertifikat
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