<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
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