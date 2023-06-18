<?= $this->extend('/admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="p-4 sm:ml-64">

    <div class="w-full p-4 mb-6 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 bg-white">
        <h5 class="mb-2 text-3xl font-bold text-black ">Articles</h5>
        <p class="mb-5 italic text-base text-black sm:text-base ">Write to inspire, heal, and transform.</p>
    </div>

    <div class="p-4 border-2 border rounded-lg border-white">
        <a href="/admin/article/create" class="text-black bg-white font-medium rounded-lg text-base px-4 py-1.5 text-center mr-2 mb-2">Create</a>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6">
            <table class="w-full text-sm text-left text-white">
                <thead class="text-xs text-black uppercase bg-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Upload
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($article as $a) : ?>
                        <tr class="border-b bg-black">
                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap">
                                <?= $no++ ?>
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap">
                                <a href="/admin/article/<?= $a['slug'] ?>" class="">
                                    <?= $a['title'] ?>
                                </a>
                            </th>
                            <td class="px-6 py-4 text-center">
                                <?= date("d M Y", strtotime($a['created_at'])) ?>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="/admin/article/edit/<?= $a['slug'] ?>" class="font-medium text-yellow-300 hover:underline">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>