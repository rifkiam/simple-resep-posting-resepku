<?= $this->extend('default'); ?>
<?= $this->section('content'); ?>
<div class="min-[300px]:mx-10 sm:mx-16 md:mx-[100px] lg:mx-[150px] xl:mx-[200px] 2xl:mx-[336px]">
    <h2 class="text-[#547794] mb-3 text-2xl">Registrasi</h2>
    <form action="<?= base_url() ?>/saveuser" method="POST">
        <?= csrf_field(); ?>
        <div class="my-4">
            <label for="fullname">Full Name</label></br>
            <input type="fullname" id="fullname" name="fullname" class="border" value="<?= old('fullname'); ?>">
        </div>
        <div class="my-4">
            <label for="email">Email</label></br>
            <input type="email" id="email" name="email" class="border" value="<?= old('email'); ?>">
        </div>
        <div class="my-4">
            <label for="username">Username</label></br>
            <input type="text" id="username" name="username" class="border" value="<?= old('username'); ?>">
        </div>
        <div class="my-4">
            <label for="password">Password</label></br>
            <input type="password" id="password" name="password" class="border">
        </div>
        <div class="mt-4">
            <label for="confirmpassword">Confirm Password</label></br>
            <input type="password" id="confirmpassword" name="confirmpassword" class="border">
        </div>
        <?php if(session()->getFlashData('pesan')):?>
        <div class="text-red-600 font-semibold" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
        <?php endif; ?>
        <div>
            <button type="submit" class="bg-[#547794] text-white px-4 py-2 rounded mt-4">Daftar</button>
        </div>
    </form>
</div>
<?= $this->endSection('content'); ?>