<?php
    function limitString($string, $trim) {
        if (strlen($string) > $trim) {
            $string = substr($string, 0, $trim) . '...';
        }
        return $string;
    }
?>
<?php if (count($data) <= 0) : ?>

    <tr>
        <td class="align-middle text-center" colspan="20">
            Tidak ada data
        </td>
    </tr>

<?php endif; ?>

<?php foreach ($data as $index => $row) : ?>
    <tr>
        <td class="align-middle">
            <a href="#" data-id="<?= $row->id ?>" class="mb-1 btn btn-sm btn-primary btn-detail rounded-circle">
                <i class="fas fa-eye"></i>
            </a>
            <a href="#" data-id="<?= $row->id ?>" data-toggle='tooltip' title='<?= ($row->is_notified) ? 'Sudah dikirim pemberitahuan via email' : 'Belum dikirim pemberitahuan via email' ?>' class="mb-1 position-relative btn btn-sm btn-info btn-detail rounded-circle">
                <i class="fas fa-envelope" style="font-size: 14px;"></i>
                <?php if ($row->is_notified) : ?>
                    <i class="fas fa-check text-white" style="position: absolute; left: 16px; top: 16px; font-size: 10px;"></i>
                <?php else : ?>
                    <i class="fas fa-times text-danger" style="position: absolute; left: 16px; top: 16px; font-size: 10px;"></i>
                <?php endif; ?>
            </a>
        </td>
        <td class="align-middle"><?= (($page-1) * $limit) + ++$index ?></td>
        <td class="align-middle" style="white-space: nowrap;">
            <strong><?= $row->nama ?></strong><br/>
            <div class="font-italic text-xs" style="line-height: 16px; white-space: pre-wrap; max-width: 180px"><?= $row->alamat ?></div>
        </td>
        <td class="align-middle">
            <?= $row->tempat_lahir ?>, <?= $row->tanggal_lahir ?>
        </td>
        <td class="align-middle"><?= $row->nik ?></td>
        <td class="align-middle"><?= $row->pekerjaan ?></td>
        <td class="align-middle"><?= $row->pendidikan_terakhir ?></td>
        <td class="align-middle"><?= $row->email ?></td>
        <td class="align-middle"><?= $row->no_telepon ?></td>
        <td class="align-middle"><?= date('d-m-Y',strtotime($row->tanggal_uji)) ?></td>
        <td class="align-middle"><?= ($row->asesor_nama != '') ? $row->asesor_nama : $row->asesor_kompetensi ?></td>
        <td class="align-middle"><?= ($row->tuk_nama != '') ? $row->tuk_nama : $row->tuk ?></td>
        <td class="align-middle"><?= ($row->skema_sertifikasi_nama != '') ? $row->skema_sertifikasi_nama : $row->skema_sertifikasi ?></td>
        <td class="align-middle"><?= $row->no_blanko ?></td>
        <td class="align-middle"><?= $row->no_sertifikat ?></td>
        <td class="align-middle">
            <?= $row->tanggal_sertifikat ?><br/>
            <span class="font-italic">Expired: <?= $row->tanggal_expired_sertifikat ?></span>
        </td>
        <td class="align-middle" style="padding: 0">
            <table class="table table-condensed">
                <tr>
                    <th style="width: 120px">MUK</th>
                    <td class="align-middle" style="line-height: 22px; width: 144px">
                        : 
                        <a href="<?= $row->muk ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->muk), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Portofolio</th>
                    <td class="align-middle" style="line-height: 22px;">
                        : 
                        <a href="<?= $row->portofolio ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->portofolio), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Sertifikat Kompetensi</th>
                    <td class="align-middle" style="line-height: 22px;">
                        : 
                        <a href="<?= $row->sertifikat_kompetensi ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->sertifikat_kompetensi), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Foto</th>
                    <td class="align-middle" style="line-height: 22px;">
                        : 
                        <a href="<?= $row->foto ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->foto), 10) ?>
                        </a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
<?php endforeach; ?>