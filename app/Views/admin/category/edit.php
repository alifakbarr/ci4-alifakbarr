<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="mt-8 sm:mt-16 py-16 sm:py-24 px-8 sm:px-14 bg-yellow-500 border-t-2 border-b-2 border-t-black border-b-black">
    <h5 class="mb-2 text-3xl font-bold text-black ">Edit Category</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">Organization and Structure</p>
</div>
<div class="mt-5 mb-28 px-8 sm:px-12 rounded-lg">
    <div class="relative overflow-x-auto">
        <?php $validation = \Config\Services::validation(); ?>
        <form action="/admin/category/update/<?= $category['id'] ?>" method="post">
            <?= csrf_field() ?>
            <div>
                <label for="title" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Edit category</label>
            </div>
            <div>
                <label for="title" class="block mb-2 text-normal font-bold text-gray-700">Title</label>
                <input type="text" id="title" value="<?= $category['name'] ?>" class="bg-white text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Insert name here..." name="name">
                <?php if ($validation->getError('name')) { ?>
                    <div class='text-red-500 mt-2'>
                        <?= $error = $validation->getError('name'); ?>
                    </div>
                <?php } ?>
            </div>
            <div>
                <label for="color" class="block mb-2 mt-2 text-normal font-bold text-gray-700">Color</label>
                <input type="text" id="color" value="<?= $category['color'] ?>" class="bg-white text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Code color here..." name="color">
                <?php if ($validation->getError('color')) { ?>
                    <div class='text-red-500 mt-2'>
                        <?= $error = $validation->getError('color'); ?>
                    </div>
                <?php } ?>
            </div>
            <button type="submit" class="text-white bg-blue-500 font-medium rounded-2xl text-sm px-6 py-1 text-center mt-4 mr-2 mb-2">Save</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>