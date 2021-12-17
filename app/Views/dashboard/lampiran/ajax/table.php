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
            <a href="<?= site_url($row->file) ?>" target="_blank">
                <i class='fas fa-download mr-2'></i>
                <?= basename($row->file) ?>
            </a>
        </td>
        <td class="align-middle"><?= $row->deskripsi ?></td>
        <td class="align-middle">
            <a href="#" data-id="<?= $row->id ?>" class="mb-1 btn btn-sm btn-danger btn-delete rounded-circle">
                <i class="fas fa-trash"></i>
            </a>
        </td>
    </tr>
<?php endforeach; ?>