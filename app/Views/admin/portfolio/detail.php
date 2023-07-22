<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="p-4 border-2 border-white border rounded-lg">
    <div class="w-full p-4 mb-1 text-center  border border-gray-200 rounded-lg shadow sm:p-8 bg-blue-400">
        <h5 class="mb-2 text-3xl font-bold text-black "><?= $portfolio['title'] ?></h5>
        <p class="mb-5 italic text-base text-black sm:text-base "><?= ucWords($portfolio['role']) ?>.</p>
    </div>
    <p class="text-white text-sm italic mb-2 text-right">Created At : <?= date("d M Y", strtotime($portfolio['created_at'])) ?> // Updated At : <?= date("d M Y", strtotime($portfolio['updated_at'])) ?></p>
    <a href="/admin/portfolio/edit/<?= $portfolio['id'] ?>" type="button" class="text-black bg-yellow-300 font-medium rounded-2xl text-sm px-6 py-1 text-center mr-2 mb-2">Edit</a>
    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" type="button" class="text-black bg-rose-600 font-medium rounded-2xl text-sm px-6 py-1 text-center mr-2 mb-2">Delete</button>
    <div class="relative overflow-x-auto shadow-md my-6">
        <table class="w-full text-sm text-left text-white border-2 border-white">
            <tr>
                <th scope="col" class="px-6 py-3 text-xs text-black uppercase bg-white ">
                    Title
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap border-2 border-white">
                    <?= $portfolio['title'] ?>
                </th>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-text-xs text-black uppercase bg-white">
                    Role
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap border-2 border-white">
                    <?= ucwords($portfolio['role']) ?>
                </th>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-text-xs text-black uppercase bg-white">
                    Start At
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap border-2 border-white">
                    <?= date("d M Y", strtotime($portfolio['start_at'])) ?>
                </th>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-text-xs text-black uppercase bg-white">
                    Finish At
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap border-2 border-white">
                    <?= date("d M Y", strtotime($portfolio['finish_at'])) ?>
                </th>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-4 text-xs text-black uppercase bg-white">
                    Link
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap border-2 border-white">
                    <a href="<?= $portfolio['link'] ?>" target="_blank" class="hover:underline">Klik me</a>
                </th>
            </tr>
            <tr>
                <th scope="col" class="px-6 py-4 text-xs text-black uppercase bg-white">
                    Description
                </th>
                <th scope="col" class="px-6 py-4 text-xs text-black uppercase bg-white">

                </th>
            </tr>
            <tr>
                <th scope="row" class="px-6 py-4 font-medium text-white whitespace-wrap">
                    <?= ucwords($portfolio['description']) ?>
                </th>
            </tr>
        </table>
    </div>


    <!-- modal -->
    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-black bg-transparent hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-black w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-semibold text-black tracking-tighter">Are you sure you want to delete this portfolio?</h3>
                    <form action="/admin/portfolio/<?= $portfolio['id'] ?>" method="post" class="inline">
                        <?php csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-rose-600 font-medium rounded-3xl text-sm inline-flex items-center px-5 py-1.5 text-center mr-2">
                            Yes, I'm sure
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
    <?= $this->endSection() ?>