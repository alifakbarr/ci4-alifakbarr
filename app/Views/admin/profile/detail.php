<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>

<div class="w-full p-4 mb-6 text-center border border-gray-200 rounded-lg shadow sm:p-8 bg-green-400">
    <h5 class="mb-2 text-3xl font-bold text-black ">Management Users</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">We protect the user</p>
</div>
<div class="p-4 border-2 border border-white rounded-lg bg-neutral-950 relative overflow-x-auto shadow-md sm:rounded-lg my-6">
    <div class="pt-10 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?= base_url('/img/' . $user->user_image) ?>" alt="Bonnie image" />
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white"><?= $user->username ?></h5>
            <span class="text-sm text-gray-500 dark:text-gray-400"><?= $user->email ?></span>
        </div>
    </div>
</div>
<?= $this->endSection() ?>