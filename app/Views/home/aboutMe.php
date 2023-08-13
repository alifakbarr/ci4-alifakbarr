<?= $this->extend('/layout/template') ?>
<?= $this->section('content') ?>
<div class="pt-10 sm:pt-20 pb-10 px-8 mt-20">
    <div class="text-center">
        <p class="text-4xl sm:text-4xl w-full tracking-tighter leading-tight font-bold text-black pb-16">About Me</p>
        <div class="flex justify-center items-center pb-6">
            <img src="img/bookmark.png" alt="Gambar Tengah" class="h-20">
        </div>
        <p class="text-4xl sm:text-5xl w-full tracking-tight leading-tight font-bold text-black py-3">CreativityCove</p>
        <p class="text-base sm:text-base w-full tracking-tighter leading-tight font-normal text-black pb-3">Enjoy exploring, creating, and imagining, CreativityCove, where limitless creative energy is everything.</p>
        <p class="text-xs sm:text-xs w-full tracking-tighter leading-tight font-normal text-black pb-6">Created At Jun 12, 2023 | Made By alifakbarr</p>
        <!-- <hr class="border border-white rounded-lg mt-2 mb-2 w-full"> -->
    </div>

    <div class="mt-12">
        <p class="text-base sm:text-lg w-full tracking-tight shadow-lg leading-tight font-bold text-black pb-2 ">Welcome to CreativityCove!</p>
        <div class="text-black bg-gray-100 rounded-lg p-6 hover:bg-neutral-200">
            <p class="text-sm sm:text-base w-full tracking-tighter leading-tight font-normal pb-3"><b>Where</b> imagination and creativity unite,
                Each idea becomes a gem, shining in vibrant light.
                Explore the ocean of thoughts, find new inspiration,
                And let the love for art lead your every action.</p>
            <p class="text-sm sm:text-base w-full tracking-tighter leading-tight font-normal pb-3"><b>In this Cove,</b> we embrace beautiful creations,
                Believing every innovation builds brighter foundations.
                Together, let's shape a world full of wonder,
                In a place where creativity thrives in love and surrender.</p>
        </div>
    </div>
    <div class="mt-5 mb-20">
        <p class="text-base sm:text-lg w-full tracking-tight shadow-lg leading-tight font-bold text-black pb-2 ">Philosophy About CreativityCove</p>
        <div class="text-black bg-gray-100 rounded-lg p-6 hover:bg-neutral-200">
            <p class="text-sm sm:text-base w-full tracking-tighter leading-tight font-normal pb-3"><b>CreativityCove:</b> Cove is a hidden place, and this name explores the philosophy that creativity often comes from unexpected sources, just like hidden corners in nature. Your website can become a space where unique and creative ideas emerge..</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>