<?php
    function limitString($string, $trim) {
        if (strlen($string) > $trim) {
            $string = substr($string, 0, $trim) . '...';
        }
        return $string;
    }
?>

<?php foreach ($data as $index => $row) : ?>
    <tr>
        <td class="align-middle"><?= ++$index ?></td>
        <td class="align-middle">
            <strong><?= $row->nama ?></strong><br/>
            <div class="font-italic text-xs" style="line-height: 16px;">
                <?= $row->alamat ?>
            </div>
        </td>
        <td class="align-middle"><?= $row->no_sk ?></td>
        <td class="align-middle"><?= $row->ketua ?></td>
        <td class="align-middle"><?= $row->no_telepon ?></td>
        <td class="align-middle">
            <table class="table table-condensed">
                <tr>
                    <th>Panduan Mutu</th>
                    <td class="align-middle" style="line-height: 22px;">
                        : 
                        <a href="<?= $row->panduan_mutu ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->panduan_mutu), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>SOP</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->sop ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->sop), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>SK TUK</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->sk_tuk ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->sk_tuk), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>BA Verifikasi</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->ba_verifikasi ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->ba_verifikasi), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>SPT Verifikator</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->spt_verifikator ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->spt_verifikator), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>SK Checklist Persyaratan</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->sk_checklist_persyaratan ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->sk_checklist_persyaratan), 10) ?>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>MOU</th>
                    <td class="align-middle">
                        : 
                        <a href="<?= $row->mou ?>" class="btn btn-sm btn-success text-xs text-uppercase font-weight-bolder" style="line-height: 13px; padding: 2px 4px">
                            <i class="fas fa-file-pdf mr-1"></i>
                            <?= limitString(basename($row->mou), 10) ?>
                        </a>
                    </td>
                </tr>
            </table>
        </td>
        <td class="align-middle">
            <a href="#" data-id="<?= $row->id ?>" class="mb-1 btn btn-sm btn-default rounded-circle">
                <i class="fas fa-eye"></i>
            </a>
            <a href="#" data-id="<?= $row->id ?>" class="mb-1 btn btn-sm btn-default rounded-circle">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <a href="#" data-id="<?= $row->id ?>" class="mb-1 btn btn-sm btn-danger rounded-circle">
                <i class="fas fa-trash"></i>
            </a>
        </td>
    </tr>
<?php endforeach; ?>