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
                                        <div class="col">
                                            <div class="form-group mb-0 text-center" style="padding-bottom: 1px;">
                                                <label for="filter-limit" class="mb-0 font-weight-bold text-xs">Cari berdasarkan</label><br/>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-nama" value="nama" class="filter-berdasarkan custom-control-input" checked>
                                                    <label for="filter-berdasarkan-nama" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">Nama TUK</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-no_sk" value="no_sk" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-no_sk" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">No. SK</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-ketua" value="ketua" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-ketua" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">Ketua TUK</label>
                                                </div>
                                                <div class="custom-control custom-control-inline custom-radio">
                                                    <input type="radio" name="berdasarkan" id="filter-berdasarkan-alamat" value="alamat" class="filter-berdasarkan custom-control-input">
                                                    <label for="filter-berdasarkan-alamat" class="custom-control-label text-xs font-weight-bold text-primary" style="line-height: 25px;">Alamat TUK</label>
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
                                </div>
                                <div class="col-md-auto">
                                    <a href="#" class="btn btn-success rounded-circle btn-new-tuk">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
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
                                    <th class="align-middle" style="width: 20%">Nama</th>
                                    <th class="align-middle">No SK</th>
                                    <th class="align-middle" style="width: 10%">Ketua</th>
                                    <th class="align-middle">No Telepon</th>
                                    <th class="align-middle" style="width: 35%">Dokumen</th>
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

<div class="modal fade" id="modal-new-tuk">
    <div class="modal-dialog modal-lg">
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
                <form>
                    <?= csrf_field() ?>
                    <!-- <input type="hidden" name="_method" value="POST"> -->
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-nama" class="text-sm mb-0 font-weight-bold">Nama TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                    </div>
                                    <input type="text" id="new-tuk-nama" class="form-control" name="nama" placeholder="Tuliskan nama TUK...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-nama" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-no_sk" class="text-sm mb-0 font-weight-bold">Nomor SK TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                    </div>
                                    <input type="text" id="new-tuk-no_sk" class="form-control" name="no_sk" placeholder="Tuliskan Nomor SK TUK...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-no_sk" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-alamat" class="text-sm mb-0 font-weight-bold">Alamat TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                    </div>
                                    <textarea name="alamat" id="new-tuk-alamat" class="form-control"></textarea>
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-alamat" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-ketua" class="text-sm mb-0 font-weight-bold">Ketua TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                    <input type="text" id="new-tuk-ketua" class="form-control" name="ketua" placeholder="Tuliskan Ketua TUK...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-ketua" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-no_telepon" class="text-sm mb-0 font-weight-bold">Nomor Telepon TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <input type="text" id="new-tuk-no_telepon" class="form-control" name="no_telepon" placeholder="Tuliskan Nomor Telepon TUK...">
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
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-panduan_mutu" class="text-sm mb-0 font-weight-bold">Panduan Mutu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="new-tuk-panduan_mutu" class="form-control pt-1" name="panduan_mutu">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-panduan_mutu" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-sop" class="text-sm mb-0 font-weight-bold">Dokumen SOP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="new-tuk-sop" class="form-control pt-1" name="sop">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sop" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-sk_tuk" class="text-sm mb-0 font-weight-bold">Surat Keputusan TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="new-tuk-sk_tuk" class="form-control pt-1" name="sk_tuk">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sk_tuk" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-ba_verifikasi" class="text-sm mb-0 font-weight-bold">B.A. Verifikasi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="new-tuk-ba_verifikasi" class="form-control pt-1" name="ba_verifikasi">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-ba_verifikasi" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-spt_verifikator" class="text-sm mb-0 font-weight-bold">SPT Verifikator</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="new-tuk-spt_verifikator" class="form-control pt-1" name="spt_verifikator">
                                </div>
                                <span class="text-muted text-xs font-italic">(pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-spt_verifikator" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-sk_checklist_persyaratan" class="text-sm mb-0 font-weight-bold">SK Checklist Persyaratan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="new-tuk-sk_checklist_persyaratan" class="form-control pt-1" name="sk_checklist_persyaratan">
                                </div>
                                <span class="text-muted text-xs font-italic">(pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sk_checklist_persyaratan" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="new-tuk-mou" class="text-sm mb-0 font-weight-bold">Dokumen MoU</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="new-tuk-mou" class="form-control pt-1" name="mou">
                                </div>
                                <span class="text-muted text-xs font-italic">(pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-mou" style="display: none;"></div>
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
    <div class="modal-dialog modal-lg">
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
                <form>
                    <?= csrf_field() ?>
                    <!-- <input type="hidden" name="_method" value="POST"> -->
                    <div class="row">
                        <div class="col-md">
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
                        <div class="col-md">
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
                        <div class="col-md">
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
                        <div class="col-md">
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
                        <div class="col-md">
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
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-tuk-panduan_mutu" class="text-sm mb-0 font-weight-bold">Panduan Mutu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="edit-tuk-panduan_mutu" class="form-control pt-1" name="panduan_mutu">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-panduan_mutu" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-tuk-sop" class="text-sm mb-0 font-weight-bold">Dokumen SOP</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="edit-tuk-sop" class="form-control pt-1" name="sop">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sop" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-tuk-sk_tuk" class="text-sm mb-0 font-weight-bold">Surat Keputusan TUK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="edit-tuk-sk_tuk" class="form-control pt-1" name="sk_tuk">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sk_tuk" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-tuk-ba_verifikasi" class="text-sm mb-0 font-weight-bold">B.A. Verifikasi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="edit-tuk-ba_verifikasi" class="form-control pt-1" name="ba_verifikasi">
                                </div>
                                <span class="text-muted text-xs font-italic">Upload file dokumen (pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-ba_verifikasi" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-tuk-spt_verifikator" class="text-sm mb-0 font-weight-bold">SPT Verifikator</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="edit-tuk-spt_verifikator" class="form-control pt-1" name="spt_verifikator">
                                </div>
                                <span class="text-muted text-xs font-italic">(pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-spt_verifikator" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-tuk-sk_checklist_persyaratan" class="text-sm mb-0 font-weight-bold">SK Checklist Persyaratan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="edit-tuk-sk_checklist_persyaratan" class="form-control pt-1" name="sk_checklist_persyaratan">
                                </div>
                                <span class="text-muted text-xs font-italic">(pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-sk_checklist_persyaratan" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="edit-tuk-mou" class="text-sm mb-0 font-weight-bold">Dokumen MoU</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                                    </div>
                                    <input type="file" accept="application/pdf" id="edit-tuk-mou" class="form-control pt-1" name="mou">
                                </div>
                                <span class="text-muted text-xs font-italic">(pdf). Ukuran Max: 6MB</span>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-mou" style="display: none;"></div>
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
            view_content: 'tuk/ajax/table',
            view_pagination: 'tuk/ajax/pagination'
        }
        function refreshData(url) {
            url = 0 || url
            if (!url) url = "<?= site_url('resource/tuk') ?>"
            $.ajax({
                type: "GET",
                url: url,
                data: dataParams,
                dataType: "json",
            })
            .done(function (response) {
                $(".load-data").html(response.content)
                $(".load-pagination").html(response.pagination)
                onLoadedData()
            })
        }
        function onLoadedData() {
            $(".btn-pagination").click(function (e) {
                e.preventDefault()
                link = $(this).attr('href')
                refreshData(link)
            })
        }
        refreshData()

        let modalNewTUK = $("#modal-new-tuk")
        $(".btn-new-tuk").click(function (e) {
            e.preventDefault()
            modalNewTUK.modal('show')
        })

        modalNewTUK.on('shown.bs.modal', function() {
            modalNewTUK.find('form').submit(function (e) {
                e.preventDefault()
                modalNewTUK.find('.loading').show()
                formData = new FormData(this)
                $.ajax({
                    type: "POST",
                    url: "<?= site_url('resource/tuk') ?>",
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
                            modalNewTUK.find('.error-' + field).html(message).show()
                        })
                    } else {
                        modalNewTUK.find('form')[0].reset()
                        modalNewTUK.modal('hide')
                        refreshData()
                    }
                })
                .always(function() {
                    modalNewTUK.find('.loading').hide()
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
    })
</script>

<?= $this->endSection(); ?>
