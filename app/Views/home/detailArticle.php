<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="rounded-lg pt-8 pb-5">
    <div class="px-2 sm:px-0">
        <p class="text-lg sm:text-2xl w-full tracking-tighter shadow-lg leading-tight font-normal text-white pb-3">CreativityCove</p>
        <hr class="border border-white rounded-lg mb-8 w-full">
        <p class="text-2xl sm:text-3xl w-full tracking-tighter shadow-lg leading-tight font-bold text-white"><?= $article[0]['title'] ?></p>
        <table class="my-9 mb-28 text-white text-sm font-light ">
            <tr>
                <td class="pb-2">Created At</td>
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
                        <span class=" text-black text-xs font-medium mr-2 px-1.5 py-0.5 rounded-xl bg-white"><?= $c['name'] ?></span>
                    <?php endforeach ?>
                </td>
            </tr>
        </table>
    </div>
    <!-- <hr class="my-3 border-2 rounded-lg"> -->
    <div class="sm:bg-gray-600 sm:px-7 py-7 ">
        <div class="rounded-sm shadow-xl font-light bg-gray-100 p-5 sm:p-16 -mt-24">
            <div class="prose max-w-none pb-5 text-base">
                <?= $article[0]['content'] ?>
            </div>

        </div>
    </div>


</div>
<?= $this->endSection() ?>