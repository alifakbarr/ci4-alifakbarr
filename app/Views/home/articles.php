<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="my-16 mx-8">
    <p class="text-xl sm:text-2xl w-full tracking-tighter shadow-lg leading-tight font-normal text-white pb-6">made by alifakbarr</p>
    <p class="text-4xl sm:text-5xl w-full tracking-tighter shadow-lg leading-tight font-normal text-white pb-3">CreativityCove</p>
    <p class="text-base sm:text-sm w-full tracking-tighter shadow-lg leading-tight font-normal text-white pb-3">Enjoy exploring, creating, and imagining,
        CreativityCove, where limitless creative energy is everything.</p>
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
        <input type="search" name="keyword" id="default-search" class="block w-full p-4  pl-10 text-sm text-black rounded-lg bg-white" placeholder="Search articles" required>
        <button type="submit" name="submit" class="text-white absolute right-2.5 bottom-2.5 bg-black font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
</form>

<div class="p-4 rounded-lg">
    <div class="flex justify-between items-center mb-5 pb-3 border-b border-zinc-700">
        <div class="flex items-center ">
            <img src="/img/article.png" class="h-8 mr-1 sm:h-8" alt="instagram" />
            <p class="text-base text-white">List Articles</p>
        </div>
    </div>
    <div class="">
        <?php $no = 1 + (5 * ($currentPage - 1)) ?>
        <?php foreach ($article as $a) : ?>
            <div class="">
                <a href="/articles/<?= $a['slug'] ?>" class="card flex hover:scale-105 transition-transform duration-300 bg-neutral-950 rounded-lg p-4 mb-7">
                    <h1 class="text-2xl font-black sm:text-3xl text-zinc-700 mr-7 hover:text-yellow-500 transition-colors duration-300"><?= sprintf('%02d', $no++) ?></h1>
                    <div class="flex content-center items-start sm:items-center hover:underline hover:decoration-white"></div>
                    <div class="">
                        <h2 class="text-white text-base tracking-tight leading-tight"><?= $a['title'] ?></h2>
                        <p class="text-zinc-500 text-xs my-2"><?= date("d M Y", strtotime($a['created_at'])) ?></p>
                        <?php $categories = explode(', ', $a['category_names']); ?>
                        <?php foreach ($categories as $category) : ?>
                            <span class=" text-black text-xs font-medium mr-2 px-1 py-0.5 rounded-xl bg-white"><?= $category ?></span>

                        <?php endforeach ?>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?= $this->endSection() ?>