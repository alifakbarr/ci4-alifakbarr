<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<?= $this->include('layout/home/hero') ?>
<?= $this->include('layout/home/searchHome') ?>


<div class="p-4 rounded-lg">
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
            <?php if ($article && is_array($article)) : ?>
                <?php foreach ($article as $a) : ?>
                    <div class="">
                        <a href="/articles/<?= $a['slug'] ?>" class="card flex hover:scale-105 transition-transform duration-300 bg-neutral-950 rounded-lg p-4 mb-7">
                            <h1 class="text-3xl font-black sm:text-5xl text-zinc-700 mr-7 hover:text-yellow-500 transition-colors duration-300"><?= sprintf('%02d', $no++) ?></h1>
                            <div class="flex content-center items-start sm:items-center hover:underline hover:decoration-white"></div>
                            <div class="">
                                <h2 class="text-white text-base tracking-tight leading-tight"><?= $a['title'] ?></h2>
                                <p class="text-zinc-500 text-xs my-2"><?= date("d M Y", strtotime($a['created_at'])) ?></p>
                                <?php $categories = explode(', ', $a['category_names']); ?>
                                <?php foreach ($categories as $category) : ?>
                                    <span class=" text-black text-xs font-medium mr-2 px-1.5 py-0.5 rounded-xl bg-white"><?= $category ?></span>

                                <?php endforeach ?>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            <?php else : ?>
                <p class="text-white">No articles found.</p>
            <?php endif ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>