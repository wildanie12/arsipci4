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
                                Manajemen <br/>Data Asesi
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
                                        <div class="col-md-12">
                                            <div class="form-group mb-0 text-center" style="padding-bottom: 1px;">
                                                <label for="filter-limit" class="mb-0 font-weight-bold text-xs">Cari berdasarkan</label><br/>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-nama" value="nama" class="filter-berdasarkan custom-control-input" checked>
                                                    <label for="filter-berdasarkan-nama" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">Nama</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-alamat" value="alamat" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-alamat" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">Alamat</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-nik" value="nik" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-nik" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">NIK</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-email" value="email" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-email" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">Email</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-no_telepon" value="no_telepon" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-no_telepon" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">No Telepon</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-no_blanko" value="no_blanko" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-no_blanko" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">No Blanko</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-no_sertifikat" value="no_sertifikat" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-no_sertifikat" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">No Sertifikat</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <label for="filter-tanggal_uji" class="mb-0 font-weight-bold text-xs">Tanggal Uji</label>
                                                <div class="input-group input-group">
                                                    <input type="date" class="form-control form-control-sm filter-tanggal_uji_awal" id="filter-tanggal_uji">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-xs">sampai</span>
                                                    </div>
                                                    <input type="date" class="form-control form-control-sm filter-tanggal_uji_akhir">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group mb-0">
                                                <label for="filter-tanggal_sertifikat" class="mb-0 font-weight-bold text-xs">Tanggal Sertifikat</label>
                                                <div class="input-group input-group">
                                                    <input type="date" class="form-control form-control-sm filter-tanggal_sertifikat_awal" id="filter-tanggal_sertifikat">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-xs">sampai</span>
                                                    </div>
                                                    <input type="date" class="form-control form-control-sm filter-tanggal_sertifikat_akhir">
                                                </div> 
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
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group mb-0">
                                        <label for="filter-asesor" class="mb-0 font-weight-bold text-xs">Asesor</label>
                                        <div class="input-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-check-square"></i></span>
                                            </div>
                                            <select class="form-control form-control-sm filter-asesor_id" id="filter-asesor_id">
                                                <option value="">- Pilih Asesor -</option>
                                                <?php foreach ($dataAsesor as $asesor) : ?>
                                                    <option value="<?= $asesor->id ?>"><?= $asesor->nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group mb-0">
                                        <label for="filter-tuk" class="mb-0 font-weight-bold text-xs">TUK</label>
                                        <div class="input-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                            </div>
                                            <select class="form-control form-control-sm filter-tuk_id" id="filter-tuk_id">
                                                <option value="">- Pilih TUK -</option>
                                                <?php foreach ($dataTuk as $tuk) : ?>
                                                    <option value="<?= $tuk->id ?>"><?= $tuk->nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group mb-0">
                                        <label for="filter-skema_sertifikasi_id" class="mb-0 font-weight-bold text-xs">Skema Sertifikasi</label>
                                        <div class="input-group input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                                            </div>
                                            <select class="form-control form-control-sm filter-skema_sertifikasi_id" id="filter-skema_sertifikasi_id">
                                                <option value="">- Pilih Skema -</option>
                                                <?php foreach ($dataTuk as $tuk) : ?>
                                                    <option value="<?= $tuk->id ?>"><?= $tuk->nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md">
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
                                <div class="col-md d-flex justify-content-center align-items-end">
                                    <div class="form-group mb-0 flex-grow-1">
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
                                    <th class="align-middle"></th>
                                    <th class="align-middle">#</th>
                                    <th class="align-middle" style="white-space: nowrap;">
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
                                    <th class="align-middle">
                                        NIK
                                        <span class="ml-2 text-warning btn-sort" data-field="nik" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle">
                                        Pekerjaan
                                        <span class="ml-2 text-warning btn-sort" data-field="pekerjaan" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle">
                                        Pendidikan Terakhir
                                        <span class="ml-2 text-warning btn-sort" data-field="pendidikan_terakhir" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th>
                                        Email
                                        <span class="ml-2 text-warning btn-sort" data-field="email" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th>
                                        No Telepon
                                        <span class="ml-2 text-warning btn-sort" data-field="no_telepon" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th>
                                        Tanggal Uji
                                        <span class="ml-2 text-warning btn-sort" data-field="tanggal_uji" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th>
                                        Asesor
                                        <span class="ml-2 text-warning btn-sort" data-field="asesor_kompetensi" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th>TUK</th>
                                    <th>Skema Sertifikasi</th>
                                    <th>
                                        No Blanko
                                        <span class="ml-2 text-warning btn-sort" data-field="no_blanko" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th>
                                        No Sertifikat
                                        <span class="ml-2 text-warning btn-sort" data-field="no_sertifikat" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th>
                                        Tanggal Sertifikat
                                        <span class="ml-2 text-warning btn-sort" data-field="tanggal_sertifikat" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th>Dokumen</th>
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
                            <div class="preview-image image-pas_foto mb-2" style="display:none">
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
                                <div class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB <br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sertifikat_asesor" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-sertifikat_asesor" style="display: none;">
                                <a target="_blank" href=""></a>
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
                                <div class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB <br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-portofolio" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-portofolio" style="display: none;">
                                <a target="_blank" href=""></a>
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
                            <div class="preview-image image-pas_foto mb-2" style="display:none">
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
            view_content: 'asesi/ajax/table',
            view_pagination: 'asesi/ajax/pagination'
        }
        function refreshData(url) {
            url = 0 || url
            if (!url) url = "<?= site_url('resource/asesi') ?>"
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
                    modalNewAsesor.find(".image-pas_foto img").attr('src', e.target.result)
                    modalNewAsesor.find(".image-pas_foto").show()
                }
            })
            modalNewAsesor.find("[name='ktp']").change(function (e) {
                const ktpReader = new FileReader()
                ktpReader.readAsDataURL(this.files[0])
                ktpReader.onload = function (e) {
                    modalNewAsesor.find(".image-ktp img").attr('src', e.target.result)
                    modalNewAsesor.find(".image-ktp").show()
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
                        modalNewAsesor.find(".preview-image").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalNewAsesor.find('.loading').hide()
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
        $(".filter-tanggal_uji_awal").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.tanggal_uji_awal = value
            } else {
                delete dataParams.tanggal_uji_awal
            }
            refreshData()
        })
        $(".filter-tanggal_uji_akhir").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.tanggal_uji_akhir = value
            } else {
                delete dataParams.tanggal_uji_akhir
            }
            refreshData()
        })
        $(".filter-tanggal_sertifikat_awal").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.tanggal_sertifikat_awal = value
            } else {
                delete dataParams.tanggal_sertifikat_awal
            }
            refreshData()
        })
        $(".filter-tanggal_sertifikat_akhir").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.tanggal_sertifikat_akhir = value
            } else {
                delete dataParams.tanggal_sertifikat_akhir
            }
            refreshData()
        })
        $(".filter-asesor_id").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.asesor_id = value
            } else {
                delete dataParams.asesor_id
            }
            refreshData()
        })
        $(".filter-tuk_id").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.tuk_id = value
            } else {
                delete dataParams.tuk_id
            }
            refreshData()
        })
        $(".filter-skema_sertifikasi_id").change(function (e) {
            value = $(this).val()
            if (value != '') {
                dataParams.skema_sertifikasi_id = value
            } else {
                delete dataParams.skema_sertifikasi_id
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
