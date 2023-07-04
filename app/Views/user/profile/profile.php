<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>

<div class="w-full p-4 mb-6 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 bg-white ">
    <h5 class="mb-2 text-3xl font-medium text-black tracking-tight">My Profile</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.</p>
</div>
<div class="bg-white rounded-lg  p-4 mb-6">
    <?= user()->username ?>
</div>
<?= $this->endSection() ?>