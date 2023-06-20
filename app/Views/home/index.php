<?= $this->extend('/home/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full p-4 mb-6 text-center bg-white border-y border-y-4 rounded-lg shadow sm:p-9 bg-yellow-400">
    <p class="mb-1 text-5xl font-bold text-black italic tracking-tighter">
        alifakbarr
    </p>
    <div class="flex justify-center items-center mt-6">
        <a href="https://www.instagram.com/alifakbar_8/" class="flex items-center mx-4" target="_blank">
            <img src="/img/instagram.png" class="h-4 mr-1 sm:h-4" alt="instagram" />
            <p class="mb-1 italic text-base text-black sm:text-base">alifakbar_8</p>
        </a>
        <a href="https://github.com/alifakbarr" class="flex items-center mx-4" target="_blank">
            <img src="/img/github.png" class="h-4 mr-1 sm:h-4" alt="github" />
            <p class="mb-1 italic text-base text-black sm:text-base">alifakbarr</p>
        </a>
    </div>
</div>

<div class="grid grid-cols-3 gap-4 mb-6 underline decoration-wavy text-base sm:text-lg font-bold tracking-tighter text-zinc-300">
    <a href="#" class="flex items-center justify-center h-24 rounded-lg bg-red-500 border-2 border border-white ">Articles</a>
    <a href="#" class="flex items-center justify-center h-24 rounded-lg bg-sky-500 border-2 border border-white">Portofolio</a>
    <a href="#" class="flex items-center justify-center h-24 rounded-lg bg-violet-500 border-2 border border-white">About Me</a>
</div>

<form class="my-6">
    <label for="default-search" class="mb-2 text-sm font-medium text-black sr-only">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-black " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-black rounded-lg bg-white focus:ring-teal-400 focus:border-teal-400" placeholder="Search articles" required>
        <button type="submit" class="text-black absolute right-2.5 bottom-2.5 bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
    </div>
</form>

<div class="p-4 border-2 border border-white rounded-lg">
    <div class="flex justify-start items-center">
        <img src="/img/trending.png" class="h-8 mr-1 sm:h-8" alt="instagram" />
        <p class=" italic text-base text-white sm:text-base">Trending on here</p>
    </div>
    <div class="relative overflow-x-auto shadow-md border rounded-lg bg-white mt-3">
        <table class="w-full text-sm text-left text-white table-auto ">
            <thead class="text-xs text-white uppercase bg-indigo-600 ">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        Title
                    </th>
                    <th scope="col" class="px-1  text-center">
                        Upload
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($article as $a) : ?>
                    <tr class="border-b bg-black">
                        <th scope="row" class="px-5 py-6 font-medium text-white whitespace-wrap">
                            <a href="/admin/article/<?= $a['slug'] ?>" class="">
                                <?= $a['title'] ?>
                            </a>
                        </th>
                        <td class="px-1 italic text-center">
                            <?= date("d M Y", strtotime($a['created_at'])) ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="mt-5 flex justify-center">
        <?= $pager->links('articles', 'home_pagination') ?>
    </div>
</div>
<?= $this->endSection() ?>