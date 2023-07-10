<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full p-4 mb-5 text-center border border-gray-200 rounded-lg shadow sm:p-8 bg-yellow-400">
    <h5 class="mb-2 text-3xl font-bold text-black ">Edit Article</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">Try type something</p>
</div>
<div class="p-4 border-2 border-white border rounded-lg">
    <div class="relative overflow-x-auto">
        <?php $validation = \Config\Services::validation(); ?>
        <form action="/admin/article/update/<?= $article['id'] ?>" method="post">
            <?= csrf_field() ?>
            <div>
                <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Edit Article</label>
            </div>
            <div>
                <label for="title" class="block mb-2 text-normal font-medium text-white">Title</label>
                <input type="text" id="title" value="<?= $article['title'] ?>" class="bg-white text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Insert title here..." name="title">
                <?php if ($validation->getError('title')) { ?>
                    <div class='text-red-500 mt-2'>
                        <?= $error = $validation->getError('title'); ?>
                    </div>
                <?php } ?>
            </div>
            <div>
                <label for="content" class="block mb-2 text-normal font-medium text-white">Content</label>
                <textarea id="editor" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." name="content"><?= $article['content'] ?></textarea>
                <?php if ($validation->getError('content')) { ?>
                    <div class='text-red-500 mt-2'>
                        <?= $error = $validation->getError('content'); ?>
                    </div>
                <?php } ?>
            </div>
            <button type="submit" class="text-white bg-sky-500 font-medium rounded-2xl text-sm px-6 py-1 text-center mt-4 mr-2 mb-2">Save</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>