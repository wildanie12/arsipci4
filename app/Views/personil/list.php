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
                                                <label for="filter-jabatan" class="mb-0 font-weight-bold text-xs">Jabatan</label>
                                                <div class="input-group input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                                    </div>
                                                    <select id="filter-jabatan" class="form-control form-control-sm filter-jabatan">
                                                        <option value="">-- Pilih Jabatan --</option>
                                                        <?php foreach($dataJabatan as $jabatan) : ?>
                                                            <option value="<?= $jabatan->id ?>"><?= $jabatan->nama ?></option>
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
                                                <form action="<?= site_url('export/asesor/spreadsheet') ?>" method="post">
                                                    <input type="hidden" name="sifat_penempatan" value="internal">
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
                                <label for="new-personil-jabatan" class="text-sm mb-0 font-weight-bold">Jabatan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas icon-jabatan fa-user-tie"></i></span>
                                    </div>
                                    <select name="jabatan_id" id="new-personil-jabatan" class="form-control">
                                        <option value="">- Pilih Jabatan -</option>
                                    </select>
                                </div>
                                <span class="font-italic text-xs">Tidak ada jabatan yang diinginkan? <a href="#" class="btn-new-jabatan">Buat jabatan</a></span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-jabatan" style="display: none;"></div>
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

<div class="modal fade" id="modal-edit-asesor">
    <div class="modal-dialog modal-xl">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Edit data Asesor Internal</h6>
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
                    <input type="hidden" name="id">
                    <input type="hidden" name="_method" value="PATCH">
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
                                <label for="new-personil-tempat_lahir" class="text-sm mb-0 font-weight-bold">Tempat Lahir</label>
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
                                <label for="new-personil-no_blanko" class="text-sm mb-0 font-weight-bold">Nomor Blanko</label>
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
                                <label for="new-personil-no_reg_sertifikat" class="text-sm mb-0 font-weight-bold">Nomor REG Sertifikat</label>
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
                                <label for="new-personil-no_met_sertifikat" class="text-sm mb-0 font-weight-bold">Nomor MET Sertifikat</label>
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
                                <label for="new-personil-kompetensi_teknis" class="text-sm mb-0 font-weight-bold">Kompetensi Teknis</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-flask"></i></span>
                                    </div>
                                    <input type="text" id="new-personil-kompetensi_teknis" class="form-control" name="kompetensi_teknis" placeholder="Tuliskan kompetensi teknis">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-kompetensi_teknis" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-personil-tanggal_sertifikat" class="text-sm mb-0 font-weight-bold">Tanggal Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                                    </div>
                                    <input type="date" id="new-personil-tanggal_sertifikat" class="form-control" name="tanggal_sertifikat">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_sertifikat" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-personil-tanggal_expired_sertifikat" class="text-sm mb-0 font-weight-bold">Tanggal Expired Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                                    </div>
                                    <input type="date" id="new-personil-tanggal_expired_sertifikat" class="form-control" name="tanggal_expired_sertifikat">
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
                                <label for="new-personil-sertifikat_asesor" class="text-sm mb-0 font-weight-bold">Sertifikat Asesor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-personil-sertifikat_asesor" class="form-control pt-1" name="sertifikat_asesor">
                                </div>
                                <div class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB <br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sertifikat_asesor" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-sertifikat_asesor" style="display: none;">
                                <a target="_blank" href=""></a>
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
                                <div class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB <br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-portofolio" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-portofolio" style="display: none;">
                                <a target="_blank" href=""></a>
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
                                <div class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB <br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-cv" style="display: none;"></div>
                            </div>
                            <div class="preview-dokumen dokumen-cv" style="display: none;">
                                <a href=""></a>
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
                modalEditAsesor.modal('show')
                modalEditAsesor.find('.loading').show()
                e.preventDefault()
                id = $(this).data('id')
                modalEditAsesor.find("[name='id']").val(id)
                $.ajax({
                    type: "GET",
                    url: "<?= site_url('resource/asesor/') ?>" + id,
                    dataType: "json",
                })
                .done(function(response) {
                    modalEditAsesor.find("[name='id']").val(response.data.id)
                    modalEditAsesor.find("[name='nama']").val(response.data.nama)
                    modalEditAsesor.find("[name='tempat_lahir']").val(response.data.tempat_lahir)
                    modalEditAsesor.find("[name='tanggal_lahir']").val(response.data.tanggal_lahir)
                    modalEditAsesor.find("[name='no_blanko']").val(response.data.no_blanko)
                    modalEditAsesor.find("[name='no_reg_sertifikat']").val(response.data.no_reg_sertifikat)
                    modalEditAsesor.find("[name='no_met_sertifikat']").val(response.data.no_met_sertifikat)
                    modalEditAsesor.find("[name='kompetensi_teknis']").val(response.data.kompetensi_teknis)
                    modalEditAsesor.find("[name='tanggal_sertifikat']").val(response.data.tanggal_sertifikat)
                    modalEditAsesor.find("[name='tanggal_expired_sertifikat']").val(response.data.tanggal_expired_sertifikat)

                    if (response.data.sertifikat_asesor_filename )
                    modalEditAsesor.find(".document-sertifikat_asesor a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.sertifikat_asesor_filename}
                        `
                    )
                    modalEditAsesor.find(".document-sertifikat_asesor a").attr('href', response.data.sertifikat_asesor)
                    modalEditAsesor.find(".document-sertifikat_asesor").show()

                    if (response.data.portofolio_filename )
                    modalEditAsesor.find(".document-portofolio a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.portofolio_filename}
                        `
                    )
                    modalEditAsesor.find(".document-portofolio a").attr('href', response.data.portofolio)
                    modalEditAsesor.find(".document-portofolio").show()

                    if (response.data.cv_filename )
                    modalEditAsesor.find(".document-cv a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.cv_filename}
                        `
                    )
                    modalEditAsesor.find(".document-cv a").attr('href', response.data.cv)
                    modalEditAsesor.find(".document-cv").show()

                    
                    modalEditAsesor.find(".image-pas_foto img").attr('src', response.data.pas_foto)
                    modalEditAsesor.find(".image-pas_foto").show()
                    modalEditAsesor.find(".image-ktp img").attr('src', response.data.ktp)
                    modalEditAsesor.find(".image-ktp").show()

                    modalEditAsesor.find(".loading").hide()
                })
            })

            $(".btn-delete").unbind('click').click(function (e) {
                e.preventDefault()
                if (confirm('Anda yakin?')) {
                    id = $(this).data('id')
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('resource/asesor/') ?>" + id,
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

        let modalNewPersonil = $("#modal-new-personil")
        $(".btn-new-personil").click(function (e) {
            e.preventDefault()
            modalNewPersonil.modal('show')
        })

        modalNewPersonil.on('shown.bs.modal', function() {
            refreshJabatan()
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

        modalEditAsesor = $("#modal-edit-asesor")
        modalEditAsesor.on('shown.bs.modal', function() {
            modalEditAsesor.find("[name='pas_foto']").change(function (e) {
                const pasFotoReader = new FileReader()
                pasFotoReader.readAsDataURL(this.files[0])
                pasFotoReader.onload = function (e) {
                    console.log(e)
                    modalEditAsesor.find(".image-pas_foto img").attr('src', e.target.result)
                    modalEditAsesor.find(".image-pas_foto").show()
                }
            })
            modalEditAsesor.find("[name='ktp']").change(function (e) {
                const pasFotoReader = new FileReader()
                pasFotoReader.readAsDataURL(this.files[0])
                pasFotoReader.onload = function (e) {
                    console.log(e)
                    modalEditAsesor.find(".image-ktp img").attr('src', e.target.result)
                    modalEditAsesor.find(".image-ktp").show()
                }
            })
            modalEditAsesor.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalEditAsesor.find('.loading').show()
                modalEditAsesor.find(".error-message").hide()
                id = modalEditAsesor.find("[name='id']").val()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/asesor/') ?>" + id,
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
                            modalEditAsesor.find('.error-' + field).html(message).show()
                        })
                    } else {
                        modalEditAsesor.find('form')[0].reset()
                        modalEditAsesor.modal('hide')
                        modalEditAsesor.find(".error-message").hide()
                        modalEditAsesor.find(".preview-image").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalEditAsesor.find('.loading').hide()
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
        $(".filter-jabatan").change(function (e) {
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
            // modalEditPersonil.css('z-index', '1020')
        })
        modalJabatan.on('hidden.bs.modal', function (e) {
            modalNewPersonil.css('z-index', '1050')
            $("body").addClass('modal-open')
            // modalEditPersonil.css('z-index', '1050')
        })
        modalJabatan.on('shown.bs.modal', function (e) {
            refreshJabatan()
        })
    })
</script>

<?= $this->endSection(); ?>
