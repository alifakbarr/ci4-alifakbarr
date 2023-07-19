<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="p-4 border-2 border border-white rounded-lg bg-neutral-950">
    <div class="flex items-center items-center bg-yellow-400 rounded-lg p-4">
        <!-- <img class="h-20 sm:h-24 rounded-lg shadow-lg bg-zinc-900" src="<?= base_url('/img/file.png') ?>" alt="Bonnie image" /> -->
        <div class="">
            <p class="text-lg sm:text-2xl w-full tracking-tighter shadow-lg leading-tight font-medium text-white bg-zinc-900 rounded-lg p-3"><?= $article[0]['title'] ?></p>
            <div class="p-3 mt-4 bg-zinc-900 rounded-lg shadow-lg">
                <table class="text-white text-sm font-light ">
                    <tr>
                        <td class="pb-1">Created</td>
                        <td class="pl-10 pb-1"><?= date("M d, Y, H:i", strtotime($article[0]['created_at'])) ?></td>
                    </tr>
                    <tr>
                        <td class="pb-1">Last Modified</td>
                        <td class="pl-10 pb-1"><?= date("M d, Y, H:i", strtotime($article[0]['updated_at'])) ?></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td class="pl-10">
                            <?php foreach ($article as $c) : ?>
                                <span class="<?= $c['color'] ?> text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full"><?= $c['name'] ?></span>
                            <?php endforeach ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- <hr class="my-3 border-2 rounded-lg"> -->
    <div class="bg-zinc-900 rounded-lg mt-4 px-7 pb-4 text-white font-light sm:font-normal">
        <?= $article[0]['content'] ?>
    </div>
</div>
<?= $this->endSection() ?>