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

<nav class="bg-white border-gray-200 fixed w-full z-20 top-0 left-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center">
            <img src="/img/bookmark.png" class="h-8 mr-3" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap">CreativityCove</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                <?php $currentURL = base_url(uri_string()); ?>
                <?php if (in_groups('admin') || in_groups('user')) : ?>
                    <hr class="mx-2">
                    <li>
                        <a href="/profile" class="<?= $currentURL == base_url('/profile') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url('/profile') ? '/img/person2.png' : '/img/person.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">My Profile</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (in_groups('admin')) : ?>
                    <li>
                        <a href="/admin/userManagement" class="<?= $currentURL == base_url('/admin/userManagement') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url(' /admin/userManagement') ? '/img/group2.png' : '/img/group.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">User Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/article" class="<?= $currentURL == base_url('/admin/article') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url('/admin/article') ? '/img/copywriting2.png' : '/img/copywriting.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">Article Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/category" class="<?= $currentURL == base_url('/admin/category') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url('/admin/category') ? '/img/menu2.png' : '/img/menu.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">Category Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/portfolio" class="<?= $currentURL == base_url('/admin/portfolio') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url('/admin/portfolio') ? '/img/archive2.png' : '/img/archive.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">Portfolio Management</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php if (logged_in() == true) : ?>
                    <li>
                        <a href="<?= base_url('logout') ?>" class="<?= $currentURL == base_url('logout') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url('logout') ? '/img/log-out2.png' : '/img/log-out.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign Out</span>
                        </a>
                    <li>
                        <hr class="mx-2">
                    <?php endif; ?>
                    <?php if (logged_in() == false) : ?>
                    <li>
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-full text-left flex items-center rounded-lg text-black hover:text-blue-700">
                            <span class="">Sign In</span>
                        </button>
                    <li>
                    <?php endif ?>
                    <li>
                        <a href="/" class="<?= $currentURL == base_url() || $currentURL == base_url('/') ? 'text-blue-700' : 'text-black hover:text-blue-700' ?> flex items-center rounded-lg ">
                            <span class="">Home</span>
                        </a>
                    <li>
                    <li>
                        <a href="/articles" class="<?= $currentURL == base_url('/articles') ? 'text-blue-700' : 'text-black hover:text-blue-700' ?>  flex items-center rounded-lg">
                            <span class="">Articles</span>
                        </a>
                    <li>
                        <a href="/portfolio" class="<?= $currentURL == base_url('/portfolio') ? 'text-blue-700' : 'text-black hover:text-blue-700' ?> flex items-center rounded-lg">
                            <span class="">Portfolio</span>
                        </a>
                    <li>
                        <a href="/aboutMe" class="<?= $currentURL == base_url('/aboutMe') ? 'text-blue-700' : 'text-black hover:text-blue-700' ?> flex items-center rounded-lg">
                            <span class="">About Me</span>
                        </a>
                    </li>
            </ul>
        </div>
    </div>
</nav>