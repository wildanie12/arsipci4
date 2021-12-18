<?= $this->extend('templates/sidebar'); ?>

<?= $this->section('page-content'); ?>



<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Mitra Kerja    
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $countMitraKerja ?>
                                <small style="color: #999999">Mitra</small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-handshake fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah TUK    
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $countTuk ?>
                                <small style="color: #999999">Tempat</small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-university fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Personil 
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $countPersonil ?>
                                <small style="color: #999999">Orang</small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Semua Asesor
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $countAsesor ?>
                                <small style="color: #999999">Orang</small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Asesor Internal
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $countAsesorInternal ?>
                                <small style="color: #999999">Orang</small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Asesor Eksternal
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $countAsesorEksternal ?>
                                <small style="color: #999999">Orang</small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Asesi
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $countAsesi ?>
                                <small style="color: #999999">Peserta</small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Surveilance
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $countSurveilance ?>
                                <small style="color: #999999">Peserta</small>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-sync fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md">
            <div class="card menu shadow shadow-lg">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div data-href="<?= site_url('mitra_kerja') ?>" class="menu-item col-md d-flex mr-2 ml-2 pt-2 mb-2 rounded border border-primary justify-content-center flex-column align-items-center" style="border-width: 3px !important; cursor: pointer; min-width: 150px;">
                            <i class="fas fa-handshake" style="font-size: 48px"></i>
                            <h5 class="mt-2 text-center">Mitra Kerja</h5>
                        </div>
                        <div data-href="<?= site_url('tuk') ?>" class="menu-item col-md d-flex mr-2 ml-2 pt-2 mb-2 rounded border border-warning justify-content-center flex-column align-items-center" style="border-width: 3px !important; cursor: pointer; min-width: 150px;">
                            <i class="fas fa-university text-warning" style="font-size: 48px"></i>
                            <h5 class="mt-2 text-center text-warning">T.U.K</h5>
                        </div>
                        <div data-href="<?= site_url('asesor/internal') ?>" class="menu-item col-md d-flex mr-2 ml-2 pt-2 mb-2 rounded border border-dark justify-content-center flex-column align-items-center" style="border-width: 3px !important; cursor: pointer; min-width: 150px;">
                            <i class="fas fa-user-check text-dark" style="font-size: 48px"></i>
                            <h5 class="mt-2 text-center text-dark">Asesor Internal</h5>
                        </div>
                        <div data-href="<?= site_url('asesor/eksternal') ?>" class="menu-item col-md d-flex mr-2 ml-2 pt-2 mb-2 rounded border border-success justify-content-center flex-column align-items-center" style="border-width: 3px !important; cursor: pointer; min-width: 150px;">
                            <i class="fas fa-user-check text-success" style="font-size: 48px"></i>
                            <h5 class="mt-2 text-center text-success">Asesor Eksternal</h5>
                        </div>
                        <div data-href="<?= site_url('asesor/personil') ?>" class="menu-item col-md d-flex mr-2 ml-2 pt-2 mb-2 rounded border border-danger justify-content-center flex-column align-items-center" style="border-width: 3px !important; cursor: pointer; min-width: 150px;">
                            <i class="fas fa-users text-danger" style="font-size: 48px"></i>
                            <h5 class="mt-2 text-center text-danger">Personil</h5>
                        </div>
                        <div data-href="<?= site_url('asesor/asesi') ?>" class="menu-item col-md d-flex mr-2 ml-2 pt-2 mb-2 rounded border border-warning justify-content-center flex-column align-items-center" style="border-width: 3px !important; cursor: pointer; min-width: 150px;">
                            <i class="fas fa-users text-warning" style="font-size: 48px"></i>
                            <h5 class="mt-2 text-center text-warning">Asesi</h5>
                        </div>
                        <div data-href="<?= site_url('asesor/surveilance') ?>" class="menu-item col-md d-flex mr-2 ml-2 pt-2 mb-2 rounded border border-primary justify-content-center flex-column align-items-center" style="border-width: 3px !important; cursor: pointer; min-width: 150px;">
                            <i class="fas fa-users text-primary" style="font-size: 48px"></i>
                            <h5 class="mt-2 text-center text-primary">Surveilance</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>



<?= $this->section('js_script')?>

<script>
    $(document).ready(function() {
        $(".menu-item").click(function (e) {
            e.preventDefault()
            href = $(this).data('href')
            window.location = href
        })
    })
</script>

<?= $this->endSection(); ?>
