<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full  mb-6 text-center bg-white border-y border-y-4 rounded-lg shadow py-9 bg-yellow-400">
    <div class="flex justify-center items-center">
        <img src="/img/notes.png" class="h-12 mr-1" alt="instagram" />
        <p class="mb-1 text-5xl font-bold text-black italic tracking-tighter">
            alifakbarr
        </p>
    </div>
    <div class="flex justify-center items-center mt-7 bg-white py-1">
        <a href="https://www.instagram.com/alifakbar_8/" class="flex items-center mx-4" target="_blank">
            <img src="/img/instagram.png" class="h-4 mr-1 sm:h-4" alt="instagram" />
            <p class="mb-1 italic text-base text-black sm:text-base">alifakbar_8</p>
        </a>
        <a href="https://github.com/alifakbarr" class="flex items-center mx-4" target="_blank">
            <img src="/img/github.png" class="h-4 mr-1 sm:h-4" alt="github" />
            <p class="mb-1 italic text-base text-black sm:text-base">alifakbarr</p>
        </a>
        <a href="https://www.linkedin.com/in/alifakbari/" class="flex items-center mx-4" target="_blank">
            <img src="/img/linkedin.png" class="h-4 mr-1 sm:h-4" alt="linkedin" />
            <p class="mb-1 italic text-base text-black sm:text-base">Alif Akbar I</p>
        </a>
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

<div class="p-4 rounded-lg bg-neutral-950">
    <div class="flex justify-between items-center mb-5 pb-3 border-b border-zinc-700">
        <div class="flex items-center ">
            <img src="/img/article.png" class="h-8 mr-1 sm:h-8" alt="instagram" />
            <p class="text-base text-white">Latest Articles</p>
        </div>
        <div class="">
            <a href="/articles" class="text-sm text-white">See all</a>
            <!-- <div class="border-b border-white"></div> -->
        </div>
    </div>
    <div class="">
        <?php $no = 1 ?>
        <div class=" pt-3 mb-3 rounded">
            <?php foreach ($article as $a) : ?>
                <div class="">
                    <a href="/articles/<?= $a['slug'] ?>" class="card flex hover:scale-105 transition-transform duration-300 bg-neutral-900 rounded-lg p-4 mb-7">
                        <h1 class="text-3xl font-black sm:text-5xl text-zinc-700 mr-7 hover:text-yellow-500 transition-colors duration-300"><?= sprintf('%02d', $no++) ?></h1>
                        <div class="flex content-center items-start sm:items-center hover:underline hover:decoration-white"></div>
                        <div class="">
                            <h2 class="text-white text-base tracking-tighter leading-tight"><?= $a['title'] ?></h2>
                            <p class="text-zinc-500 text-xs mt-2"><?= date("d M Y", strtotime($a['created_at'])) ?></p>
                            <?php $categories = explode(', ', $a['category_names']); ?>
                            <?php foreach ($categories as $category) : ?>
                                <span class=" text-black text-xs font-medium mr-2 px-1 py-0.5 rounded-xl bg-zinc-400"><?= $category ?></span>

                            <?php endforeach ?>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>
<?= $this->endSection() ?>