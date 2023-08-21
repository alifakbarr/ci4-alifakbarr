<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<?= $this->include('layout/home/hero') ?>
<?= $this->include('layout/home/searchHome') ?>


<div class="mt-3 mb-28 px-8 sm:px-56 rounded-lg">
    <!-- <div class="flex justify-between items-center mb-5 pb-3 border-b border-zinc-700"> -->
    <!-- <div class="flex items-center ">
            <img src="/img/article2.png" class="h-8 mr-1 sm:h-8" alt="instagram" />
            <p class="text-base text-black">Latest Articles</p>
        </div>
        <div class="">
            <a href="/articles" class="text-sm text-black hover:underline">See all</a>
             <div class="border-b border-white"></div>
    </div> -->
    <!-- </div> -->
    <div class="list-articles">
        <!-- <div class="pt-3 mb-3 rounded"> -->
        <?php if ($article && is_array($article)) : ?>
            <?php foreach ($article as $a) : ?>
                <div class="">
                    <a href="/articles/<?= $a['slug'] ?>" class="flex p-4">
                        <div class="flex content-center items-start sm:items-center hover:underline hover:decoration-white"></div>
                        <div class="">
                            <span class="text-sm tracking-tight leading-tight text-gray-400">alifakbarr</span>
                            <h2 class="text-xl font-bold tracking-tight leading-tight"><?= $a['title'] ?></h2>
                            <p class="text-gray-500 text-xs mt-1"><?= date("d M Y", strtotime($a['created_at'])) ?></p>
                            <?php $categories = explode(', ', $a['category_names']); ?>
                            <?php foreach ($categories as $category) : ?>
                                <span class=" text-white text-xs font-medium mr-2 px-1.5 py-0.5 rounded-xl bg-green-600"><?= $category ?></span>
                            <?php endforeach ?>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        <?php else : ?>
            <p class="text-white">No articles found.</p>
        <?php endif ?>
        <!-- </div> -->
        <div class="mt-5 flex justify-center">
            <?= $pager->links('article', 'custom_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>