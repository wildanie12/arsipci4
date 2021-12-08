<?= $this->extend(
    'templates/sidebar'
); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 mt-5 text-gray-800 text-center text-md-center font-weight-bold"><?=$ui_title?></h1>
    <h1 class="h4 mb-1 mt-1 text-gray-800 text-center text-md-center">Expired Certificate</h1>
    <!-- <button type="button" class="btn btn-success btn-add">Tambah Data</button> -->

    <div class="row">
        <div class="col table-responsive">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="table-1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Opsi</th>
                        <th>Foto</th>
                        <th>Nama Asesi</th>
                        <!-- <th>Alamat</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>NIK</th>
                        <th>Pekerjaan</th>
                        <th>Pendidikan Terakhir</th> -->
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Tanggal Uji</th>
                        <th>Asesor Kompetensi</th>
                        <th>TUK</th>
                        <th>Skema Sertifikasi</th>
                        <th>No Blanko</th>
                        <th>No Sertifikat</th>
                        <th>Tanggal Sertifikat</th>
                        <!-- <th>Tanggal Expired Sertifikat</th> -->
                    </tr>
                </thead>
            </table>

            <!--end: Datatable -->
        </div>
    </div>
</div>


<form id="form" method="post">
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-7" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal-title-default">
                        <span class="fill-judul_modal">Tambah</span>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group row">
                        <!-- <div class="col-lg-8">
                            <div class="input-group input-group-alternative">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input input-gambar-a" name="foto" accept="image/*">
                                    <label class="custom-file-label form-control" for="customFileLang">Pilih Foto</label>
                                </div><br/>
                            </div>
                            <div class="text-muted font-italic text-xs">Gunakan ukuran foto dengan rasio 3x4</div>
                        </div> -->
                        <div class="col-lg-4">
                            <div class="form-group focused preview_foto">
                                <img id="preview_foto" src="<?=site_url('img/img_unavailable.png')?>" alt="Preview Foto" width="100px" height="120px" style="object-fit: cover;"  class="fill-gambar-a"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id">
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="nama" maxlength="100">
                        </div>
                    </div>
                    
                    <!-- <div class="form-group">
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
                    </div> -->
                    <div class="form-group">
                        <label>Tanggal Uji</label>
                        <div class="input-group input-group-alternative">
                            <input type="date" name="tanggal_uji" class="form-control datepicker" id="tanggal_uji">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Asesor Kompetensi</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="asesor_kompetensi" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>TUK</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="tuk" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Skema Sertifikasi</label>
                        <div class="input-group input-group-alternative">
                            <select class="form-control" name="skema_sertifikasi">
                                <option value="">Pilih salah satu</option>
                                <option value="Human Capital Staff">Human Capital Staff</option>
                                <option value="Human Capital Supervisor">Human Capital Supervisor</option>
                                <option value="Human Capital Manager">Human Capital Manager</option>
                                <option value="Human Capital Senior Manager">Human Capital Senior Manager</option>
                                <option value="Pengelolaan Administrasi SDM">Pengelolaan Administrasi SDM</option>
                                <option value="Pelaksanaan Rekrutmen">Pelaksanaan Rekrutmen</option>
                                <option value="Perancangan Sistem Pengupahan">Perancangan Sistem Pengupahan</option>
                                <option value="Penyusun Persyaratan Kerja">Penyusun Persyaratan Kerja</option>
                                <option value="Pengelolaan HI di Perusahaan">Pengelolaan HI di Perusahaan</option>
                                <option value="Pencegahan Perselisihan HI di Perusahaan">Pencegahan Perselisihan HI di Perusahaan</option>
                                <option value="Analis Pengukuran Produktivitas">Analis Pengukuran Produktivitas</option>
                                <option value="Administrative Officer">Administrative Officer</option>
                                <option value="Administrative Assistant">Administrative Assistant</option>
                                <option value="Executive Administrative Assistant">Executive Administrative Assistant</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>No Blanko</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="no_blanko" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>No Sertifikat</label>
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="no_sertifikat" maxlength="100">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Sertifikat</label>
                        <div class="input-group input-group-alternative">
                            <input type="date" name="tanggal_sertifikat" class="form-control datepicker" id="tanggal_sertifikat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Expired Sertifikat</label>
                        <div class="input-group input-group-alternative">
                            <input type="date" name="tanggal_expired_sertifikat" class="form-control datepicker" id="tanggal_expired_sertifikat">
                        </div>
                    </div>
                    <!--  -->

                </div>

                <div class="modal-footer">
                    <div class="row errors" style="display: none">
                        <div class="col text-center">
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

            </div>
        </div>
    </div>
    <input type="hidden" name="method">

</form>


<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0">Detail data asesi</h4>
                <button class="close" data-dismiss="modal" type="button">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row border-1 mb-2">
                            <div class="col">
                                <h4><span class="fill-nama">Nama namamnama</span></h4>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <h5><span class="fill-tempat_lahir">tempat_lahir</span>, <span class="fill-tanggal_lahir">tanggal_lahir</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>Tanggal Uji</label>
                                <h5><span class="fill-tanggal_uji">tanggal_uji</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>Asesor Kompetensi</label>
                                <h5><span class="fill-asesor_kompetensi">asesor_kompetensi</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>TUK</label>
                                <h5><span class="fill-tuk">tuk</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>Tanggal Sertifikat</label>
                                <h5><span class="fill-tanggal_sertifikat">tanggal_sertifikat</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>NIK</label>
                                <h5><span class="fill-nik">nik</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>Pekerjaan</label>
                                <h5><span class="fill-pekerjaan">pekerjaan</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>Pendidikan Terakhir</label>
                                <h5><span class="fill-pendidikan_terakhir">pendidikan_terakhir</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>E-Mail</label>
                                <h5><span class="fill-email">email</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>Alamat</label>
                                <h5><span class="fill-alamat">alamat</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>No Telepon</label>
                                <h5><span class="fill-no_telepon">no_telepon</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>No Registrasi</label>
                                <h5><span class="fill-no_registrasi">no_registrasi</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>No Sertifikat</label>
                                <h5><span class="fill-no_sertifikat">no_sertifikat</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>Tanggal expired sertifikat</label>
                                <h5><span class="fill-tanggal_expired_sertifikat">tanggal_expired_sertifikat</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>No Blanko</label>
                                <h5><span class="fill-no_blanko">no_blanko</span></h5>
                            </div>
                        </div>
                        <div class="row border-1 border-bottom mb-3">
                            <div class="col">
                                <label>Skema Sertifikasi</label>
                                <h5><span class="fill-skema_sertifikasi">skema_sertifikasi</span></h5>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="col-sm-4">
                        <h5><strong>Foto</strong></h5>  
                        <img class="img-thumbnail fill-foto" src="<?=site_url('img/img_unavailable.png')?>" alt="">

                        
                        
                    </div>
                </div>
                <div class="row border-1 border-bottom mb-3">
                    <div class="col">   
                        <h5><strong>MUK</strong></h5>  
                        <img style="width: 100%" class="img-thumbnail fill-muk" src="<?=site_url('img/img_unavailable.png')?>" alt="">
                    </div>
                </div>

                <div class="row border-1 border-bottom mb-3">
                    <div class="col">   
                        <h5><strong>Portofolio</strong></h5>  
                        <img style="width: 100%" class="img-thumbnail fill-portofolio" src="<?=site_url('img/img_unavailable.png')?>" alt="">
                    </div>
                </div>

                <div class="row border-1 border-bottom mb-3">
                    <div class="col">   
                        <h5><strong>Sertifikat Kompetensi</strong></h5>  
                        <img style="width: 100%" class="img-thumbnail fill-sertifikat_kompetensi" src="<?=site_url('img/img_unavailable.png')?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>



<?= $this->section('js_script')?>

<script>
    $('#tanggal_expired_sertifikat').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        orientation: "bottom left",
        autoclose: true
    });
    $('#tanggal_uji').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        orientation: "bottom left",
        autoclose: true
    });
    $('#tanggal_lahir').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        orientation: "bottom left",
        autoclose: true
    });
    $('#tanggal_sertifikat').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        orientation: "bottom left",
        autoclose: true
    });

    


    table = $("#table-1").DataTable({
        responsive: true,
        ajax: {
            url: "<?= site_url('surveilance/ajax_list') ?>",
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
        columns: [
            
            {
                width: "1%",
                data: null
            },
            {
                data: null,
                render: function(data, type, row) {
                    return '<a href="#"  ' +
                        '<button class="btn btn-sm btn-info btn-edit" data-id="' + data.id + '">Update</button> ' 
                        ;
                },
            },
            {
                data: null,
                render: function(data, type, row) {
                    var no_image = "'<?= site_url('assets/media/img/no_image.jpg') ?>'";
                    return '<div class="rounded-circle" style="width: 80px; height: 80px; overflow:hidden"><img style="width: 100%" src="' + data.foto + '" alt="' + data.nama + '"></div></div>';
                },
            },

            {
                data: "nama",
                render: $.fn.dataTable.render.text()
            },
            // {
            //     data: "alamat",
            //     render: $.fn.dataTable.render.text()
            // },
            // {
            //     data: "tempat_lahir",
            //     render: $.fn.dataTable.render.text()
            // },
            // {
            //     data: "tanggal_lahir",
            //     render: $.fn.dataTable.render.text()
            // },
            // {
            //     data: "nik",
            //     render: $.fn.dataTable.render.text()
            // },
            // {
            //     data: "pekerjaan",
            //     render: $.fn.dataTable.render.text()
            // },
            // {
            //     data: "pendidikan_terakhir",
            //     render: $.fn.dataTable.render.text()
            // },
            {
                data: "email",
                render: $.fn.dataTable.render.text()
            },
            {
                data: "no_telepon",
                render: $.fn.dataTable.render.text()
            },
            {
                data: "tanggal_uji",
                render: $.fn.dataTable.render.text()
            },
            {
                data: "asesor_kompetensi",
                render: $.fn.dataTable.render.text()
            },
            {
                data: "tuk",
                render: $.fn.dataTable.render.text()
            },
            {
                data: "skema_sertifikasi",
                render: $.fn.dataTable.render.text()
            },
            {
                data: "no_blanko",
                render: $.fn.dataTable.render.text()
            },
            {
                data: "no_sertifikat",
                render: $.fn.dataTable.render.text()
            },
            {
                data: "tanggal_sertifikat",
                render: $.fn.dataTable.render.text()
            },
            // {
            //     data: "tanggal_expired_sertifikat",
            //     render: $.fn.dataTable.render.text()
            // }
        ]
    });

    var operationMode = 'tambah'
    $(".btn-add").click(function (e) {
        operationMode = 'tambah'
        $(".fill-judul").html('Tambah data')
        $("#form")[0].reset()
        
        $("#modal").modal('show')

        $(".fill-gambar-a").attr('src', "<?=site_url('img/img_unavailable.png')?>")
        $(".fill-gambar-b").attr('src', "<?=site_url('img/img_unavailable.png')?>")
        $(".fill-gambar-c").attr('src', "<?=site_url('img/img_unavailable.png')?>")
        $(".fill-gambar-d").attr('src', "<?=site_url('img/img_unavailable.png')?>")
    })         


    $("#form").submit(function (e) {
        e.preventDefault()
        id = $("input[name='id']").val()
        url = operationMode == 'tambah' ? "<?=site_url('surveilance/ajax_create')?>" : "<?=site_url('surveilance/ajax_modify/')?>" + id;
        formData = new FormData(this);
        
        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            dataType: "json",
            contentType: false,
            processData: false,
            cache: false,
            success: (response) => {
                if (response.success) {
                    $("#table-1").DataTable().ajax.reload()
                    $("#modal").modal('hide')
                    $("#form")[0].reset()
                    $(".fill-gambar-a").attr('src', "<?=site_url('img/img_unavailable.png')?>")
                    $(".fill-gambar-b").attr('src', "<?=site_url('img/img_unavailable.png')?>")
                    $(".fill-gambar-c").attr('src', "<?=site_url('img/img_unavailable.png')?>")
                    $(".fill-gambar-d").attr('src', "<?=site_url('img/img_unavailable.png')?>")
                    Swal.fire({
                        icon: 'success',
                        title: "Berhasil!",
                        text: string + " berhasil.",
                        allowOutsideClick: false,
                    });
                }
                else {
                    $(".errors").show()
                    $(".errors span").html(response.error)
                }
            },
        });
    })
    $('body').on('click', '.btn-detail', function(e) {
        e.preventDefault()
        $("#modal-detail").modal('show')
        id = $(this).data('id')
        operationMode = 'edit'
        $.ajax({
            type: "get",
            url: "<?=site_url('surveilance/ajax_single')?>",
            data: {id: id},
            dataType: "json",
            success: function (response) {
                $(".fill-nama").html(response.nama)
                $(".fill-tempat_lahir").html(response.tempat_lahir)
                $(".fill-tanggal_lahir").html(response.tanggal_lahir)
                $(".fill-tanggal_uji").html(response.tanggal_uji)
                $(".fill-asesor_kompetensi").html(response.asesor_kompetensi)
                $(".fill-tuk").html(response.tuk)
                $(".fill-tanggal_sertifikat").html(response.tanggal_sertifikat)
                $(".fill-nik").html(response.nik)
                $(".fill-pekerjaan").html(response.pekerjaan)
                $(".fill-pendidikan_terakhir").html(response.pendidikan_terakhir)
                $(".fill-email").html(response.email)
                $(".fill-alamat").html(response.alamat)
                $(".fill-no_telepon").html(response.no_telepon)
                $(".fill-no_registrasi").html(response.no_registrasi)
                $(".fill-no_sertifikat").html(response.no_sertifikat)
                $(".fill-tanggal_expired_sertifikat").html(response.tanggal_expired_sertifikat)
                $(".fill-no_blanko").html(response.no_blanko)
                $(".fill-skema_sertifikasi").html(response.skema_sertifikasi)

                $(".fill-foto").attr('src', response.foto)
                $(".fill-muk").attr('src', response.muk)
                $(".fill-portofolio").attr('src', response.portofolio)
                $(".fill-sertifikat_kompetensi").attr('src', response.sertifikat_kompetensi)
            }
        })
    })


    $('body').on('click', '.btn-edit', function() {
        id = $(this).data('id')
        operationMode = 'edit'
        $.ajax({
            type: "get",
            url: "<?=site_url('surveilance/ajax_single')?>",
            data: {id: id},
            dataType: "json",
            success: function (response) {
                $("#modal").modal('show')
                $('#modal .fill-judul').text('Edit Data');
                $('input[name=id]').attr('readonly', true);
                $('input[name=method]').val('edit');
                $('input[name=id]').val(response.id);
                $('input[name=nama]').val(response.nama);
                $('input[name=tempat_lahir]').val(response.tempat_lahir);
                $('input[name=tanggal_lahir]').val(response.tanggal_lahir);
                $('input[name=tanggal_uji]').val(response.tanggal_uji);
                $('input[name=asesor_kompetensi]').val(response.asesor_kompetensi);
                $('input[name=tuk]').val(response.tuk);
                $('input[name=tanggal_sertifikat]').val(response.tanggal_sertifikat);
                $('input[name=nik]').val(response.nik);
                $('input[name=pekerjaan]').val(response.pekerjaan);
                $('input[name=pendidikan_terakhir]').val(response.pendidikan_terakhir);
                $('input[name=email]').val(response.email);
                $('textarea[name=alamat]').val(response.alamat);
                $('input[name=no_telepon]').val(response.no_telepon);
                $('input[name=no_registrasi]').val(response.no_registrasi);
                $('input[name=no_sertifikat]').val(response.no_sertifikat);
                $('input[name=tanggal_expired_sertifikat]').val(response.tanggal_expired_sertifikat);
                $('input[name=no_blanko]').val(response.no_blanko);
                $('select[name=skema_sertifikasi]').val(response.skema_sertifikasi);

                $(".fill-gambar-a").attr('src', response.foto)
                $(".fill-gambar-b").attr('src', response.muk)
                $(".fill-gambar-c").attr('src', response.portofolio)
                $(".fill-gambar-d").attr('src', response.sertifikat_kompetensi)

                $('input[name=upload_muk]').val(response.upload_muk);
                $('input[name=upload_portofolio]').val(response.upload_portofolio);
                $('input[name=upload_sertifikat_kompetensi]').val(response.upload_sertifikat_kompetensi);
            }
        });
    })

    $('body').on('click', '.btn-delete', function() {
        if (confirm('apakah anda yakin?')) {
            id = $(this).data('id')
            $.ajax({
                type: "POST",
                url: "<?=site_url('surveilance/ajax_delete')?>",
                data: {id: id},
                dataType: "json",
                success: function (response) {
                    $("#table-1").DataTable().ajax.reload()
                    Swal.fire({
                        icon: 'success',
                        title: "Berhasil!",
                        text: string + " berhasil.",
                        allowOutsideClick: false,
                    });
                }
            });
        }
    })

</script>

<?= $this->endSection(); ?>
