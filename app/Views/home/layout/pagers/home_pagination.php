<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation">
    <ul class="inline-flex -space-x-px">
        <?php if ($pager->hasPrevious()) : ?>
            <li>
                <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" class="px-3 py-2 ml-0 leading-tight text-white bg-green-600 border-2 border-green-800 rounded-l-lg">
                    <span aria-hidden="true"><?= lang('Pager.first') ?></span>
                </a>
            </li>
            <li>
                <a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" class="px-3 py-2 ml-0 leading-tight text-white bg-green-600 border-2 border-green-800 ">
                    <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li>
                <a href="<?= $link['uri'] ?>" class=" <?= $link['active'] ? ' bg-yellow-500 ' : '' ?>px-3 py-2 leading-tight text-white bg-green-600 border-2 border-green-800">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li>
                <a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="px-3 py-2 leading-tight text-white bg-green-600 border-2 border-green-800 ">
                    <span aria-hidden="true"><?= lang('Pager.next') ?></span>
                </a>
            </li>
            <li>
                <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="px-3 py-2 leading-tight text-white bg-green-600 border-2 border-green-800 rounded-r-lg">
                    <span aria-hidden="true"><?= lang('Pager.last') ?></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>