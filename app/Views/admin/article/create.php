<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full p-4 mb-5 text-center bg-yellow-400 border border-gray-200 rounded-lg shadow sm:p-8">
    <h5 class="mb-2 text-3xl font-bold text-black ">Create Article</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">Try type something</p>
</div>
<div class="p-4 border-2 border-white border rounded-lg">
    <div class="relative overflow-x-auto">
        <form action="/admin/article/save" method="post">
            <?= csrf_field() ?>
            <div>
            </div>
            <div>
                <label for="title" class="block mb-2 text-normal font-medium text-white">Title</label>
                <input type="text" id="title" class="bg-white text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Insert title here..." required name="title">
            </div>
            <div>
                <label for="content" class="block mb-2 mt-4 text-normal font-medium text-white">Content</label>
                <textarea id="editor" name="content" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
            </div>
            <button type="submit" class="text-white bg-sky-500 font-medium rounded-2xl text-sm px-6 py-1 text-center mt-4 mr-2 mb-2">Save</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>