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
                    <a href="/" class="flex items-center p-2 rounded-lg text-white hover:bg-zinc-50 hover:text-black">
                        <img src="/img/user.png" class="w-6 h-6 mr-3" alt="Flowbite Logo" />
                        <span class="flex-1 ml-3 whitespace-nowrap">My Profile</span>
                    </a>
                </li>
                <li>
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-full text-left flex items-center p-2 rounded-lg text-white hover:bg-zinc-50 hover:text-black">
                        <img src="/img/logout.png" class="w-6 h-6 mr-3" alt="Flowbite Logo" />
                        <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span>
                    </button>
                <li>
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
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-black">You want log out?</h3>
                    <a href="<?= base_url('logout') ?>" data-modal-hide="popup-modal" type="button" class="text-white bg-black font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </a>
                    <button data-modal-hide="popup-modal" type="button" class="text-black bg-white rounded-lg border-2 border-black text-sm font-medium px-5 py-2.5">No, cancel</button>
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