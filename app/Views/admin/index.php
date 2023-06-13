<?= $this->extend('/admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="container px-6 sm:px-14 my-6">
    <a href="/admin/article/create" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-base px-4 py-1.5 text-center mr-2 mb-2">Create</a>
    <!-- article start -->
    <div class="my-8">
        <a href="" class="text-title ">
            <p class="text-slate-600 text-xs">17 Apr 2023</p>
            <p class="text-lg font-semibold mb-8 hover:underline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, ea.</p>
        </a>
    </div>
    <!-- article end -->
</div>
<?= $this->endSection() ?>