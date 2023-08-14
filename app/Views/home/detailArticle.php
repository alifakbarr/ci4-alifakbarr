<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="rounded-lg pt-8 pb-5 py-20 sm:py-24 px-4 sm:px-44">
    <!-- <hr class="my-3 border-2 rounded-lg"> -->
    <div class="sm:px-7 py-7 ">
        <div class="font-light p-5 sm:p-16 -mt-24">
            <p class="text-3xl sm:text-5xl mt-24 sm:mt-16 w-full tracking-tighter leading-tight font-bold text-black "><?= $article[0]['title'] ?></p>
            <p class="text-gray-600 py-2"><?= date("M d, Y", strtotime($article[0]['created_at'])) ?></p>
            <?php foreach ($article as $c) : ?>
                <span class=" text-white text-sm font-medium mr-2 px-2 py-1 rounded-xl  bg-green-600"><?= $c['name'] ?></span>
            <?php endforeach ?>
            <div class="prose max-w-none text-sm sm:text-base pb-5 mt-12 sm:mt-16">
                <?= $article[0]['content'] ?>
            </div>

        </div>
    </div>


</div>
<?= $this->endSection() ?>