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
                                                <form action="<?= site_url('export/mitra_kerja/spreadsheet') ?>" method="post">
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
                                    <input type="date" id="new-mitra_kerja-tanggal" class="form-control" name="tanggal_mou" placeholder="Tuliskan Nomor SK TUK...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_mou" style="display: none;"></div>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header bg-success">
                <h6 class="modal-title font-weight-bold mb-0 text-white">Edit data Mitra Kerja</h6>
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
                    <input type="hidden" name="id">
                    <input type="hidden" name="_method" value="PATCH">
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
                                    <input type="date" id="new-mitra_kerja-tanggal" class="form-control" name="tanggal_mou" placeholder="Tuliskan Nomor SK TUK...">
                                </div>
                                <div class="text-xs text-danger font-weight-bold font-italic error-message error-tanggal_mou" style="display: none;"></div>
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
                                <span class="text-muted text-xs font-italic">Abaikan jika tidak ingin merubah daftar dokumen</span>
                                <input type="hidden" name="dokumen_edit">
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
                modalEditMitraKerja.modal('show')
                modalEditMitraKerja.find('.loading').show()
                e.preventDefault()
                id = $(this).data('id')
                modalEditMitraKerja.find("[name='id']").val(id)
                $.ajax({
                    type: "GET",
                    url: "<?= site_url('resource/mitra_kerja/') ?>" + id,
                    dataType: "json",
                })
                .done(function(response) {
                    modalEditMitraKerja.find("[name='id']").val(response.data.id)
                    modalEditMitraKerja.find("[name='nama']").val(response.data.nama)
                    modalEditMitraKerja.find("[name='tanggal_mou']").val(response.data.tanggal_mou)
                    modalEditMitraKerja.find("[name='nomor_mou']").val(response.data.nomor_mou)
                    modalEditMitraKerja.find("[name='keterangan']").val(response.data.keterangan)
                    modalEditMitraKerja.find("[name='dokumen_edit']").val(response.data.dokumen.join('|'))
                    if (response.data.dokumen_filename != '') {
                        let fileNames = response.data.dokumen_filename
                        let files = response.data.dokumen
                        function refreshFileList() {
                            fileListHtml = ''
                            fileNames.forEach(function (file, index) {
                                fileListHtml += `
                                <li class="list-group-item d-flex align-items-center justify-content-between">
                                <span class="text">${file}</span>
                                <div class="d-flex align-items-center">
                                <span class="text mr-3"><a href="${response.data.dokumen[index]}" target="_blank"><i class="fas fa-download"></i></a></span>
                                <span class="btn-delete-file badge badge-danger" data-index="${index}" style="cursor: pointer"><i class="fas fa-times"></i></span>
                                </div>
                                </li>
                                `
                            })
                            modalEditMitraKerja.find('.file-list').html(fileListHtml).show()
                            modalEditMitraKerja.find('.file-list .btn-delete-file').unbind().click(function (e) {
                                if (confirm('Anda yakin?')) {
                                    index = $(this).data('index')
                                    fileNames.splice(index, 1)
                                    files.splice(index, 1)
                                    modalEditMitraKerja.find("[name='dokumen_edit']").val(files.join('|'))
                                    refreshFileList()
                                }
                            })
                        }
                        refreshFileList()
                    }
                })
                .always(function() {
                    modalEditMitraKerja.find('.loading').hide()
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

        let modalEditMitraKerja = $("#modal-edit-mitra_kerja")
        modalEditMitraKerja.on('shown.bs.modal', function() {
            let dokumenFileBuffer = []
            modalEditMitraKerja.find("[name='dokumen[]']").change(function () {
                dokumenFileBuffer = []
                fileListHtml = '';
                if (this.files.length > 0) {
                    modalEditMitraKerja.find('.file-list').show()
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
                    modalEditMitraKerja.find('.file-list').html(fileListHtml)
                    modalEditMitraKerja.find('.btn-delete-file').unbind('click').click(function(e) {
                        if (confirm('Hapus file dokumen untuk di upload?'))
                        index = $(this).data('index')
                        const dataTransfer = new DataTransfer()
                        dokumenFileBuffer.forEach(function(file, id) {
                            if (id != index) dataTransfer.items.add(file)
                        })
                        modalEditMitraKerja.find("[name='dokumen[]']")[0].files = dataTransfer.files
                        modalEditMitraKerja.find("[name='dokumen[]']").trigger('change')
                    })
                }
                else {
                    modalEditMitraKerja.find('.file-list').hide()
                }
            })

            modalEditMitraKerja.find('form').unbind('submit').submit(function (e) {
                e.preventDefault()
                id = modalEditMitraKerja.find("[name='id']").val()
                modalEditMitraKerja.find('.loading').show()
                modalEditMitraKerja.find(".error-message").hide()
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
                            console.log(error)
                            modalEditMitraKerja.find('.error-' + field).html(message).show()
                        })
                    } else {
                        dokumenFileBuffer = []
                        modalEditMitraKerja.find('.file-list').hide()
                        modalEditMitraKerja.find('form')[0].reset()
                        modalEditMitraKerja.modal('hide')
                        modalEditMitraKerja.find(".error-message").hide()
                        refreshData()
                    }
                })
                .always(function() {
                    modalEditMitraKerja.find('.loading').hide()
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
