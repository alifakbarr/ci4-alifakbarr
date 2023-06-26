<?= $this->extend('/home/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full  mb-6 text-center bg-white border-y border-y-4 rounded-lg shadow py-9 bg-yellow-400">
    <div class="flex justify-center items-center">
        <img src="/img/notes.png" class="h-9 sm:h-12 mr-1" alt="instagram" />
        <p class="mb-1 text-3xl sm:text-5xl font-bold text-black italic tracking-tighter">
            List Article
        </p>
    </div>
    <div class="flex justify-center items-center mt-7 bg-white py-1">
        <h1 class="text-lg sm:text-2xl font-bold text-black tracking-tighter">Notes gabut doang.</h1>
    </div>
</div>

<form class="my-6" action="" method="post">
    <?= csrf_field() ?>
    <label for="default-search" class="mb-2 text-sm font-medium text-black sr-only">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-black " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <input type="search" name="keyword" id="default-search" class="block w-full p-4 pl-10 text-sm text-black rounded-lg bg-white focus:ring-teal-400 focus:border-teal-400" placeholder="Search articles" required>
        <button type="submit" name="submit" class="text-black absolute right-2.5 bottom-2.5 bg-emerald-400 hover:bg-emerald-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
</form>

<div class="p-4 border-2 border border-white rounded-lg bg-neutral-950">
    <div class="flex justify-between items-center mb-5 pb-3 border-b border-zinc-700">
        <div class="flex items-center ">
            <img src="/img/article.png" class="h-8 mr-1 sm:h-8" alt="instagram" />
            <p class="italic text-base text-white">List Articles</p>
        </div>
    </div>
    <div class="">
        <?php $no = 1 ?>
        <?php foreach ($article as $a) : ?>
            <div class="bg-neutral-900 p-3 px-4 mb-3 rounded flex items-start sm:items-center">
                <h1 class="text-3xl font-bold sm:text-3xl text-white mr-3"><?= $no++ ?></h1>
                <a href="/admin/article/<?= $a['slug'] ?>" class="flex content-center items-center hover:underline hover:decoration-white">
                    <img src="/img/file.png" class="h-14 mr-2 sm:h-14" alt="file" />
                    <div class="">
                        <h1 class="text-white text-base tracking-tighter leading-tight"><?= $a['title'] ?></h1>
                        <p class="text-zinc-500 text-sm"><?= date("d M Y", strtotime($a['created_at'])) ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
        <div class="mt-5 flex justify-center">
            <?= $pager->links('articles', 'home_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>