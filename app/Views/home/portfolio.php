<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="pt-10 sm:pt-20 pb-10 px-8">
    <div class="">
        <p class="text-4xl sm:text-5xl w-full tracking-tighter shadow-lg leading-tight font-bold text-white pb-20 text-center">Portfolio</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Kolom 1 -->
            <div class="">
                <p class="text-4xl sm:text-5xl w-full tracking-tight shadow-lg leading-tight font-bold text-white py-3">Hi, I'm Alif Akbar Irdhobilla, a backend developer from Indonesia. Check out my portfolio to see my work!</p>
                <p class="text-base sm:text-base w-full tracking-tighter shadow-lg leading-tight font-normal text-white pt-3">"There are no limits to what a person can achieve when they pursue their dreams!"</p>
                <p class="text-base sm:text-base w-full tracking-tighter shadow-lg leading-tight font-normal text-white pt-2 pb-10">Monkey D. Luffy (One Piece)</p>
            </div>
            <!-- Kolom 2 -->
            <div class="">
                <div class="flex justify-center items-center">
                    <img src="img/profil.jpg" alt="Gambar Tengah" class="rounded-lg">
                </div>
            </div>
        </div>
        <!-- <hr class="border border-white rounded-lg mt-2 mb-2 w-full"> -->
        <p class="text-base sm:text-base w-full tracking-tighter shadow-lg leading-relaxed font-normal text-white pt-9 sm:pt-3">
            I am a graduate of Bachelor's degree in Computer Engineering majoring in Informatics Engineering from Muhammadiyah University of Sidoarjo. My expertise lies in web development using Laravel, Bootstrap, Tailwind, MySQL, and PostgreSQL. Additionally, I have a strong understanding of database analysis and website security. Moreover, I have a keen interest and skills in creating designs for Instagram content. I take pleasure in crafting appealing and creative designs that enhance visual content and attract users.
        </p>
        <p class="text-base sm:text-base w-full tracking-tighter shadow-lg leading-relaxed font-normal text-white pt-3">
            By combining my technical knowledge with design skills, I strive to deliver a complete and satisfying user experience.
        </p>
        <div class="border border-neutral-700 rounded-lg mt-8 py-6 p-3">
            <p class="text-base sm:text-base w-full tracking-tight shadow-lg leading-tight font-bold text-white ">
                My Social Links
            </p>
            <!-- <hr class="border border-white rounded-lg w-full"> -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-3">
                <!-- Kolom 1 -->
                <div class="bg-white rounded-lg py-3 px-2 sm:px-4 ">
                    <p class="text-neutral-700 text-xs">Personal Site</p>
                    <a href="#" class="text-sm sm:text-base" target="_blank">CreativyCove</a>
                </div>
                <div class="bg-white rounded-lg py-3 px-2 sm:px-4 ">
                    <p class="text-neutral-700 text-xs">Personal Email</p>
                    <a href="mailto:alifakbar8800@gmail.com" class="text-sm sm:text-base" target="_blank">alifakbar8800@gmail.com</a>
                </div>
                <div class="bg-white rounded-lg py-3 px-2 sm:px-4 ">
                    <p class="text-neutral-700 text-xs">Github Username</p>
                    <a href="https://github.com/alifakbarr" class="text-sm sm:text-base" target="_blank">alifakbarr</a>
                </div>
                <div class="bg-white rounded-lg py-3 px-2 sm:px-4 ">
                    <p class="text-neutral-700 text-xs">Linkedin Username</p>
                    <a href="https://www.linkedin.com/in/alifakbari/" class="text-sm sm:text-base" target="_blank">alifakbari</a>
                </div>
                <div class="bg-white rounded-lg py-3 px-2 sm:px-4 ">
                    <p class="text-neutral-700 text-xs">Instagram Username</p>
                    <a href="https://www.instagram.com/alifakbar_8/" class="text-sm sm:text-base" target="_blank">alifakbar_8</a>
                </div>
            </div>
        </div>

        <div class="mt-7 px-3">
            <ol class="relative border-l border-gray-700">
                <li class="mb-10 ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-neutral-900 rounded-full -left-3 ring-8 ring-neutral-200">
                        <svg class="w-2.5 h-2.5 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-white">Bootcamp Cyber Security Universitas Muhammadiyah Sidoarjo <span class="bg-white text-black text-sm font-medium mr-2 px-2.5 py-0.5 rounded ml-3">Project</span></h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-neutral-500">Released on January 13th, 2022</time>
                    <p class="mb-4 text-base font-normal text-neutral-300">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                </li>
                <li class="mb-10 ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-neutral-900 rounded-full -left-3 ring-8 ring-neutral-200">
                        <svg class="w-2.5 h-2.5 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Bootcamp Cyber Security Universitas Muhammadiyah Sidoarjo <span class="bg-white text-black text-sm font-medium mr-2 px-2.5 py-0.5 rounded ml-3">Participant</span></h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-neutral-500">Released on January 13th, 2022</time>
                    <p class="mb-4 text-base font-normal text-neutral-300">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                </li>
                <li class="mb-10 ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-neutral-900 rounded-full -left-3 ring-8 ring-neutral-200">
                        <svg class="w-2.5 h-2.5 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Bootcamp Cyber Security Universitas Muhammadiyah Sidoarjo <span class="bg-white text-black text-sm font-medium mr-2 px-2.5 py-0.5 rounded ml-3">Internship</span></h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-neutral-500">Released on January 13th, 2022</time>
                    <p class="mb-4 text-base font-normal text-neutral-300">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                </li>
                <li class="mb-10 ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-neutral-900 rounded-full -left-3 ring-8 ring-neutral-200">
                        <svg class="w-2.5 h-2.5 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Bootcamp Cyber Security Universitas Muhammadiyah Sidoarjo <span class="bg-white text-black text-sm font-medium mr-2 px-2.5 py-0.5 rounded ml-3">Employee</span></h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-neutral-500">Released on January 13th, 2022</time>
                    <p class="mb-4 text-base font-normal text-neutral-300">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                </li>
                <li class="mb-10 ml-6">
                    <span class="absolute flex items-center justify-center w-6 h-6 bg-neutral-900 rounded-full -left-3 ring-8 ring-neutral-200">
                        <svg class="w-2.5 h-2.5 text-neutral-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Bootcamp Cyber Security Universitas Muhammadiyah Sidoarjo <span class="bg-white text-black text-sm font-medium mr-2 px-2.5 py-0.5 rounded ml-3">Employee</span></h3>
                    <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-neutral-500">Released on January 13th, 2022</time>
                    <p class="mb-4 text-base font-normal text-neutral-300">Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                </li>
            </ol>
        </div>

    </div>
</div>

<?= $this->endSection() ?>