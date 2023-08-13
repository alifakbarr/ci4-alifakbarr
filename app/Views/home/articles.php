<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<?= $this->include('layout/home/hero') ?>
<?= $this->include('layout/home/searchHome') ?>

<div class="px-8 sm:p-12 rounded-lg">
    <div class="flex justify-between items-center mb-5 pb-3 border-b border-zinc-700">
        <div class="flex items-center ">
            <img src="/img/article2.png" class="h-8 mr-1 sm:h-8" alt="instagram" />
            <p class="text-base text-black">List Articles</p>
        </div>
    </div>
    <div class="">
        <?php $no = 1 ?>

        <?php if ($article && is_array($article)) : ?>
            <?php foreach ($article as $a) : ?>
                <div class="">
                    <a href="/articles/<?= $a['slug'] ?>" class="flex p-4">
                        <div class="flex content-center items-start sm:items-center hover:underline hover:decoration-white"></div>
                        <div class="">
                            <h2 class="text-black text-lg font-bold tracking-tight leading-tight"><?= $a['title'] ?></h2>
                            <p class="text-zinc-500 text-xs my-2"><?= date("d M Y", strtotime($a['created_at'])) ?></p>
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
    </div>
    <div class="mt-5 flex justify-center">
        <?= $pager->links('articles', 'custom_pagination') ?>
    </div>
</div>
<?= $this->endSection() ?>