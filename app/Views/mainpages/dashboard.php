<?= $this->extend('defaultloggedin'); ?>
<?= $this->section('content'); ?>
<div class="min-[300px]:mx-10 sm:mx-16 md:mx-[100px] lg:mx-[150px] xl:mx-[200px] 2xl:mx-[336px]">
    <!-- <div>
        <h1>Welcome back,!</h1>
    </div> -->
    <div class="mb-3">
        <h1 class="font-semibold text-[18px]">Resep Terbaru</h1>
    </div>

    <?php if(session()->getFlashData('pesan')):?>
        <div class="text-green-500 font-semibold mb-2" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-[37px]">
        <?php foreach ($resep as $res) : ?>
        <div class="">
            <div class="align-middle overflow-hidden h-[165px] ">
                <img src="/img/<?= $res['foto']; ?>" class="w-full h-full object-cover" alt="">
            </div>
            <h2 class="mt-2 text-[18px] text-[#547794]"><a href="<?= base_url(); ?>/dashboard/<?= $res['slug']; ?>" class="hover:underline"><?= $res['judul']; ?></a></h2>
            <h2 class="text-[14px]"><?= $res['deskripsi']; ?></h2>
            <div class="w-full bg-[#C2C9CD] rounded-xl mt-2 py-[10px]"><button class="w-full font-medium text-[14px]">Suka</button></div>
        </div>
        <?php endforeach ?>
    </div>
</div>
<?= $this->endSection('content'); ?>