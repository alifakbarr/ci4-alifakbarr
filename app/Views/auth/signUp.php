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
    <title>Sign Up</title>

    <style>
        .card:hover h1 {
            color: rgb(234 179 8);
        }
    </style>
</head>

<body class="bg-black flex items-center justify-center h-screen ">
    <div class="px-6 py-6 bg-white lg:px-8 w-4/5 sm:w-4/12 rounded-lg">
        <a href="/" class="flex items-center mb-5">
            <img src="/img/notes.png" class="h-6 mr-1 sm:h-7" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-black italic">alifakbarr / Sign Up</span>
        </a>
        <div class="flex items-center content-center mt-8">
            <p class="mb-4 text-lg font-bold text-black leading-tight ">Hey, hello new user</p>
            <img src="/img/hand.png" class="h-6 mr-1 sm:h-7 -mt-5" alt="">
        </div>
        <p class="-mt-2 hover:underline">Welcome to alifakbarr.</p>
        <?= view('Myth\Auth\Views\_message_block') ?>
        <form class="space-y-2 mt-1" action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900 "><?= lang('Auth.username') ?></label>
                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 <?php if (session('errors.username')) : ?>border-red-900<?php endif ?>" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
            </div>
            <div>
                <label for=" email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 <?php if (session('errors.email')) : ?>border-red-900<?php endif ?>" placeholder="youremail@email.com" value="<?= old('email') ?>" required>
                <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
            </div>
            <div>
                <label for=" password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                <input type="password" name="password" id="password" placeholder="<?= lang('Auth.password') ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5e <?php if (session('errors.password')) : ?>border-red-900<?php endif ?>" autocomplete="off" required>
            </div>
            <div>
                <label for=" password" class="block mb-2 text-sm font-medium text-gray-900">Repeat password</label>
                <input type="password" name="pass_confirm" id="password" placeholder="<?= lang('Auth.repeatPassword') ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5e <?php if (session('errors.pass_confirm')) : ?>border-red-900<?php endif ?>" autocomplete="off" required>
            </div>
            <button type="submit" class="w-full text-white bg-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create account</button>
            <div class="text-xs font-normal text-zinc-500">
                <?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>" class="text-black hover:underline">Sign In</a>
            </div>
        </form>
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