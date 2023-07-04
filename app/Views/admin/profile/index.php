<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>

<div class="w-full p-4 mb-6 text-center border border-gray-200 rounded-lg shadow sm:p-8 bg-green-400">
    <h5 class="mb-2 text-3xl font-bold text-black ">Management Users</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">We protect the user</p>
</div>
<div class="p-4 border-2 border border-white rounded-lg bg-neutral-950 relative overflow-x-auto shadow-md sm:rounded-lg my-6">
    <table class="w-full text-sm text-left text-white">
        <thead class="text-xs text-black uppercase bg-white">
            <tr>
                <th scope="col" class="px-3 py-3">
                    No
                </th>
                <th scope="col" class="px-3 py-3">
                    Username
                </th>
                <th scope="col" class="px-3 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Role
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?= $no = 1 ?>
            <?php foreach ($users as $a) : ?>
                <tr class="border-b bg-black">
                    <th scope="row" class="px-3 py-4 font-medium text-white whitespace-wrap">
                        <?= $no++ ?>.
                    </th>
                    <th scope="row" class="px-3 py-4 font-medium text-white whitespace-wrap">
                        <?= $a->username ?>
                    </th>
                    <td class="px-3 py-4">
                        <?= $a->email ?>

                    </td>
                    <td class="px-6 py-4">
                        <?= ucwords($a->name) ?>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="/admin/userManagement/<?= $a->userid ?>" class="font-medium text-blue-300 hover:underline">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>