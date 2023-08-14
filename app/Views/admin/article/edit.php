<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="mt-8 sm:mt-16 py-16 sm:py-24 px-8 sm:px-14 bg-yellow-500 border-t-2 border-b-2 border-t-black border-b-black">
    <h5 class="mb-2 text-3xl font-bold text-black ">Edit Article</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">Try type something</p>
</div>
<div class="mt-5 mb-28 px-8 sm:px-40 rounded-lg">
    <div class="relative overflow-x-auto">
        <?php $validation = \Config\Services::validation(); ?>
        <form action="/admin/article/update/<?= $article['id'] ?>" method="post">
            <?= csrf_field() ?>
            <div>
                <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Edit Article</label>
            </div>
            <div>
                <label for="title" class="block mb-2 text-normal font-medium text-white">Title</label>
                <input type="text" id="title" value="<?= old('title', $article['title']); ?>" class="bg-white text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Insert title here..." name="title">
                <?php if (session('errors.title')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.title') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="share" class="block my-2 text-normal font-medium text-white">Share To</label>
                <select id="share" name="share" class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                    <option value="private" <?= $article['share'] === 'private' ? 'selected' : '' ?>>Private</option>
                    <option value="public" <?= $article['share'] === 'public' ? 'selected' : '' ?>>Public</option>
                </select>
                <?php if (session('errors.share')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.share') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="Status" class="block my-2 text-normal font-medium text-white">Status</label>
                <select id="Status" name="status" class="p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                    <option value="draft" <?= $article['status'] === 'draft' ? 'selected' : '' ?>>Draft</option>
                    <option value="finish" <?= $article['status'] === 'finish' ? 'selected' : '' ?>>Finish</option>
                </select>
                <?php if (session('errors.status')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.status') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="countries_multiple" class="block my-2 text-sm font-medium text-white">Category</label>
                <select multiple name="categories[]" id="mySelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full">
                    <?php foreach ($categories as $c) : ?>
                        <option value="<?= $c['id'] ?>" <?= (in_array($c['id'], array_column($selectedCategories, 'category_id'))) ? 'selected' : ''; ?>><?= $c['name'] ?></option>
                    <?php endforeach ?>
                </select>
                <?php if (session('errors.categories')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.categories') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="content" class="block mb-2 text-normal font-medium text-white">Content</label>
                <textarea id="editor" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="content"><?= old('content', $article['content']); ?></textarea>
                <?php if (session('errors.content')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.content') ?></p>
                <?php endif; ?>
            </div>
            <button type="submit" class="text-white bg-blue-500 font-medium rounded-2xl text-sm px-6 py-1 text-center mt-4 mr-2 mb-2">Save</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>