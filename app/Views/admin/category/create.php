<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full p-4 mb-5 text-center bg-orange-600 border border-gray-200 rounded-lg shadow sm:p-8">
    <h5 class="mb-2 text-3xl font-bold text-black ">Create Category</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">Organization and Structure</p>
</div>
<div class="p-4 border-2 border-white border rounded-lg">
    <div class="relative overflow-x-auto">
        <!-- <form action="/admin/article/save" method="post"> -->
        <?php $validation = \Config\Services::validation(); ?>
        <form action="/admin/category/save" method="post">
            <?= csrf_field() ?>
            <div>
            </div>
            <div>
                <label for="title" class="block mb-2 text-normal font-medium text-white">Name</label>
                <input type="text" id="title" class="bg-white text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Insert name category here..." name="name">
                <?php if ($validation->getError('name')) { ?>
                    <div class='text-red-500 mt-2'>
                        <?= $error = $validation->getError('name'); ?>
                    </div>
                <?php } ?>
            </div>
            <button type="submit" class="text-white bg-sky-500 font-medium rounded-2xl text-sm px-6 py-1 text-center mt-4 mr-2 mb-2">Save</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>