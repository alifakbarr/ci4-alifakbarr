<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full p-4 mb-6 text-center border border-gray-200 rounded-lg shadow sm:p-8 bg-green-400">
    <h5 class="mb-2 text-3xl font-bold text-black ">Management Users</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">We protect the user</p>
</div>
<div class="p-4 border-2 border border-white rounded-lg bg-neutral-950 relative overflow-x-auto shadow-md sm:rounded-lg my-6">
    <div class="flex items-center rounded-lg bg-zinc-800 p-5 justify-between">
        <div class="flex items-center">
            <img class="w-24 h-24 rounded-lg" src="<?= base_url('/img/' . $user->user_image) ?>" alt="Bonnie image" />
            <div class="ml-4">
                <p class="mb-1 text-xl leading-none font-medium text-white"><?= $user->username ?></p>
                <p class="text-sm leading-none text-gray-400 mb-1"><?= $user->email ?></p>
                <span class="text-sm leading-none bg-blue-900 rounded-lg px-2 pb-1 text-white"><?= ucwords($user->name) ?></span>
            </div>
        </div>
        <a href="#" class="text-normal font-medium leading-none bg-red-600 rounded-lg px-7 py-2 px-1 text-white hover:underline">Delete</a>
    </div>
</div>
</div>
<?= $this->endSection() ?>