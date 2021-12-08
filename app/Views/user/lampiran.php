<?= $this->extend(
    'templates/sidebar'
); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid mt-4">

        <!--Begin::Dashboard 1-->

        <!--Begin::Row-->
        <div class="row">
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <span class="kt-portlet__head-icon">
                                <i class="kt-font-brand flaticon2-line-chart"></i>
                            </span>
                            <h3 class="kt-portlet__head-title">

                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <button class="btn btn-sm btn-success btn-add" data-toggle="modal" data-target="#modal">Tambah</button>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="table-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Keterangan</th>
                                    <th>Lampiran1</th>
                                    <th>Lampiran2</th>
                                    <th>Lampiran3</th>
                                    <th>Lampiran4</th>
                                    <th>Lampiran5</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                        </table>

                        <!--end: Datatable -->
                    </div>
                </div>
            </div>
        </div>

        <!--End::Row-->

        <!--End::Dashboard 1-->
    </div>

    <!-- end:: Content -->
</div>

<!--begin::Modal-->
<form id="form" method="post">
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-7" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="modal-title-default">-</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group row">
                        <div class="col-lg-8">
                            <div class="input-group input-group-alternative">
                                <input type="hidden" name="foto" id="foto">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="upload_foto" name="upload_foto" accept="image/*" onchange="encodeImageFileAsURL(this, '#foto')">
                                    <label class="custom-file-label" for="customFileLang">Pilih Foto</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group focused preview_foto">
                                <label class="form-control-label">Preview <span id="r_preview_foto" style="cursor: pointer;">(x)</span></label><br>
                                <img id="preview_foto" src="#" alt="Preview Foto" width="100px" height="120px" style="object-fit: cover;" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="id">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="password" name="password" maxlength="100" minlength="5">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="nama" maxlength="100">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" name="jabatan">
                                <option value="">Pilih salah satu</option>
                                <option value="Asesor">Asesor</option>
                                <option value="Kepala Asesor">Kepala Asesor</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="email" maxlength="100">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>No Telepon</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="no_telepon" maxlength="20">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <div class="input-group input-group-alternative">
                            <textarea class="form-control" name="alamat" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>No Registrasi BNSP</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="no_registrasi" maxlength="100">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>No Sertifikat</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="no_sertifikat" maxlength="100">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Exp Sertifikat</label>
                        <div class="input-group input-group-alternative">
                            <input type="text" name="tanggal_exp_sertifikat" class="form-control datepicker" id="tanggal_exp_sertifikat">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>No Blanko</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="no_blanko" maxlength="100">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
    <input type="hidden" name="method">

</form>

<!--end::Modal-->

</div>
<script src="<?= base_url() ?>/public/datatables/datatables.bundle.js" type="text/javascript"></script>
<script>
    var page = 'user/lampiran';
    $(document).ready(function() {

        $('#tanggal_exp_sertifikat').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            orientation: "bottom left",
            autoclose: true
        });

        $('.preview_foto').hide();

        $("#r_preview_foto").click(function() {
            $("#upload_foto").replaceWith($("#upload_foto").val('').clone(true));
            $('.preview_foto').hide();
            $('#foto').val('');
        });

        $("#table-1").DataTable({
            responsive: true,
            ajax: {
                url: "<?= base_url() ?>" + page + "/dataAll",
                type: "GET",
                error: function(request, status, err) {
                    Swal.fire({
                        title: "Pengambilan data gagal!",
                        text: "Silakan coba kembali.",
                        type: "error",
                        allowOutsideClick: false,
                    });
                }
            },
            initComplete: function(settings, json) {
                $(this).DataTable().on('order.dt search.dt', function() {
                    $(this).DataTable().column(0, {
                        search: 'applied',
                        order: 'applied'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            },
            columnDefs: [{
                targets: [0],
                className: "dt-center"
            }, ],
            columns: [{
                    width: "7%",
                    data: null
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        var no_image = "'<?= base_url('assets/media/img/no_image.jpg') ?>'";
                        return '<div class="kt-user-card-v2"><div class="kt-user-card-v2__pic"><img src="' + data.foto + '" alt="' + data.nama + '" onerror="this.onerror=null;this.src=' + no_image + '"></div></div>';
                    },
                },
                {
                    data: "username",
                    render: $.fn.dataTable.render.text()
                },
                {
                    data: "nama",
                    render: $.fn.dataTable.render.text()
                },
                {
                    data: "email",
                    render: $.fn.dataTable.render.text()
                },
                {
                    data: "no_telepon",
                    render: $.fn.dataTable.render.text()
                },
                {
                    data: "no_registrasi",
                    render: $.fn.dataTable.render.text()
                },
                {
                    data: "no_sertifikat",
                    render: $.fn.dataTable.render.text()
                },
                {
                    data: "tanggal_exp_sertifikat",
                    render: $.fn.dataTable.render.text()
                },
                {
                    data: "no_blanko",
                    render: $.fn.dataTable.render.text()
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        var status = '<span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-default"> Tidak Ada</span></span>';

                        if (data.tanggal_exp_sertifikat <= "<?= date('Y-m-d') ?>") {
                            status = '<span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-danger"> Sertifikat Expired</span></span>';
                        } else {
                            status = '<span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-success"> Sertifikat Berlaku</span></span>';
                        }

                        return status;
                    },
                },
                {
                    data: null,
                    render: function(data, type, row) {
                        return '<a href="<?= base_url('master/assesor/detail/') ?>' + data.id + '" class="btn btn-sm btn-primary" data-id="' + data.id + '">Ruang Lingkup</a> ' +
                            '<button class="btn btn-sm btn-info btn-edit" data-toggle="modal" data-target="#modal" data-id="' + data.id + '">Edit</button> ' +
                            '<button class="btn btn-sm btn-danger btn-delete" data-id="' + data.id + '">Hapus</button>';
                    },
                },
            ]
        });

        $('body').on('click', '.btn-edit', function() {
            validator.resetForm();
            var id = $(this).data("id");
            $.ajax({
                type: "GET",
                url: "<?= base_url() ?>" + page + "/dataBy/" + id,
                dataType: "json",
                beforeSend: function() {
                    Swal.fire({
                        title: "",
                        text: "Tunggu Sebentar...",
                        allowOutsideClick: false,
                        showConfirmButton: false,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                        },
                    });
                },
                success: function(response) {
                    if (response.success) {
                        $('#modal-title-default').text('Edit Data');
                        $('input[name=id]').attr('readonly', true);
                        $('input[name=method]').val('edit');
                        $('input[name=id]').val(response.data.username);
                        $('input[name=nama]').val(response.data.nama);
                        $('input[name=email]').val(response.data.email);
                        $('textarea[name=alamat]').val(response.data.alamat);
                        $('input[name=no_telepon]').val(response.data.no_telepon);
                        $('input[name=no_registrasi]').val(response.data.no_registrasi);
                        $('input[name=no_sertifikat]').val(response.data.no_sertifikat);
                        $('input[name=tanggal_exp_sertifikat]').val(response.data.tanggal_exp_sertifikat);
                        $('input[name=no_blanko]').val(response.data.no_blanko);
                        $('select[name=jabatan]').val(response.data.jabatan);
                        if (response.data.foto) {
                            $('.preview_foto').show();
                            $("#preview_foto").attr("src", response.data.foto);
                            $('input[name=foto]').val(response.data.foto);
                        } else {
                            $('.preview_foto').hide();
                        }
                        swal.close();
                    } else {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Pengambilan data gagal dilakukan, silakan coba kembali.",
                            type: "error",
                            allowOutsideClick: false,
                        });
                    }
                },
                error: function(e) {
                    Swal.fire({
                        title: "Gagal!",
                        text: "Pengambilan data gagal dilakukan, silakan coba kembali.",
                        type: "error",
                        allowOutsideClick: false,
                    });
                }
            });
        });

        $('body').on('click', '.btn-add', function() {
            $('#form').trigger("reset");
            $('#modal-title-default').text('Tambah Data');
            $('input[name=id]').attr('readonly', false);
            $('input[name=method]').val('add');
            $('.preview_foto').hide();
            validator.resetForm();
        });

        var validator = $('#form').validate({
            errorElement: 'span',
            errorClass: 'help-block',
            focusInvalid: true,
            ignore: "",
            rules: {
                id: {
                    required: true,
                    maxlength: 100
                },
                password: {
                    required: function() {
                        return $("input[name=method]").val() == "add";
                    },
                    maxlength: 100
                },
                nama: {
                    required: true,
                    maxlength: 100
                },
                email: {
                    required: true,
                    maxlength: 100
                },
                jabatan: {
                    required: true
                },
            },
            invalidHandler: function(event, validator) {
                Swal.fire({
                    title: "Gagal!",
                    text: " Inputkan data dengan benar.",
                    type: "warning",
                    allowOutsideClick: false,
                });
            },
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            submitHandler: function(form) {
                var method = $('input[name=method]').val();
                var string = '';

                if (method == 'edit') {
                    string = 'Perubahan';
                } else {
                    string = 'Penambahan';
                }

                $.ajax({
                    type: "POST",
                    url: "<?= base_url() ?>" + page + "/" + method,
                    data: $('#form').serialize(),
                    dataType: "json",
                    beforeSend: function() {
                        Swal.fire({
                            title: "",
                            text: "Tunggu Sebentar...",
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            onBeforeOpen: () => {
                                Swal.showLoading()
                            },
                        });
                    },
                    success: function(response) {
                        if (response.success) {
                            $("#table-1").DataTable().ajax.reload();
                            Swal.fire({
                                icon: 'success',
                                title: "Berhasil!",
                                text: string + " berhasil.",
                                allowOutsideClick: false,
                            });

                            $('#modal').modal('toggle');
                            reset();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: "Gagal!",
                                text: string + " data gagal dilakukan, silakan coba kembali.",
                                allowOutsideClick: false,
                            });
                        }
                    },
                    error: function(e) {
                        Swal.fire({
                            icon: 'error',
                            title: "Gagal!",
                            text: string + " data gagal dilakukan, silakan coba kembali.",
                            allowOutsideClick: false,
                        });
                        reset();
                    }
                });
            }
        });

        $('body').on('click', '.btn-delete', function() {
            var id = $(this).data("id");
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Penghapusan tidak bisa dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "GET",
                        url: "<?= base_url() ?>" + page + "/delete/" + id,
                        dataType: "json",
                        beforeSend: function() {
                            Swal.fire({
                                title: "",
                                text: "Tunggu Sebentar...",
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                onBeforeOpen: () => {
                                    Swal.showLoading()
                                },
                            });
                        },
                        success: function(response) {
                            if (response.success) {
                                $("#table-1").DataTable().ajax.reload();
                                Swal.fire({
                                    title: "Berhasil!",
                                    text: "Penghapusan data berhasil dilakukan.",
                                    type: "success",
                                    allowOutsideClick: false,
                                });
                            } else {
                                Swal.fire({
                                    title: "Gagal!",
                                    text: "Penghapusan data gagal dilakukan, silakan coba kembali.",
                                    type: "error",
                                    allowOutsideClick: false,
                                });
                            }
                        },
                        error: function(e) {
                            Swal.fire({
                                title: "Gagal!",
                                text: "Penghapusan data gagal dilakukan, silakan coba kembali.",
                                type: "error",
                                allowOutsideClick: false,
                            });
                        }
                    });
                }
            })
        });

        $("#upload_foto").change(function() {
            loadImage(this, '#preview_foto');
            $('.preview_foto').show();
        });

    });

    function loadImage(input, id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(id).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function encodeImageFileAsURL(element, id) {
        var file = element.files[0];
        var reader = new FileReader();
        reader.onloadend = function() {
            $(id).val(reader.result);
        }
        reader.readAsDataURL(file);
    }

    function reset() {
        $('#form').trigger("reset");
        $('input[name=foto], input[name=upload_foto]').val('');
        $('.custom-file-label').text('');
    }
</script>

<?= $this->endSection(); ?>