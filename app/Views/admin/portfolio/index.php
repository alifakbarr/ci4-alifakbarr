<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full p-4 mb-6 text-center border border-gray-200 rounded-lg shadow sm:p-8 bg-blue-600 ">
    <h5 class="mb-2 text-3xl font-bold text-black ">Portfolio</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">My Journey</p>
</div>

<div class="p-4 border-2 border rounded-lg border-white">
    <a href="/admin/portfolio/create" class="text-black bg-yellow-400 font-medium rounded-lg text-base px-4 py-1.5 text-center mr-2 mb-2">Create</a>
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
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Start At
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                <!-- perhitungan pagination -->
                <?php $no = 1 + (2 * ($currentPage - 1)) ?>
                <?php foreach ($portfolio as $p) : ?>
                    <tr class="border-b bg-black">
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap">
                            <?= $no++ ?>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap">
                            <a href="/admin/portfolio/detail/<?= $p['id'] ?>" class="font-medium text-white hover:underline"><?= ucwords($p['title']) ?></a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap">
                            <?= ucwords($p['role']) ?>
                        </th>
                        <td class="px-6 py-4 text-center">
                            <?= date("d M Y", strtotime($p['start_at'])) ?>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="/admin/portfolio/edit/<?= $p['id'] ?>" class="font-medium text-yellow-300 hover:underline">Edit</a>
                            <span class="mx-1">|</span>
                            <button data-modal-target="popup-modal<?= $p['id'] ?>" data-modal-toggle="popup-modal<?= $p['id'] ?>" class="font-medium text-red-500 hover:underline" type="button">
                                Delete
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="mt-5 flex justify-center">
        <?= $pager->links('portofolios', 'custom_pagination') ?>
    </div>
</div>

<!-- delete -->
<?php foreach ($portfolio as $p) : ?>
    <div id="popup-modal<?= $p['id'] ?>" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="popup-modal<?= $p['id'] ?>">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg class="mx-auto mb-4 text-black w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-black ">Are you sure you want to delete this <b><?= $p['title'] ?></b> portfolio?</h3>
                    <form action="/admin/portfolio/<?= $p['id'] ?>" method="post" class="inline">
                        <?php csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-rose-600 font-medium rounded-3xl text-sm inline-flex items-center px-5 py-1.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                    </form>
                    <button data-modal-hide="popup-modal<?= $p['id'] ?>" type="button" class="text-black bg-white font-medium rounded-3xl text-sm inline-flex items-center px-5 py-1.5 text-center mr-2 border">No, cancel</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>
<?= $this->endSection() ?>