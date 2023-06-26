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
                        bgCard: '#17191a'
                    }
                }
            }
        }
    </script>
    <!-- ckeditor -->
    <script src="<?= base_url('build/ckeditor.js') ?>"></script>
    <!-- flowbite css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <title><?= $title ?></title>

    <style>
        .card:hover h1 {
            color: rgb(234 179 8);
        }
    </style>
</head>

<body class="bg-black">
    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-900 shadow-2xl">
            <a href="/" class="flex items-center pl-2.5 mb-5">
                <img src="/img/notes2.png" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white italic">alifakbarr</span>
            </a>
            <ul class="space-y-2 font-medium">
                <li>
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-full text-left flex items-center p-2 rounded-lg text-white hover:bg-zinc-50 hover:text-black">
                        <img src="/img/user.png" class="w-6 h-6 mr-3" alt="Flowbite Logo" />
                        <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                    </button>
                <li>
                <li>
                    <a href="/articles" class="flex items-center p-2 rounded-lg text-white hover:bg-zinc-50 hover:text-black">
                        <img src="/img/newspaper.png" class="w-6 h-6 mr-3" alt="Flowbite Logo" />
                        <span class="flex-1 ml-3 whitespace-nowrap">Articles</span>
                        <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-white bg-black rounded-full"><?= $jumlahArtikel ?></span>
                    </a>
                <li>
                    <a href="/admin" class="flex items-center p-2 rounded-lg text-white hover:bg-zinc-50 hover:text-black">
                        <img src="/img/archive.png" class="w-6 h-6 mr-3" alt="Flowbite Logo" />
                        <span class="flex-1 ml-3 whitespace-nowrap">Portofolio</span>
                    </a>
                <li>
                    <a href="/admin" class="flex items-center p-2 rounded-lg text-white hover:bg-zinc-50 hover:text-black">
                        <img src="/img/information.png" class="w-6 h-6 mr-3" alt="Flowbite Logo" />
                        <span class="flex-1 ml-3 whitespace-nowrap">About Me</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <div class="p-4 sm:ml-64">
        <?= $this->renderSection('content') ?>
        <div class="p-4 border-2 bg-white border border-white rounded-lg mt-5">
            <h1 class="text-left font-semibold text-sm">&copy 2023 | Alif Akbar Irdhobilla</h1>
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
                        <img src="/img/notes.png" class="h-6 mr-1 sm:h-7" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-black italic">alifakbarr</span>
                    </a>
                    <div class="flex items-center content-center mt-8">
                        <p class="mb-4 text-lg font-bold text-black leading-tight ">Hey, hello</p>
                        <img src="/img/hand.png" class="h-6 mr-1 sm:h-7 -mt-5" alt="">
                    </div>
                    <p class="-mt-2 hover:underline">Welcome to alifakbarr.</p>
                    <form class="space-y-6 mt-5" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="gearfive@email.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5e" required>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required>
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Remember me</label>
                            </div>
                            <!-- <a href="#" class="text-sm text-blue-700 hover:underline">Lost Password?</a> -->
                        </div>
                        <button type="submit" class="w-full text-white bg-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- flowbite js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
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
    </script>
</body>

</html>