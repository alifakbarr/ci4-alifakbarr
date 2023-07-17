<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full mb-6 text-start px-4 sm:px-16 bg-white border-y border-y-4 rounded-lg shadow py-9 bg-yellow-400">
    <div class="grid grid-cols-8 gap-1">
        <img src="/img/database.png" class="h-14 sm:h-24 drop-shadow-xl" alt="file" />
        <p class="mb-1 text-normal sm:text-2xl font-bold sm:font-bold tracking-tight leading-none drop-shadow-md col-span-7">
            <?= $article[0]['title'] ?>
            <?php foreach ($article as $c) : ?>
                <?= $c['name'] ?>,
            <?php endforeach ?>

        </p>
    </div>
</div>

<div class="p-4 border-2 border border-white rounded-lg bg-neutral-950">
    <div class="flex items-center items-center">
        <img class="w-24 h-24 rounded-lg shadow-lg" src="<?= base_url('/img/file.png') ?>" alt="Bonnie image" />
        <div class="ml-4">
            <p class="mb-1 text-xl leading-none font-medium text-white"></p>
            <p class="text-sm leading-none text-gray-400 mb-1"></p>
            <span class="text-sm leading-none bg-blue-900 rounded-lg px-2 pb-1 text-white"></span>
        </div>
    </div>
</div>
<?= $this->endSection() ?>