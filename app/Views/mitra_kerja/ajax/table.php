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
        <td class="align-middle"><?= $row->dokumen ?></td>
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