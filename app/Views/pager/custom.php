<!-- <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link btn-pagination" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="page-item"><a class="page-link btn-pagination" href="#">1</a></li>
        <li class="page-item"><a class="page-link btn-pagination" href="#">2</a></li>
        <li class="page-item"><a class="page-link btn-pagination" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link btn-pagination" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav> -->

<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
    <?php if ($pager->hasPrevious()) : ?>
        <li class="page-item">
            <a class="page-link btn-pagination" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                <span aria-hidden="true"><?= lang('Pager.first') ?></span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link btn-pagination" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
            </a>
        </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <li <?= $link['active'] ? 'class="active"' : '' ?>>
            <a class="page-link btn-pagination" data-page="<?= $link['title'] ?>" href="<?= $link['uri'] ?>">
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li class="page-item">
            <a class="page-link btn-pagination" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                <span aria-hidden="true"><?= lang('Pager.next') ?></span>
            </a>
        </li>
        <li class="page-item">
            <a class="page-link btn-pagination" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                <span aria-hidden="true"><?= lang('Pager.last') ?></span>
            </a>
        </li>
    <?php endif ?>
    </ul>
</nav>