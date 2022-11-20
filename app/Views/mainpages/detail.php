<?= $this->extend('defaultloggedin'); ?>
<?= $this->section('content'); ?>
    <div class="min-[300px]:mx-10 sm:mx-16 md:mx-[100px] lg:mx-[150px] xl:mx-[200px] 2xl:mx-[336px]">
        <div class="mb-[22px]">
            <img src="/img/<?= $resep['foto']; ?>" class="mx-auto">
        </div>
        <div class="">
            <div class="">
                <h1 class="text-[36px] font-semibold"><?= $resep['judul']; ?></h1>
                <p class="text-[18px] mb-6"><?= $resep['deskripsi']; ?></p>
                <p><?= $resep['bahan_dan_langkah']; ?></p>
                <!-- <a href="/comics">Back to comics list</a> -->
            </div>
        </div>
    </div>
<?= $this->endSection('content'); ?>