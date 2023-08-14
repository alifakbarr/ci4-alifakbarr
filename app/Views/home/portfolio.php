<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="pt-10 sm:pt-20 pb-10 px-8 mt-20">
    <div class="">
        <p class="text-4xl sm:text-5xl w-full tracking-tighter leading-tight font-bold text-black pb-20 text-center">Portfolio</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Kolom 1 -->
            <div class="sm:pt-28">
                <p class="text-4xl sm:text-5xl w-full tracking-tight leading-tight font-bold text-black py-3">Hi, I'm <span class="bg-yellow-500">Alif Akbar Irdhobilla</span>, backend developer from Indonesia. Check out my portfolio to see my work!</p>
                <p class="text-base sm:text-base w-full tracking-tighter leading-tight font-normal text-black bg-yellow-500 mt-3">"There are no limits to what a person can achieve when they pursue their dreams!"</p>
                <p class="text-base sm:text-base w-full tracking-tighter leading-tight font-normal text-black pt-2 pb-10">Monkey D. Luffy (One Piece)</p>
            </div>
            <!-- Kolom 2 -->
            <div class="">
                <div class="flex justify-center items-center">
                    <img src="img/profil.jpg" alt="Gambar Tengah" class="rounded-lg">
                </div>
            </div>
        </div>
        <!-- <hr class="border border-white rounded-lg mt-2 mb-2 w-full"> -->
        <p class="text-base sm:text-base w-full tracking-tighter leading-relaxed font-normal text-gray-800 pt-9 sm:pt-10">
            <span class="bg-yellow-500">I am a graduate of Bachelor's degree in Computer Engineering</span> majoring in Informatics Engineering from Muhammadiyah University of Sidoarjo. My expertise lies in web development using Laravel, Bootstrap, Tailwind, MySQL, and PostgreSQL. Additionally, I have a strong understanding of database analysis and website security. Moreover, I have a keen interest and skills in creating designs for Instagram content. I take pleasure in crafting appealing and creative designs that enhance visual content and attract users.
        </p>
        <p class="text-base sm:text-base w-full tracking-tighter leading-relaxed font-normal text-gray-800 bg-yellow-500 mt-3">
            By combining my technical knowledge with design skills, I strive to deliver a complete and satisfying user experience.
        </p>
        <div class="border border-yellow-500 rounded-lg mt-8 pt-3 pb-5 p-3">
            <p class="text-base sm:text-base w-full tracking-tight leading-tight font-bold text-gray-800 ">
                My Social Links
            </p>
            <!-- <hr class="border border-white rounded-lg w-full"> -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-3">
                <a href="#" target="_blank">
                    <div class="bg-white rounded-lg py-3 px-2 sm:px-4 hover:bg-gray-100">
                        <p class="text-neutral-700 text-xs">Personal Site</p>
                        <p class="text-sm sm:text-base">CreativyCove</p>
                    </div>
                </a>
                <a href="mailto:alifakbar8800@gmail.com" target="_blank">
                    <div class="bg-white rounded-lg py-3 px-2 sm:px-4 hover:bg-gray-100">
                        <p class="text-neutral-700 text-xs">Personal Email</p>
                        <p class="text-sm sm:text-base">alifakbar8800@gmail.com</p>
                    </div>
                </a>
                <a href="https://github.com/alifakbarr" target="_blank">
                    <div class="bg-white rounded-lg py-3 px-2 sm:px-4 hover:bg-gray-100">
                        <p class="text-neutral-700 text-xs">Github Username</p>
                        <p class="text-sm sm:text-base">alifakbarr</p>
                    </div>
                </a>
                <a href="https://www.linkedin.com/in/alifakbari/" target="_blank">
                    <div class="bg-white rounded-lg py-3 px-2 sm:px-4 hover:bg-gray-100">
                        <p class="text-neutral-700 text-xs">Linkedin Username</p>
                        <p class=" text-sm sm:text-base">alifakbari</p>
                    </div>
                </a>
                <a href="https://www.instagram.com/alifakbar_8/" target="_blank">
                    <div class="bg-white rounded-lg py-3 px-2 sm:px-4 hover:bg-gray-100">
                        <p class="text-neutral-700 text-xs">Instagram Username</p>
                        <p class="text-sm sm:text-base" target="_blank">alifakbar_8</p>
                    </div>
                </a>
            </div>
        </div>

        <p class="text-3xl sm:text-4xl w-full tracking-tight leading-tight font-bold text-gray-800 mt-10">
            My Journey
        </p>
        <p class="text-sm sm:text-base tracking-tighter leading-tight font-normal text-black mt-3">"If you don't risk your life, you can't create a future. Right?"</p>
        <p class="text-sm sm:text-base w-full tracking-tighter leading-tight font-normal text-black pb-7">Brook (One Piece)</p>
        <div id="portfolio" class="px-3 mb-28">
            <ol class="relative border-l border-gray-700">
                <?php foreach ($portfolio as $p) : ?>
                    <li class="mb-10 ml-6">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-neutral-900 rounded-full -left-3 ring-8 ring-neutral-200">
                            <svg class="w-2.5 h-2.5 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-800"><?= $p['title'] ?><span class="bg-gray-900 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded ml-3"><?= ucwords($p['role']) ?></span></h3>
                        <?php if ($p['finish_at'] !== '') : ?>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-500">Start on <?= date("M Y", strtotime($p['start_at'])) ?> & Finish at <?= date("M Y", strtotime($p['finish_at'])) ?> </time>
                        <?php endif ?>
                        <div class="mb-2">
                            <article class="prose text-black"><?= $p['description'] ?></article>
                        </div>
                        <?php if ($p['link'] !== '') : ?>
                            <a href="<?= $p['link'] ?>" target="_blank" class="text-white hover:text-black text-xs font-medium px-2 py-1 rounded-xl bg-gray-900 hover:bg-gray-200">Check Me!</a>
                        <?php else : ?>
                            <div></div>
                        <?php endif ?>
                    </li>
                <?php endforeach ?>
            </ol>
        </div>

    </div>
</div>

<?= $this->endSection() ?>