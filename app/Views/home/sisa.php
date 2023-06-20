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

<div class="grid grid-cols-3 gap-4 mb-6 underline decoration-wavy text-base sm:text-lg font-bold tracking-tighter text-zinc-300">
    <a href="#" class="flex items-center justify-center h-24 rounded-lg bg-red-500 border-2 border border-white ">Articles</a>
    <a href="#" class="flex items-center justify-center h-24 rounded-lg bg-sky-500 border-2 border border-white">Portofolio</a>
    <a href="#" class="flex items-center justify-center h-24 rounded-lg bg-violet-500 border-2 border border-white">About Me</a>
</div>