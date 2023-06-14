<?= $this->extend('/admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="p-4 sm:ml-64">

    <div class="w-full p-4 mb-6 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 bg-gradient-to-r from-cyan-500 to-blue-500">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Articles</h5>
        <p class="mb-5 italic text-base text-gray-500 sm:text-base dark:text-white">Write to inspire, heal, and transform.</p>
    </div>

    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
        <a href="/admin/article/create" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-base px-4 py-1.5 text-center mr-2 mb-2">Create</a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Upload
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($article as $a) : ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-wrap dark:text-white">
                                <?= $no++ ?>
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-wrap dark:text-white">
                                <a href="/admin/article/<?= $a['slug'] ?>" class="">
                                    <?= $a['title'] ?>
                                </a>
                            </th>
                            <td class="px-6 py-4">
                                <?= date("d M Y", strtotime($a['created_at'])) ?>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/article/edit/<?= $a['slug'] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>