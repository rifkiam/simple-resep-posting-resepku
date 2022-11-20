<?= $this->extend('default'); ?>
<?= $this->section('content'); ?>
<div class="min-[300px]:mx-10 sm:mx-16 md:mx-[100px] lg:mx-[150px] xl:mx-[200px] 2xl:mx-[336px]">
    <h2 class="text-[#547794] mb-3 text-2xl">Login</h2>
    <form action="<?= base_url(); ?>/verify/login" method="POST" enctype="multipart/form-data">
        <div class="my-4">
            <label for="username">Username</label></br>
            <input type="text" id="username" name="username" class="border">
        </div>
        <div class="my-4">
            <label for="password">Password</label></br>
            <input type="password" id="password" name="password" class="border">
        </div>
        <button type="submit">Login</button>
    </form>
    <br>

    <?php if(session()->getFlashData('pesan')):?>
        <div class="text-green-500 font-semibold" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="text-red-700 font-bold">
          <?= session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <p>Belum punya akun? daftar di <a href="/registrasi" class="text-blue-500 visited:text-purple-500">sini</a></p>
</div>
<?= $this->endSection('content'); ?>