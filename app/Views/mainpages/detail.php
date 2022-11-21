<?= $this->extend('defaultloggedin'); ?>
<?= $this->section('content'); ?>
    <div class="min-[300px]:mx-10 sm:mx-16 md:mx-[100px] lg:mx-[150px] xl:mx-[200px] 2xl:mx-[336px]">
        <div class="mb-[22px]">
            <img src="/img/<?= $resep['foto']; ?>" class="mx-auto rounded-md">
        </div>
        <div class="">
            <div class="">
                <h1 class="text-[36px] font-semibold"><?= $resep['judul']; ?></h1>
                <p class="text-[18px] mb-6"><?= $resep['deskripsi']; ?></p>
                <h2 class="text-[24px] font-normal">Bahan-bahan</h2>
                <p class="bahan-langkah mb-6" id="bahan"><?= $resep['bahan']; ?></p>
                <h2 class="text-[24px] font-normal">Langkah-langkah</h2>
                <p class="bahan-langkah" id="langkah"><?= $resep['langkah']; ?></p>
                <!-- <a href="/comics">Back to comics list</a> -->
            </div>
        </div>
    </div>
<?= $this->endSection('content'); ?>