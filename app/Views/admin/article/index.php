<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="mt-8 sm:mt-16 py-16 sm:py-24 px-8 sm:px-14 bg-yellow-500 border-t-2 border-b-2 border-t-black border-b-black">
    <h5 class="mb-2 text-3xl font-bold text-black ">Articles</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">Write to inspire, heal, and transform.</p>
</div>

<div class="mt-5 mb-28 px-8 sm:px-12 rounded-lg">
    <a href="/admin/article/create" class="text-black bg-yellow-500 font-medium border border-black rounded-lg text-base px-4 py-1.5 text-center mr-2 mb-2">Create</a>
    <div class="relative overflow-x-auto my-6">
        <table class="w-full text-sm text-left text-white border border-black">
            <thead class="text-xs text-black uppercase bg-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- perhitungan pagination -->
                <?php $no = 1 + (25 * ($currentPage - 1)) ?>
                <?php foreach ($article as $a) : ?>
                    <tr class="border-b bg-black">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap">
                            <?= $no++ ?>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap">
                            <a href="/admin/article/<?= $a['slug'] ?>" class="">
                                <?= $a['title'] ?>
                            </a>
                            <br>
                            <span class="italic"><?= date("d M Y", strtotime($a['created_at'])) ?></span>
                        </th>
                        <td class="px-6 py-4 text-center">
                            <a href="/admin/article/edit/<?= $a['slug'] ?>" class="font-medium text-yellow-300 hover:underline">Edit</a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>
<div class="mt-5 flex justify-center">
    <?= $pager->links('articles', 'custom_pagination') ?>
</div>
<?= $this->endSection() ?>