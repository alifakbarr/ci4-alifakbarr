<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="w-full p-4 mb-6 text-center border border-gray-200 rounded-lg shadow sm:p-8 bg-blue-600 ">
    <h5 class="mb-2 text-3xl font-bold text-black ">Portfolio</h5>
    <p class="mb-5 italic text-base text-black sm:text-base ">My Journey</p>
</div>
<div class="p-4 border-2 border-white border rounded-lg">
    <div class="relative overflow-x-auto">
        <?php $validation = \Config\Services::validation(); ?>
        <form action="/admin/portfolio/update/<?= $portfolio['id'] ?>" method="post">
            <?= csrf_field() ?>
            <div>
                <label for="title" class="block mb-2 text-normal font-medium text-white">Title</label>
                <input type="text" id="title" class="bg-white text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Insert title here..." name="title" value="<?= old('title', $portfolio['title']); ?>">
                <?php if (session('errors.title')) : ?>
                    <p class=" text-red-500 mt-2"><?= session('errors.title') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="role" class="block my-2 text-sm font-medium text-white">Role</label>
                <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    <option value="project" <?= $portfolio['role'] === 'project' ? 'selected' : '' ?>>Project</option>
                    <option value="participant" <?= $portfolio['role'] === 'participant' ? 'selected' : '' ?>>Participant</option>
                    <option value="intership" <?= $portfolio['role'] === 'intership' ? 'selected' : '' ?>>Internship</option>
                    <option value="employee" <?= $portfolio['role'] === 'employee' ? 'selected' : '' ?>>Employee</option>
                    <option value="valunteer" <?= $portfolio['role'] === 'valunteer' ? 'selected' : '' ?>>Valunteer</option>
                    <option value="freelance" <?= $portfolio['role'] === 'freelance' ? 'selected' : '' ?>>Freelance</option>
                </select>
                <?php if (session('errors.role')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.role') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="role" class="block my-2 text-sm font-medium text-white">Start At</label>
                <input name="start_at" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5 " placeholder="Select date start" value="<?= old('start_at', $portfolio['start_at']); ?>">
                <?php if (session('errors.start_at')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.start_at') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="role" class="block my-2 text-sm font-medium text-white">Finish At</label>
                <input name="finish_at" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pl-10 p-2.5 " placeholder="Select date end" value="<?= old('finish_at', $portfolio['finish_at']); ?>">
                <?php if (session('errors.finish_at')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.finish_at') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="color" class="block my-2 text-normal font-medium text-white">Link</label>
                <input type="text" id="color" class="bg-white text-black text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Insert link here..." name="link" value="<?= old('link', $portfolio['link']); ?>">
                <?php if (session('errors.link')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.link') ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="content" class="block mb-2 mt-2 text-normal font-medium text-white">description</label>
                <textarea id="editor" name="description" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."><?= old('description', $portfolio['description']); ?></textarea>
                <?php if (session('errors.description')) : ?>
                    <p class="text-red-500 mt-2"><?= session('errors.description') ?></p>
                <?php endif; ?>
            </div>
            <button type="submit" class="text-white bg-sky-500 font-medium rounded-2xl text-sm px-6 py-1 text-center mt-4 mr-2 mb-2">Save</button>
        </form>
    </div>

</div>
<?= $this->endSection() ?>