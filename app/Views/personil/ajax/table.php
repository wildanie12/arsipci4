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
        <td class="align-middle"><?= (($page-1) * $limit) + ++$index ?></td>
        <td class="align-middle">
            <div class="border-bottom text-lg">
                <?= $row->nama ?>
            </div>
            <div class="font-weight-bold border-bottom">
                Jabatan: <?= $row->nama_jabatan ?>
            </div>
            <div class="font-italic">
                <?= $row->alamat ?>
            </div>
        </td>
        <td class="align-middle">
            <?= $row->tempat_lahir ?>, <?= date('d F Y', strtotime($row->tanggal_lahir)) ?>
        </td>
        <td class="align-middle"><?= $row->nik ?></td>
        <td class="align-middle">
            <table class="table table-condensed">
                <tr>
                    <th>CV</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->cv ?>" target="_blank" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(utf8_decode(urldecode(basename($row->cv))), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Portofolio</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->portofolio ?>" target="_blank" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(utf8_decode(urldecode(basename($row->portofolio))), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Pas Foto</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->pas_foto ?>" target="_blank" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(utf8_decode(urldecode(basename($row->pas_foto))), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Scan KTP</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->ktp ?>" target="_blank" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(utf8_decode(urldecode(basename($row->ktp))), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>SK <br/>Pengangkatan</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->sk_pengangkatan ?>" target="_blank" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(utf8_decode(urldecode(basename($row->sk_pengangkatan))), 10) ?>
                        </a>
                    </td>
                </tr>
            </table>
        </td>
        <td class="align-middle">
            <a href="#" data-id="<?= $row->id ?>" class="mb-1 btn btn-sm btn-default btn-detail rounded-circle">
                <i class="fas fa-eye"></i>
            </a>
            <a href="#" data-id="<?= $row->id ?>" class="mb-1 btn btn-sm btn-default btn-edit rounded-circle">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <a href="#" data-id="<?= $row->id ?>" class="mb-1 btn btn-sm btn-danger btn-delete rounded-circle">
                <i class="fas fa-trash"></i>
            </a>
        </td>
    </tr>
<?php endforeach; ?>