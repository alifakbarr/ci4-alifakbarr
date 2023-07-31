<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // bgCard: '#17191a'
                    },

                }
            },
            plugins: [
                require('@tailwindcss/typography'),
                // ...
            ],
        }
    </script>
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <!-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> -->
    <!-- flowbite css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/datepicker.min.js"></script>
    <!-- select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
    <title><?= $title ?></title>
    <!-- From UNPKG -->
    <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.4.x/dist/typography.min.css" />

    <style>
        .card:hover h1 {
            /* color: rgb(234 179 8); */
            color: #fff;
        }

        .card:hover {
            /* color: rgb(234 179 8); */
            border-left: #fff 2px solid;
            /* border-right: #fff 2px solid;
        border-bottom: #fff 2px solid; */
        }

        * {
            font-family: 'PT Sans', sans-serif;
        }

        /* Gaya Scroll Bar Minimalis */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #fff;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, 0.4);
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        /* #portfolio ul {
            list-style-type: disc !important;
            list-style-position: inside !important;
        } */

        /* #artikel ul {
            list-style-type: disc !important;
            list-style-position: inside !important;
        }

        #artikel ol {
            list-style-type: decimal !important;
            list-style-position: inside !important;
        } */
    </style>
</head>

<body class="bg-black">
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-950 shadow-2xl">
            <a href="/" class="flex items-center pl-2.5 mb-5">
                <img src="/img/bookmark2.png" class="h-6 mr-3 sm:h-7" alt=" Logo" />
                <span class="self-center text-xl whitespace-nowrap text-white">CreativityCove</span>
            </a>
            <ul class="space-y-2 font-medium">
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
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-full text-left flex items-center p-2 rounded-lg text-white hover:bg-zinc-50 hover:text-black">
                            <img src="/img/person.png" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                        </button>
                    <li>
                    <?php endif ?>
                    <li>
                        <a href="/" class="<?= $currentURL == base_url() || $currentURL == base_url('/') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg ">
                            <img src="<?= $currentURL == base_url() || $currentURL == base_url('/') ? '/img/homepage2.png' : '/img/homepage.png' ?>" class="h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
                        </a>
                    <li>
                    <li>
                        <a href="/articles" class="<?= $currentURL == base_url('/articles') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?>  flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url('/articles') ? '/img/newspaper2.png' : '/img/newspaper.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">Articles</span>
                            <!-- <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-white bg-black rounded-full"></span> -->
                        </a>
                    <li>
                        <a href="/portfolio" class="<?= $currentURL == base_url('/portfolio') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url('/portfolio') ? '/img/portfolio2.png' : '/img/portfolio.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">Portfolio</span>
                        </a>
                    <li>
                        <a href="/aboutMe" class="<?= $currentURL == base_url('/aboutMe') ? 'bg-white text-black' : 'text-white hover:bg-zinc-50 hover:text-black' ?> flex items-center p-2 rounded-lg">
                            <img src="<?= $currentURL == base_url('/aboutMe') ? '/img/interface2.png' : '/img/interface.png' ?>" class=" h-6 mr-3" alt="Flowbite Logo" />
                            <span class="flex-1 ml-3 whitespace-nowrap">About Me</span>
                        </a>
                    </li>

            </ul>
        </div>
    </aside>
    <div class="p-2 sm:p-4 sm:ml-64">
        <?= $this->renderSection('content') ?>
        <div class="p-4 border-2 bg-white border border-white rounded-lg mt-5">
            <h1 class="text-left font-base text-sm">&copy 2023 | Alif Akbar Irdhobilla</h1>
        </div>
    </div>

    <!-- Sign modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <a href="/" class="flex items-center mb-5">
                        <img src="/img/bookmark.png" class="h-6 mr-1 sm:h-7" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-black tracking-tight">CreativityCove / Sign In</span>
                    </a>
                    <div class="flex items-center content-center mt-8">
                        <p class="mb-4 text-lg font-bold text-black leading-tight ">Hey, hello</p>
                        <img src="/img/hand.png" class="h-6 mr-1 sm:h-7 -mt-5" alt="">
                    </div>
                    <p class="-mt-2 hover:underline">Welcome to CreativityCove.</p>
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form class="space-y-6 mt-5" action="<?= url_to('login') ?>" method="post">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                            <input type="email" name="login" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 <?php if (session('errors.login')) : ?>border-red-900<?php endif ?>" placeholder="youremail@email.com" required>
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5e <?php if (session('errors.password')) : ?>border-red-900<?php endif ?>" required>
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
                        <!-- <div class="text-sm font-medium text-zinc-500">
                            Not registered? <a href="<?= url_to('register') ?>" class="text-black hover:underline">Create account</a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- flowbite js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
    <!-- ck editor -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.resize('100%', '900px', true);
            })
            .catch(error => {
                console.error(error);
            });
        // var quill = new Quill('#editor', {
        //     theme: 'snow'
        // });
        // quill.on('text-change', function(delta, oldDelta, source) {
        //     document.querySelector("input[name='content']").value = quill.root.innerHTML;
        // });
    </script>
</body>
<script>
    new MultiSelectTag('mySelect') // id
</script>

</html>