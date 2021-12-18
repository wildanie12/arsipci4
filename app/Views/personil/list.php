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
                                <div class="col-md-8">
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
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-nik" value="nik" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-nik" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">NIK</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-alamat" value="alamat" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-alamat" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">Alamat</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group mb-0">
                                                <label for="filter-jabatan_id" class="mb-0 font-weight-bold text-xs">Jabatan</label>
                                                <div class="input-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                                    </div>
                                                    <select id="filter-jabatan_id" name="jabatan_id" class="form-control form-control-sm filter-jabatan_id">
                                                        <option value="">-- Pilih Jabatan --</option>
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
                                                <form action="<?= site_url('export/personil/spreadsheet') ?>" method="post">
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
                                    <a href="#" class="btn btn-success rounded-circle btn-new-personil">
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
                                        NIK
                                        <span class="ml-2 text-warning btn-sort" data-field="nik" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
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

<div class="modal fade" id="modal-new-personil">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Tambah data Personil</h6>
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
                                <label for="new-personil-nama" class="text-sm mb-0 font-weight-bold">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                    </div>
                                    <input type="text" id="new-personil-nama" class="form-control" name="nama" placeholder="Tuliskan nama lengkap asesor...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-personil-tempat_lahir" class="text-sm mb-0 font-weight-bold">Tempat, Tanggal Lahir</label>
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
                                <label for="new-personil-jabatan_id" class="text-sm mb-0 font-weight-bold">Jabatan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas icon-jabatan fa-user-tie"></i></span>
                                    </div>
                                    <select name="jabatan_id" id="new-personil-jabatan_id" class="form-control">
                                        <option value="">- Pilih Jabatan -</option>
                                    </select>
                                </div>
                                <span class="font-italic text-xs">Tidak ada jabatan yang diinginkan? <a href="#" class="btn-new-jabatan">Buat jabatan</a></span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-jabatan_id" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-personil-nik" class="text-sm mb-0 font-weight-bold">NIK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" id="new-personil-nik" class="form-control" name="nik" placeholder="Tuliskan nik ...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nik" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-personil-alamat" class="text-sm mb-0 font-weight-bold">Alamat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                    </div>
                                    <textarea name="alamat" id="new-personil-alamat" class="form-control"></textarea>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-alamat" style="display: none;"></div>
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
                                <label for="new-personil-sk_pengangkatan" class="text-sm mb-0 font-weight-bold">SK Pengangkatan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-personil-sk_pengangkatan" class="form-control pt-1" name="sk_pengangkatan">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sk_pengangkatan" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-personil-portofolio" class="text-sm mb-0 font-weight-bold">Portofolio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-personil-portofolio" class="form-control pt-1" name="portofolio">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-portofolio" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-personil-cv" class="text-sm mb-0 font-weight-bold">CV</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-personil-cv" class="form-control pt-1" name="cv">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-cv" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-personil-pas_foto" class="text-sm mb-0 font-weight-bold">Pas Foto</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="image/*" id="new-personil-pas_foto" class="form-control pt-1" name="pas_foto">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-pas_foto" style="display: none;"></div>
                            </div>
                            <div class="preview-image image-pas_foto mb-2" style="display:none">
                                <img class="img-thumbnail" src="<?= site_url('img/img_unavailable.png') ?>">
                            </div> 
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-personil-ktp" class="text-sm mb-0 font-weight-bold">Scan KTP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="image/*" id="new-personil-ktp" class="form-control pt-1" name="ktp">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-ktp" style="display: none;"></div>
                            </div>
                            <div class="preview-image image-ktp mb-2" style="display:none">
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

<div class="modal fade" id="modal-edit-personil">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Edit data Personil</h6>
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
                    <input type="hidden" name="id">
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                    </div>
                                    <input type="text" id="edit-personil-nama" class="form-control" name="nama" placeholder="Tuliskan nama lengkap asesor...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-tempat_lahir" class="text-sm mb-0 font-weight-bold">Tempat, Tanggal Lahir</label>
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
                                <label for="edit-personil-jabatan_id" class="text-sm mb-0 font-weight-bold">Jabatan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas icon-jabatan fa-user-tie"></i></span>
                                    </div>
                                    <select name="jabatan_id" id="edit-personil-jabatan_id" class="form-control">
                                        <option value="">- Pilih Jabatan -</option>
                                    </select>
                                </div>
                                <span class="font-italic text-xs">Tidak ada jabatan yang diinginkan? <a href="#" class="btn-new-jabatan">Buat jabatan</a></span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-jabatan_id" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nik" class="text-sm mb-0 font-weight-bold">NIK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    </div>
                                    <input type="text" id="edit-personil-nik" class="form-control" name="nik" placeholder="Tuliskan nik ...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nik" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-alamat" class="text-sm mb-0 font-weight-bold">Alamat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                    </div>
                                    <textarea name="alamat" id="edit-personil-alamat" class="form-control"></textarea>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-alamat" style="display: none;"></div>
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
                                <label for="edit-personil-sk_pengangkatan" class="text-sm mb-0 font-weight-bold">SK Pengangkatan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="edit-personil-sk_pengangkatan" class="form-control pt-1" name="sk_pengangkatan">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sk_pengangkatan" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-sk_pengangkatan" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="edit-personil-portofolio" class="text-sm mb-0 font-weight-bold">Portofolio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="edit-personil-portofolio" class="form-control pt-1" name="portofolio">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-portofolio" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-portofolio" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="edit-personil-cv" class="text-sm mb-0 font-weight-bold">CV</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="edit-personil-cv" class="form-control pt-1" name="cv">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-cv" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-cv" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="edit-personil-pas_foto" class="text-sm mb-0 font-weight-bold">Pas Foto</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="image/*" id="edit-personil-pas_foto" class="form-control pt-1" name="pas_foto">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-pas_foto" style="display: none;"></div>
                            </div>
                            <div class="preview-image image-pas_foto mb-2" style="display:none">
                                <img class="img-thumbnail" src="<?= site_url('img/img_unavailable.png') ?>">
                            </div> 
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="edit-personil-ktp" class="text-sm mb-0 font-weight-bold">Scan KTP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="image/*" id="edit-personil-ktp" class="form-control pt-1" name="ktp">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-ktp" style="display: none;"></div>
                            </div>
                            <div class="preview-image image-ktp mb-2" style="display:none">
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

<div class="modal fade" id="modal-jabatan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Jabatan</h4>
                <button class="close" data-dismiss="modal" type="button">
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
                            <div class="form-group">
                                <label for="new-jabatan-nama">Nama Jabatan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nama" placeholder="Tuliskan nama jabatan...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                            <div class="form-group d-flex">
                                <button data-dismiss="modal" class="btn btn-light mr-2">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary flex-grow-1">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    Tambah jabatan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-detail-personil">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Detail data Personil</h6>
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
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold">
                                    <i class="fas fa-signature mr-2"></i>  
                                    Nama Lengkap
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-nama border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold">
                                    <i class="fas fa-birthday-cake mr-2"></i>  
                                    Tempat, Tanggal Lahir
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-tempat_lahir border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold">
                                    <i class="fas fa-user-tie mr-2"></i>  
                                    Jabatan
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-jabatan border-left-default"></h4>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold">
                                    <i class="fas fa-id-card mr-2"></i>  
                                    NIK
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-nik border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold">
                                    <i class="fas fa-map-marked-alt mr-2"></i>  
                                    Alamat
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-alamat border-left-default"></h4>
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
                            <label for="edit-personil-sk_pengangkatan" class="text-sm mb-0 font-weight-bold">SK Pengangkatan</label>
                            <div class="preview-document document-sk_pengangkatan" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="edit-personil-portofolio" class="text-sm mb-0 font-weight-bold">Portofolio</label>
                            <div class="preview-document document-portofolio" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="edit-personil-cv" class="text-sm mb-0 font-weight-bold">CV</label>
                            <div class="preview-document document-cv" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="edit-personil-pas_foto" class="text-sm mb-0 font-weight-bold">Pas Foto</label>
                            <div class="preview-image image-pas_foto mb-2" style="display:none">
                                <img class="img-thumbnail" src="<?= site_url('img/img_unavailable.png') ?>">
                            </div> 
                        </div>
                        <div class="col-md">
                            <label for="edit-personil-ktp" class="text-sm mb-0 font-weight-bold">Scan KTP</label>
                            <div class="preview-image image-ktp mb-2" style="display:none">
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
            view_content: 'personil/ajax/table',
            view_pagination: 'personil/ajax/pagination'
        }
        function refreshData(url) {
            url = 0 || url
            if (!url) url = "<?= site_url('resource/personil') ?>"
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
                modalEditPersonil.modal('show')
                modalEditPersonil.find('.loading').show()
                e.preventDefault()
                id = $(this).data('id')
                modalEditPersonil.find("[name='id']").val(id)
                $.ajax({
                    type: "GET",
                    url: "<?= site_url('resource/personil/') ?>" + id,
                    dataType: "json",
                })
                .done(function(response) {
                    modalEditPersonil.find("[name='id']").val(response.data.id)
                    modalEditPersonil.find("[name='nama']").val(response.data.nama)
                    modalEditPersonil.find("[name='tempat_lahir']").val(response.data.tempat_lahir)
                    modalEditPersonil.find("[name='tanggal_lahir']").val(response.data.tanggal_lahir)
                    modalEditPersonil.find("[name='nik']").val(response.data.nik)
                    modalEditPersonil.find("[name='alamat']").val(response.data.alamat)

                    if (response.data.sk_pengangkatan_filename )
                    modalEditPersonil.find(".document-sk_pengangkatan a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.sk_pengangkatan_filename}
                        `
                    )
                    modalEditPersonil.find(".document-sk_pengangkatan a").attr('href', response.data.sertifikat_asesor)
                    modalEditPersonil.find(".document-sk_pengangkatan").show()

                    if (response.data.portofolio_filename )
                    modalEditPersonil.find(".document-portofolio a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.portofolio_filename}
                        `
                    )
                    modalEditPersonil.find(".document-portofolio a").attr('href', response.data.portofolio)
                    modalEditPersonil.find(".document-portofolio").show()

                    if (response.data.cv_filename )
                    modalEditPersonil.find(".document-cv a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.cv_filename}
                        `
                    )
                    modalEditPersonil.find(".document-cv a").attr('href', response.data.cv)
                    modalEditPersonil.find(".document-cv").show()

                    modalEditPersonil.find(".image-pas_foto img").attr('src', response.data.pas_foto)
                    modalEditPersonil.find(".image-pas_foto").show()
                    modalEditPersonil.find(".image-ktp img").attr('src', response.data.ktp)
                    modalEditPersonil.find(".image-ktp").show()
                    
                    refreshJabatan(function() {
                        modalEditPersonil.find("[name='jabatan_id']").val(response.data.jabatan_id)
                    })

                    modalEditPersonil.find(".loading").hide()
                })
            })

            $(".btn-delete").unbind('click').click(function (e) {
                e.preventDefault()
                if (confirm('Anda yakin?')) {
                    id = $(this).data('id')
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('resource/personil/') ?>" + id,
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

            $(".btn-detail").unbind('click').click(function (e) {
                modalDetailPersonil.modal('show')
                modalDetailPersonil.find('.loading').show()
                e.preventDefault()
                id = $(this).data('id')
                modalDetailPersonil.find("[name='id']").val(id)
                $.ajax({
                    type: "GET",
                    url: "<?= site_url('resource/personil/') ?>" + id,
                    dataType: "json",
                })
                .done(function(response) {
                    modalDetailPersonil.find(".fill-id").html(response.data.id)
                    modalDetailPersonil.find(".fill-nama").html(response.data.nama)
                    modalDetailPersonil.find(".fill-tempat_lahir").html(response.data.tempat_lahir + ', ' + response.data.tanggal_lahir)
                    modalDetailPersonil.find(".fill-nik").html(response.data.nik)
                    modalDetailPersonil.find(".fill-alamat").html(response.data.alamat)

                    if (response.data.sk_pengangkatan_filename )
                    modalDetailPersonil.find(".document-sk_pengangkatan a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.sk_pengangkatan_filename}
                        `
                    )
                    modalDetailPersonil.find(".document-sk_pengangkatan a").attr('href', response.data.sertifikat_asesor)
                    modalDetailPersonil.find(".document-sk_pengangkatan").show()

                    if (response.data.portofolio_filename )
                    modalDetailPersonil.find(".document-portofolio a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.portofolio_filename}
                        `
                    )
                    modalDetailPersonil.find(".document-portofolio a").attr('href', response.data.portofolio)
                    modalDetailPersonil.find(".document-portofolio").show()

                    if (response.data.cv_filename )
                    modalDetailPersonil.find(".document-cv a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.cv_filename}
                        `
                    )
                    modalDetailPersonil.find(".document-cv a").attr('href', response.data.cv)
                    modalDetailPersonil.find(".document-cv").show()

                    modalDetailPersonil.find(".image-pas_foto img").attr('src', response.data.pas_foto)
                    modalDetailPersonil.find(".image-pas_foto").show()
                    modalDetailPersonil.find(".image-ktp img").attr('src', response.data.ktp)
                    modalDetailPersonil.find(".image-ktp").show()
                    
                    modalDetailPersonil.find(".fill-jabatan").html(response.data.jabatan_nama)

                    modalDetailPersonil.find(".loading").hide()
                })
            })
        }
        refreshData()

        let modalDetailPersonil = $("#modal-detail-personil")
        let modalNewPersonil = $("#modal-new-personil")
        $(".btn-new-personil").click(function (e) {
            e.preventDefault()
            modalNewPersonil.modal('show')
        })

        modalNewPersonil.on('shown.bs.modal', function() {
            modalNewPersonil.find("[name='pas_foto']").change(function(e) {
                const pasFoto = new FileReader()
                pasFoto.readAsDataURL(this.files[0])
                pasFoto.onload = function (e) {
                    modalNewPersonil.find(".image-pas_foto img").attr('src', e.target.result)
                    modalNewPersonil.find(".image-pas_foto").show()
                }
            })
            modalNewPersonil.find("[name='ktp']").change(function (e) {
                const ktpReader = new FileReader()
                ktpReader.readAsDataURL(this.files[0])
                ktpReader.onload = function (e) {
                    modalNewPersonil.find(".image-ktp img").attr('src', e.target.result)
                    modalNewPersonil.find(".image-ktp").show()
                }
            })

            modalNewPersonil.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalNewPersonil.find('.loading').show()
                modalNewPersonil.find(".error-message").hide()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/personil') ?>",
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
                            modalNewPersonil.find('.error-' + field).html(message).show()
                        })
                    } else {
                        modalNewPersonil.find('form')[0].reset()
                        modalNewPersonil.modal('hide')
                        modalNewPersonil.find(".error-message").hide()
                        modalNewPersonil.find(".preview-image").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalNewPersonil.find('.loading').hide()
                })
            })
        })

        modalEditPersonil = $("#modal-edit-personil")
        modalEditPersonil.on('shown.bs.modal', function() {
            modalEditPersonil.find("[name='pas_foto']").change(function (e) {
                const pasFotoReader = new FileReader()
                pasFotoReader.readAsDataURL(this.files[0])
                pasFotoReader.onload = function (e) {
                    console.log(e)
                    modalEditPersonil.find(".image-pas_foto img").attr('src', e.target.result)
                    modalEditPersonil.find(".image-pas_foto").show()
                }
            })
            modalEditPersonil.find("[name='ktp']").change(function (e) {
                const pasFotoReader = new FileReader()
                pasFotoReader.readAsDataURL(this.files[0])
                pasFotoReader.onload = function (e) {
                    console.log(e)
                    modalEditPersonil.find(".image-ktp img").attr('src', e.target.result)
                    modalEditPersonil.find(".image-ktp").show()
                }
            })
            modalEditPersonil.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalEditPersonil.find('.loading').show()
                modalEditPersonil.find(".error-message").hide()
                id = modalEditPersonil.find("[name='id']").val()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/personil/') ?>" + id,
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
                            modalEditPersonil.find('.error-' + field).html(message).show()
                        })
                    } else {
                        modalEditPersonil.find('form')[0].reset()
                        modalEditPersonil.modal('hide')
                        modalEditPersonil.find(".error-message").hide()
                        modalEditPersonil.find(".preview-image").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalEditPersonil.find('.loading').hide()
                })
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
        $(".filter-jabatan_id").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.jabatan_id = value
            } else {
                delete dataParams.jabatan_id
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


        function refreshJabatan(callback) {
            $.ajax({
                type: "GET",
                url: "<?= site_url('resource/jabatan') ?>",
                dataType: "json",
            })
            .done(function(response) {
                if (response.status == 'success') {
                    optionView = "<option value=''>- Pilih jabatan -</option>"
                    tableView = ''
                    response.data.forEach(function(item, index) {
                        optionView += `
                            <option value='${item.id}'>${item.nama}</option>
                        `
                        tableView += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${item.nama}</td>
                                <td>
                                    <a href='#' data-id='${item.id}' class='btn btn-sm btn-delete-jabatan text-danger btn-link'>
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        `
                    })
                    $("[name='jabatan_id']").html(optionView)
                    modalJabatan.find("tbody").html(tableView)
                    onLoadJabatan()
                    callback = 0 || callback
                    if (callback) callback()
                }
            })
        }
        refreshJabatan()
        function onLoadJabatan() {
            modalJabatan.find('.btn-delete-jabatan').unbind('click').click(function (e) {
                e.preventDefault()
                if (confirm('Anda yakin?')) {       
                    id = $(this).data('id')
                    modalJabatan.find('.loading').show()
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('resource/jabatan/') ?>" + id,
                        dataType: "json",
                        data: {
                            _method: 'DELETE',
                            ['<?= csrf_token() ?>']: '<?= csrf_hash() ?>'
                        }
                    })
                    .done(function (response) {
                        refreshJabatan()
                    })
                    .always(function () {
                        modalJabatan.find('.loading').hide()
                    })
                }
            })
            modalJabatan.find('form').unbind('submit').submit(function(e) {
                e.preventDefault()
                if (confirm('Tambahkan data jabatan?')) {
                    modalJabatan.find('.loading').show()
                    formData = new FormData(this)
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('resource/jabatan') ?>",
                        data: formData,
                        dataType: "json",
                        processData: false,
                        contentType: false,
                        cache: false,
                    })
                    .done(function (response) {
                        if (response.status == 'error') {
                            Object.entries(response.errors).forEach((error) => {
                                const [field, message] = error
                                modalJabatan.find('.error-' + field).html(message).show()
                            })
                        } else {
                            refreshJabatan(function () {
                                $("[name='jabatan_id']").val(response.data.id)
                            })
                            modalJabatan.find('.error-message').hide()
                            modalJabatan.find('form')[0].reset()
                            modalJabatan.modal('hide')
                        }
                    })
                    .always(function () {
                        modalJabatan.find('.loading').hide()
                    })
                }
            })
        }

        modalJabatan = $("#modal-jabatan")
        $(".btn-new-jabatan").click(function (e) {
            e.preventDefault()
            modalJabatan.modal('show')
        })

        modalJabatan.on('show.bs.modal', function (e) {
            modalNewPersonil.css('z-index', '1020')
            modalEditPersonil.css('z-index', '1020')
        })
        modalJabatan.on('hidden.bs.modal', function (e) {
            modalNewPersonil.css('z-index', '1050')
            $("body").addClass('modal-open')
            modalEditPersonil.css('z-index', '1050')
        })
        modalJabatan.on('shown.bs.modal', function (e) {
            refreshJabatan()
        })
    })
</script>

<?= $this->endSection(); ?>
