<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="rounded-lg pt-8 pb-24 px-9  bg-neutral-950">
    <p class="text-lg sm:text-2xl w-full tracking-tighter shadow-lg leading-tight font-normal text-white pb-24">alifakbarr</p>
    <p class="text-lg sm:text-3xl w-full tracking-tighter shadow-lg leading-tight font-bold text-white"><?= $article[0]['title'] ?></p>
    <table class="my-9 text-white text-sm font-light ">
        <tr>
            <td class="pb-2">Created</td>
            <td class="pl-10 pb-2"><?= date("M d, Y", strtotime($article[0]['created_at'])) ?></td>
        </tr>
        <tr>
            <td class="pb-2">Last Modified</td>
            <td class="pl-10 pb-2"><?= date("M d, Y", strtotime($article[0]['updated_at'])) ?></td>
        </tr>
        <tr>
            <td>Category</td>
            <td class="pl-10">
                <?php foreach ($article as $c) : ?>
                    <!-- <span class="bg-zinc-400 rounded-xl px-1 text-black text-xs mt-2"><?= $c['name'] ?></span> -->
                    <span class=" text-black text-xs font-medium mr-2 px-1 py-0.5 rounded-xl bg-zinc-400"><?= $c['name'] ?></span>
                <?php endforeach ?>
            </td>
        </tr>
    </table>
    <!-- <hr class="my-3 border-2 rounded-lg"> -->
    <div class="rounded-lg pb-4 text-neutral-100 font-light text-base leading-relaxed ">
        <?= $article[0]['content'] ?>
    </div>
</div>
<?= $this->endSection() ?>