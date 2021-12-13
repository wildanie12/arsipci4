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
        <td class="align-middle"><?= $row->nama ?></td>
        <td class="align-middle"><?= date('d-m-Y', strtotime($row->tanggal_mou)) ?></td>
        <td class="align-middle"><?= $row->nomor_mou ?></td>
        <td class="align-middle"><?= $row->keterangan ?></td>
        <td class="align-middle">
            <?php foreach (explode('|', $row->dokumen) as $dokumen) : ?>
                <?php if ($dokumen != '') : ?>
                <a href="<?= $dokumen ?>" target="_blank" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                    <i class="fas fa-file-pdf mr-1"></i>
                    <?= limitString(utf8_decode(urldecode(basename($dokumen))), 10) ?>
                </a>
                <?php else : ?>
                <i>Tidak ada dokumen</i>
                <?php endif; ?>
            <?php endforeach; ?>
        </td>
        <td class="align-middle d-flex">
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