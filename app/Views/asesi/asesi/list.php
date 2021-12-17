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
                                    <a href="#" class="btn btn-success rounded-circle btn-new-asesi">
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
                                            <select name="skema_sertifikasi" class="form-control form-control-sm filter-skema_sertifikasi_id" id="filter-skema_sertifikasi_id">
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
                                        <form action="<?= site_url('export/asesi/spreadsheet') ?>" method="post">
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
                                    <th class="align-middle text-center">
                                        TTL
                                        <span class="ml-2 text-warning btn-sort" data-field="tempat_lahir" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        NIK
                                        <span class="ml-2 text-warning btn-sort" data-field="nik" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        Pekerjaan
                                        <span class="ml-2 text-warning btn-sort" data-field="pekerjaan" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        Pendidikan Terakhir
                                        <span class="ml-2 text-warning btn-sort" data-field="pendidikan_terakhir" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        Email
                                        <span class="ml-2 text-warning btn-sort" data-field="email" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        No Telepon
                                        <span class="ml-2 text-warning btn-sort" data-field="no_telepon" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        Tanggal Uji
                                        <span class="ml-2 text-warning btn-sort" data-field="tanggal_uji" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        Asesor
                                        <span class="ml-2 text-warning btn-sort" data-field="asesor_kompetensi" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">TUK</th>
                                    <th class="align-middle text-center">Skema Sertifikasi</th>
                                    <th class="align-middle text-center">
                                        No Blanko
                                        <span class="ml-2 text-warning btn-sort" data-field="no_blanko" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        No Sertifikat
                                        <span class="ml-2 text-warning btn-sort" data-field="no_sertifikat" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">
                                        Tanggal Sertifikat
                                        <span class="ml-2 text-warning btn-sort" data-field="tanggal_sertifikat" data-sort="asc" style="cursor: pointer">
                                            <i class="fas fa-sort-amount-down-alt"></i>
                                        </span>
                                    </th>
                                    <th class="align-middle text-center">Dokumen</th>
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

<div class="modal fade" id="modal-new-asesi">
    <div class="modal-dialog modal-xl">
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
                                <label for="new-asesi-nama" class="text-sm mb-0 font-weight-bold">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                    </div>
                                    <input type="text" id="new-asesi-nama" class="form-control" name="nama" placeholder="Tuliskan nama lengkap asesor...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-tempat_lahir" class="text-sm mb-0 font-weight-bold">Tempat & Tanggal Lahir</label>
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
                                <label for="new-asesi-nik" class="text-sm mb-0 font-weight-bold">NIK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-id-card"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="nik" placeholder="Tuliskan nomor NIK..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nik" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-pekerjaan" class="text-sm mb-0 font-weight-bold">Pekerjaan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-briefcase"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Tuliskan Pekerjaan..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-pekerjaan" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-pendidikan_terakhir" class="text-sm mb-0 font-weight-bold">Pendidikan Terakhir</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-university"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Tuliskan Pendidikan terakhir..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-pendidikan_terakhir" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-email" class="text-sm mb-0 font-weight-bold">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" id="new-asesi-email" class="form-control" name="email" placeholder="Tuliskan email..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-email" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-no_telepon" class="text-sm mb-0 font-weight-bold">Nomor Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <input type="text" id="new-asesi-no_telepon" class="form-control" name="no_telepon" placeholder="tuliskan nomor telepon">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_telepon" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-alamat" class="text-sm mb-0 font-weight-bold">Alamat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                    <textarea name="alamat" id="new-asesi-alamat" class="form-control"></textarea>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-alamat" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="text-xs text-uppercase font-weight-bold" style="color: #c5c5c5">Asesi</div>
                            <hr class="mt-0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-asesor_kompetensi" class="text-sm mb-0 font-weight-bold">Asesor Kompetensi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-check-square"></i></span>
                                    </div>
                                    <select name="asesor_kompetensi" id="new-asesi-asesor_kompetensi" class="form-control">
                                        <option value="">- Pilih asesor -</option>
                                        <?php foreach($dataAsesor as $asesor) : ?>
                                            <option value="<?= $asesor->id ?>"><?= $asesor->nama ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-asesor_kompetensi" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-tuk" class="text-sm mb-0 font-weight-bold">TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span>
                                    </div>
                                    <select name="tuk" id="new-asesi-tuk" class="form-control">
                                        <option value="">- Pilih TUK -</option>
                                        <?php foreach($dataTuk as $tuk) : ?>
                                            <option value="<?= $tuk->id ?>"><?= $tuk->nama ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tuk" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-tanggal_uji" class="text-sm mb-0 font-weight-bold">Tanggal Uji</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="tanggal_uji">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_uji" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-skema_sertifikasi" class="text-sm mb-0 font-weight-bold">Skema Sertifikasi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                                    </div>
                                    <select name="skema_sertifikasi" id="new-asesi-skema_sertifikasi" class="form-control">
                                        <option value="">- Pilih Skema -</option>
                                    </select>
                                </div>
                                <div class="text-xs text-muted font-weight-bold font-italic">
                                    Tidak ada skema? <a href="#" class="btn-new-skema">Tambah skema sertifikasi</a>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-skema_sertifikasi" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-no_blanko" class="text-sm mb-0 font-weight-bold">Nomor Blanko</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="new-asesi-no_blanko" name="no_blanko" placeholder="Tuliskan nomor blanko...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_blanko" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-no_sertifikat" class="text-sm mb-0 font-weight-bold">Nomor Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="new-asesi-no_sertifikat" name="no_sertifikat" placeholder="Tuliskan nomor sertifikat...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_sertifikat" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-tanggal_sertifikat" class="text-sm mb-0 font-weight-bold">Tanggal Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="new-asesi-tanggal_sertifikat" name="tanggal_sertifikat">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_sertifikat" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-asesi-tanggal_expired_sertifikat" class="text-sm mb-0 font-weight-bold">Tanggal Expired Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="tanggal_expired_sertifikat" id="new-asesi-tanggal_expired_sertifikat">
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
                                <label for="new-asesi-foto" class="text-sm mb-0 font-weight-bold">Foto</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="image/*" id="new-asesi-foto" class="form-control pt-1" name="foto">
                                </div>
                                <div class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-foto" style="display: none;"></div>
                            </div>
                            <div class="preview-image image-foto mb-2" style="display:none">
                                <img class="img-thumbnail" style="max-width: 150px" src="<?= site_url('img/img_unavailable.png') ?>">
                            </div> 
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-asesi-portofolio" class="text-sm mb-0 font-weight-bold">Portofolio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-asesi-portofolio" class="form-control pt-1" name="portofolio">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-portofolio" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-asesi-muk" class="text-sm mb-0 font-weight-bold">MUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-asesi-muk" class="form-control pt-1" name="muk">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-muk" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="new-asesi-sertifikat_kompetensi" class="text-sm mb-0 font-weight-bold">Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="new-asesi-sertifikat_kompetensi" class="form-control pt-1" name="sertifikat_kompetensi">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (doc/docx/pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sertifikat_kompetensi" style="display: none;"></div>
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

<div class="modal fade" id="modal-skema">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Skema Sertifikasi</h4>
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
                                <label for="new-skema-nama">Nama Skema Sertifikasi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="nama" placeholder="Tuliskan nama skema...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                            <div class="form-group d-flex">
                                <button data-dismiss="modal" class="btn btn-light mr-2">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary flex-grow-1">
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    Tambah Skema
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
                                    <th class="align-middle text-center">#</th>
                                    <th class="align-middle text-center">Nama</th>
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

<div class="modal fade" id="modal-edit-asesi">
    <div class="modal-dialog modal-xl">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Edit data Asesi</h6>
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
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-nama" class="text-sm mb-0 font-weight-bold">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                    </div>
                                    <input type="text" id="edit-asesi-nama" class="form-control" name="nama" placeholder="Tuliskan nama lengkap asesor...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-tempat_lahir" class="text-sm mb-0 font-weight-bold">Tempat & Tanggal Lahir</label>
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
                                <label for="edit-asesi-nik" class="text-sm mb-0 font-weight-bold">NIK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-id-card"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="nik" placeholder="Tuliskan nomor NIK..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nik" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-pekerjaan" class="text-sm mb-0 font-weight-bold">Pekerjaan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-briefcase"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Tuliskan Pekerjaan..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-pekerjaan" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-pendidikan_terakhir" class="text-sm mb-0 font-weight-bold">Pendidikan Terakhir</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-university"></i> 
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Tuliskan Pendidikan terakhir..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-pendidikan_terakhir" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-email" class="text-sm mb-0 font-weight-bold">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" id="edit-asesi-email" class="form-control" name="email" placeholder="Tuliskan email..">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-email" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-no_telepon" class="text-sm mb-0 font-weight-bold">Nomor Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <input type="text" id="edit-asesi-no_telepon" class="form-control" name="no_telepon" placeholder="tuliskan nomor telepon">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_telepon" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-alamat" class="text-sm mb-0 font-weight-bold">Alamat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                    <textarea name="alamat" id="edit-asesi-alamat" class="form-control"></textarea>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-alamat" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="text-xs text-uppercase font-weight-bold" style="color: #c5c5c5">Asesi</div>
                            <hr class="mt-0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-asesor_kompetensi" class="text-sm mb-0 font-weight-bold">Asesor Kompetensi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-check-square"></i></span>
                                    </div>
                                    <select name="asesor_kompetensi" id="edit-asesi-asesor_kompetensi" class="form-control">
                                        <option value="">- Pilih asesor -</option>
                                        <?php foreach($dataAsesor as $asesor) : ?>
                                            <option value="<?= $asesor->id ?>"><?= $asesor->nama ?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-asesor_kompetensi" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-tuk" class="text-sm mb-0 font-weight-bold">TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span>
                                    </div>
                                    <select name="tuk" id="edit-asesi-tuk" class="form-control">
                                        <option value="">- Pilih TUK -</option>
                                        <?php foreach($dataTuk as $tuk) : ?>
                                            <option value="<?= $tuk->id ?>"><?= $tuk->nama ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tuk" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-tanggal_uji" class="text-sm mb-0 font-weight-bold">Tanggal Uji</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="tanggal_uji">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_uji" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-skema_sertifikasi" class="text-sm mb-0 font-weight-bold">Skema Sertifikasi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-scroll"></i></span>
                                    </div>
                                    <select name="skema_sertifikasi" id="edit-asesi-skema_sertifikasi" class="form-control">
                                        <option value="">- Pilih Skema -</option>
                                    </select>
                                </div>
                                <div class="text-xs text-muted font-weight-bold font-italic">
                                    Tidak ada skema? <a href="#" class="btn-new-skema">Tambah skema sertifikasi</a>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-skema_sertifikasi" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-no_blanko" class="text-sm mb-0 font-weight-bold">Nomor Blanko</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="edit-asesi-no_blanko" name="no_blanko" placeholder="Tuliskan nomor blanko...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_blanko" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-no_sertifikat" class="text-sm mb-0 font-weight-bold">Nomor Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-id-card-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="edit-asesi-no_sertifikat" name="no_sertifikat" placeholder="Tuliskan nomor sertifikat...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_sertifikat" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-tanggal_sertifikat" class="text-sm mb-0 font-weight-bold">Tanggal Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="edit-asesi-tanggal_sertifikat" name="tanggal_sertifikat">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_sertifikat" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-asesi-tanggal_expired_sertifikat" class="text-sm mb-0 font-weight-bold">Tanggal Expired Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="tanggal_expired_sertifikat" id="edit-asesi-tanggal_expired_sertifikat">
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
                                <label for="edit-asesi-foto" class="text-sm mb-0 font-weight-bold">Foto</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="image/*" id="edit-asesi-foto" class="form-control pt-1" name="foto">
                                </div>
                                <div class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-foto" style="display: none;"></div>
                            </div>
                            <div class="preview-image image-foto mb-2" style="display:none">
                                <img class="img-thumbnail" style="max-width: 150px" src="<?= site_url('img/img_unavailable.png') ?>">
                            </div> 
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="edit-asesi-portofolio" class="text-sm mb-0 font-weight-bold">Portofolio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="edit-asesi-portofolio" class="form-control pt-1" name="portofolio">
                                </div>
                                <div class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-portofolio" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-portofolio" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="edit-asesi-muk" class="text-sm mb-0 font-weight-bold">MUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="edit-asesi-muk" class="form-control pt-1" name="muk">
                                </div>
                                <div class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-muk" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-muk" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group mb-0">
                                <label for="edit-asesi-sertifikat_kompetensi" class="text-sm mb-0 font-weight-bold">Sertifikat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept=".doc,.docx,.pdf,.ppt,.pptx" id="edit-asesi-sertifikat_kompetensi" class="form-control pt-1" name="sertifikat_kompetensi">
                                </div>
                                <div class="text-muted text-xs font-italic">Upload file gambar. Ukuran Max: 6MB<br/>Abaikan jika tidak ingin merubah</div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sertifikat_kompetensi" style="display: none;"></div>
                            </div>
                            <div class="preview-document document-sertifikat_kompetensi" style="display: none;">
                                <a target="_blank" href=""></a>
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


<div class="modal fade" id="modal-detail-asesi">
    <div class="modal-dialog modal-xl">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Detail data Asesi</h6>
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
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold ml-3">
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
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold ml-3">
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
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold ml-3">
                                    <i class="fas fa-id-card-cake mr-2"></i>  
                                    NIK
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-nik border-left-default"></h4>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold ml-3">
                                    <i class="fas fa-briefcase mr-2"></i>  
                                    Pekerjaan
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-pekerjaan border-left-default"></h4>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-nama" class="text-sm mb-0 font-weight-bold ml-3">
                                    <i class="fas fa-university mr-2"></i>  
                                    Pendidikan Terakhir
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-pendidikan_terakhir border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-personil-email" class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-envelope mr-2"></i>  
                                    Email
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-email border-left-default"></h4>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-phone-alt mr-2"></i>  
                                    Nomor telepon
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-no_telepon border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-map-marked-alt mr-2"></i>  
                                    Alamat
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-alamat border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="text-xs text-uppercase font-weight-bold" style="color: #c5c5c5">Asesi</div>
                            <hr class="mt-0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-user-check mr-2"></i>  
                                    Asesor Kompetensi
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-asesor_kompetensi border-left-default"></h4>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-chalkboard-teacher mr-2"></i>  
                                    TUK
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-tuk border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-calendar mr-2"></i>  
                                    Tanggal Uji
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-tanggal_uji border-left-default"></h4>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-scroll mr-2"></i>  
                                    Skema Sertifikasi
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-skema_sertifikasi border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-phone-alt mr-2"></i>  
                                    Nomor Blanko
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-no_blanko border-left-default"></h4>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-id-card-alt mr-2"></i>  
                                    Nomor Sertifikat
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-no_sertifikat border-left-default"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-calendar mr-2"></i>  
                                    Tanggal Sertifikat
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-tanggal_sertifikat border-left-default"></h4>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label class="text-sm mb-0 font-weight-bold ml-2">
                                    <i class="fas fa-calendar mr-2"></i>  
                                    Tanggal Expired Sertifikat
                                </label>
                                <h4 class="py-1 mt-1 pl-3 text-primary fill-tanggal_expired_sertifikat border-left-default"></h4>
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
                            <label for="edit-asesi-foto" class="text-sm mb-0 font-weight-bold ml-2">Foto</label>
                            <div class="preview-image image-foto mb-2" style="display:none">
                                <img class="img-thumbnail" style="max-width: 150px" src="<?= site_url('img/img_unavailable.png') ?>">
                            </div> 
                        </div>
                        <div class="col-md">
                            <label for="edit-asesi-portofolio" class="text-sm mb-0 font-weight-bold ml-2">Portofolio</label>
                            <div class="preview-document document-portofolio" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="edit-asesi-muk" class="text-sm mb-0 font-weight-bold ml-2">MUK</label>
                            <div class="preview-document document-muk" style="display: none;">
                                <a target="_blank" href=""></a>
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="edit-asesi-sertifikat_kompetensi" class="text-sm mb-0 font-weight-bold ml-2">Sertifikat</label>
                            <div class="preview-document document-sertifikat_kompetensi" style="display: none;">
                                <a target="_blank" href=""></a>
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
                modalEditAsesi.modal('show')
                modalEditAsesi.find('.loading').show()
                e.preventDefault()
                id = $(this).data('id')
                modalEditAsesi.find("[name='id']").val(id)
                $.ajax({
                    type: "GET",
                    url: "<?= site_url('resource/asesi/') ?>" + id,
                    dataType: "json",
                })
                .done(function(response) {
                    modalEditAsesi.find("[name='id']").val(response.data.id)
                    modalEditAsesi.find("[name='nama']").val(response.data.nama)
                    modalEditAsesi.find("[name='tempat_lahir']").val(response.data.tempat_lahir)
                    modalEditAsesi.find("[name='tanggal_lahir']").val(response.data.tanggal_lahir)
                    modalEditAsesi.find("[name='nik']").val(response.data.nik)
                    modalEditAsesi.find("[name='pekerjaan']").val(response.data.pekerjaan)
                    modalEditAsesi.find("[name='pendidikan_terakhir']").val(response.data.pendidikan_terakhir)
                    modalEditAsesi.find("[name='email']").val(response.data.email)
                    modalEditAsesi.find("[name='no_telepon']").val(response.data.no_telepon)
                    modalEditAsesi.find("[name='alamat']").val(response.data.alamat)
                    modalEditAsesi.find("[name='asesor_kompetensi']").val(response.data.asesor_kompetensi)
                    modalEditAsesi.find("[name='tuk']").val(response.data.tuk)
                    modalEditAsesi.find("[name='tanggal_uji']").val(response.data.tanggal_uji)
                    modalEditAsesi.find("[name='no_blanko']").val(response.data.no_blanko)
                    modalEditAsesi.find("[name='no_sertifikat']").val(response.data.no_sertifikat)
                    modalEditAsesi.find("[name='tanggal_sertifikat']").val(response.data.tanggal_sertifikat)
                    modalEditAsesi.find("[name='tanggal_expired_sertifikat']").val(response.data.tanggal_expired_sertifikat)

                    refreshSkema(function () {
                        modalEditAsesi.find("[name='skema_sertifikasi']").val(response.data.skema_sertifikasi)
                    })

                    if (response.data.portofolio_filename)
                    modalEditAsesi.find(".document-portofolio a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.portofolio_filename}
                        `
                    )
                    modalEditAsesi.find(".document-portofolio a").attr('href', response.data.portofolio)
                    modalEditAsesi.find(".document-portofolio").show()

                    if (response.data.sertifikat_kompetensi_filename)
                    modalEditAsesi.find(".document-sertifikat_kompetensi a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.sertifikat_kompetensi_filename}
                        `
                    )
                    modalEditAsesi.find(".document-sertifikat_kompetensi a").attr('href', response.data.sertifikat_kompetensi)
                    modalEditAsesi.find(".document-sertifikat_kompetensi").show()

                    if (response.data.muk_filename)
                    modalEditAsesi.find(".document-muk a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.muk_filename}
                        `
                    )
                    modalEditAsesi.find(".document-muk a").attr('href', response.data.muk)
                    modalEditAsesi.find(".document-muk").show()

                    
                    modalEditAsesi.find(".document-cv a").attr('href', response.data.cv)
                    modalEditAsesi.find(".document-cv").show()

                    
                    modalEditAsesi.find(".image-foto img").attr('src', response.data.foto)
                    modalEditAsesi.find(".image-foto").show()

                    modalEditAsesi.find(".image-ktp img").attr('src', response.data.ktp)
                    modalEditAsesi.find(".image-ktp").show()

                    modalEditAsesi.find(".loading").hide()
                })
            })

            $(".btn-delete").unbind('click').click(function (e) {
                e.preventDefault()
                if (confirm('Anda yakin?')) {
                    id = $(this).data('id')
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('resource/asesi/') ?>" + id,
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
                modalDetailAsesi.modal('show')
                modalDetailAsesi.find('.loading').show()
                e.preventDefault()
                id = $(this).data('id')
                modalDetailAsesi.find("[name='id']").val(id)
                $.ajax({
                    type: "GET",
                    url: "<?= site_url('resource/asesi/') ?>" + id,
                    dataType: "json",
                })
                .done(function(response) {
                    modalDetailAsesi.find(".fill-id").html(response.data.id)
                    modalDetailAsesi.find(".fill-nama").html(response.data.nama)
                    modalDetailAsesi.find(".fill-tempat_lahir").html(response.data.tempat_lahir)
                    modalDetailAsesi.find(".fill-tanggal_lahir").html(response.data.tanggal_lahir)
                    modalDetailAsesi.find(".fill-nik").html(response.data.nik)
                    modalDetailAsesi.find(".fill-pekerjaan").html(response.data.pekerjaan)
                    modalDetailAsesi.find(".fill-pendidikan_terakhir").html(response.data.pendidikan_terakhir)
                    modalDetailAsesi.find(".fill-email").html(response.data.email)
                    modalDetailAsesi.find(".fill-no_telepon").html(response.data.no_telepon)
                    modalDetailAsesi.find(".fill-alamat").html(response.data.alamat)
                    modalDetailAsesi.find(".fill-tanggal_uji").html(response.data.tanggal_uji)
                    modalDetailAsesi.find(".fill-no_blanko").html(response.data.no_blanko)
                    modalDetailAsesi.find(".fill-no_sertifikat").html(response.data.no_sertifikat)
                    modalDetailAsesi.find(".fill-tanggal_sertifikat").html(response.data.tanggal_sertifikat)
                    modalDetailAsesi.find(".fill-tanggal_expired_sertifikat").html(response.data.tanggal_expired_sertifikat)
                    
                    if (response.data.tuk_nama != null) modalDetailAsesi.find(".fill-tuk").html(response.data.tuk_nama)
                    else modalDetailAsesi.find(".fill-tuk").html(response.data.tuk)
                    
                    if (response.data.asesor_nama != null) modalDetailAsesi.find(".fill-asesor_kompetensi").html(response.data.asesor_nama)
                    else modalDetailAsesi.find(".fill-asesor_kompetensi").html(response.data.asesor_kompetensi)

                    if (response.data.skema_sertifikasi_nama != null) modalDetailAsesi.find(".fill-skema_sertifikasi").html(response.data.skema_sertifikasi_nama)
                    else modalDetailAsesi.find(".fill-asesor_kompetensi").html(response.data.skema_sertifikasi)

                    if (response.data.portofolio_filename)
                    modalDetailAsesi.find(".document-portofolio a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.portofolio_filename}
                        `
                    )
                    modalDetailAsesi.find(".document-portofolio a").attr('href', response.data.portofolio)
                    modalDetailAsesi.find(".document-portofolio").show()

                    if (response.data.sertifikat_kompetensi_filename)
                    modalDetailAsesi.find(".document-sertifikat_kompetensi a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.sertifikat_kompetensi_filename}
                        `
                    )
                    modalDetailAsesi.find(".document-sertifikat_kompetensi a").attr('href', response.data.sertifikat_kompetensi)
                    modalDetailAsesi.find(".document-sertifikat_kompetensi").show()

                    if (response.data.muk_filename)
                    modalDetailAsesi.find(".document-muk a").html(
                        `
                        <i class='fas fa-download mr-2'></i>
                        ${response.data.muk_filename}
                        `
                    )
                    modalDetailAsesi.find(".document-muk a").attr('href', response.data.muk)
                    modalDetailAsesi.find(".document-muk").show()

                    
                    modalDetailAsesi.find(".document-cv a").attr('href', response.data.cv)
                    modalDetailAsesi.find(".document-cv").show()

                    
                    modalDetailAsesi.find(".image-foto img").attr('src', response.data.foto)
                    modalDetailAsesi.find(".image-foto").show()

                    modalDetailAsesi.find(".image-ktp img").attr('src', response.data.ktp)
                    modalDetailAsesi.find(".image-ktp").show()

                    modalDetailAsesi.find(".loading").hide()
                })
            })
        }
        refreshData()

        let modalNewAsesi = $("#modal-new-asesi")
        $(".btn-new-asesi").click(function (e) {
            e.preventDefault()
            modalNewAsesi.modal('show')
        })

        modalNewAsesi.on('shown.bs.modal', function() {
            modalNewAsesi.find("[name='foto']").change(function(e) {
                const pasFoto = new FileReader()
                pasFoto.readAsDataURL(this.files[0])
                pasFoto.onload = function (e) {
                    modalNewAsesi.find(".image-foto img").attr('src', e.target.result)
                    modalNewAsesi.find(".image-foto").show()
                }
            })

            modalNewAsesi.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalNewAsesi.find('.loading').show()
                modalNewAsesi.find(".error-message").hide()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/asesi') ?>",
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
                            modalNewAsesi.find('.error-' + field).html(message).show()
                        })
                    } else {
                        modalNewAsesi.find('form')[0].reset()
                        modalNewAsesi.modal('hide')
                        modalNewAsesi.find(".error-message").hide()
                        modalNewAsesi.find(".preview-image").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalNewAsesi.find('.loading').hide()
                })
            })
        })

        modalDetailAsesi = $("#modal-detail-asesi")
        modalEditAsesi = $("#modal-edit-asesi")
        modalEditAsesi.on('shown.bs.modal', function() {
            modalEditAsesi.find("[name='foto']").change(function (e) {
                const pasFotoReader = new FileReader()
                pasFotoReader.readAsDataURL(this.files[0])
                pasFotoReader.onload = function (e) {
                    modalEditAsesi.find(".image-foto img").attr('src', e.target.result)
                    modalEditAsesi.find(".image-foto").show()
                }
            })
            modalEditAsesi.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                modalEditAsesi.find('.loading').show()
                modalEditAsesi.find(".error-message").hide()
                id = modalEditAsesi.find("[name='id']").val()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/asesi/') ?>" + id,
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
                            modalEditAsesi.find('.error-' + field).html(message).show()
                        })
                    } else {
                        modalEditAsesi.find('form')[0].reset()
                        modalEditAsesi.modal('hide')
                        modalEditAsesi.find(".error-message").hide()
                        modalEditAsesi.find(".preview-image").hide()
                        modalEditAsesi.find(".preview-document").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalEditAsesi.find('.loading').hide()
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





        function refreshSkema(callback) {
            $.ajax({
                type: "GET",
                url: "<?= site_url('resource/skema_sertifikasi') ?>",
                dataType: "json",
            })
            .done(function(response) {
                if (response.status == 'success') {
                    optionView = "<option value=''>- Pilih Skema -</option>"
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
                                    <a href='#' data-id='${item.id}' class='btn btn-sm btn-delete-skema text-danger btn-link'>
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        `
                    })
                    $("[name='skema_sertifikasi']").html(optionView)
                    modalSkema.find("tbody").html(tableView)
                    onLoadSkema()
                    callback = 0 || callback
                    if (callback) callback()
                }
            })
        }
        refreshSkema()
        function onLoadSkema() {
            modalSkema.find('.btn-delete-skema').unbind('click').click(function (e) {
                e.preventDefault()
                if (confirm('Anda yakin?')) {       
                    id = $(this).data('id')
                    modalSkema.find('.loading').show()
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('resource/skema_sertifikasi/') ?>" + id,
                        dataType: "json",
                        data: {
                            _method: 'DELETE',
                            ['<?= csrf_token() ?>']: '<?= csrf_hash() ?>'
                        }
                    })
                    .done(function (response) {
                        refreshSkema()
                    })
                    .always(function () {
                        modalSkema.find('.loading').hide()
                    })
                }
            })
            modalSkema.find('form').unbind('submit').submit(function(e) {
                e.preventDefault()
                if (confirm('Tambahkan data skema?')) {
                    modalSkema.find('.loading').show()
                    formData = new FormData(this)
                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('resource/skema_sertifikasi') ?>",
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
                                modalSkema.find('.error-' + field).html(message).show()
                            })
                        } else {
                            refreshSkema(function () {
                                $("[name='skema_sertifikasi']").val(response.data.id)
                            })
                            modalSkema.find('.error-message').hide()
                            modalSkema.find('form')[0].reset()
                            modalSkema.modal('hide')
                        }
                    })
                    .always(function () {
                        modalSkema.find('.loading').hide()
                    })
                }
            })
        }

        modalSkema = $("#modal-skema")
        $(".btn-new-skema").click(function (e) {
            e.preventDefault()
            modalSkema.modal('show')
        })
        modalSkema.on('show.bs.modal', function (e) {
            modalNewAsesi.css('z-index', '1020')
            modalEditPersonil.css('z-index', '1020')
        })
        modalSkema.on('hidden.bs.modal', function (e) {
            modalNewAsesi.css('z-index', '1050')
            $("body").addClass('modal-open')
            modalEditPersonil.css('z-index', '1050')
        })
        modalSkema.on('shown.bs.modal', function (e) {
            refreshSkema()
        })
    })
</script>

<?= $this->endSection(); ?>
