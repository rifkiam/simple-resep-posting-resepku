<?= $this->extend('defaultloggedin');?>
<?= $this->section('content'); ?>
<div class="min-[300px]:mx-10 sm:mx-16 md:mx-[100px] lg:mx-[150px] xl:mx-[200px] 2xl:mx-[336px]">
    <h2 class="text-[#547794] mb-3 text-2xl">Tulis Resepmu ...</h2>
    <form action="<?= base_url(); ?>/saveresep" method="POST" enctype="multipart/form-data">
        <div class="mb-6">
            <label for="judul">Judul</label><br>
            <input type="text" class="border rounded-lg shadow-sm w-full h-10" id="judul" name="judul">
        </div>
        <div class="text-red-700 font-bold">
            <?= $validation->getError('judul'); ?>
        </div>
        <div class="mb-6">
            <label for="deskripsi">Deskripsi</label><br>
            <div class="border rounded-md shadow-sm"><textarea name="deskripsi" id="deskripsi" style="width: 100%; margin: 0; padding: 0; border-width: 0;"></textarea></div>
        </div>
        <div class="mb-6">
            <label for="bahan">Bahan</label><br>
            <div class="border rounded-md shadow-sm"><textarea name="bahan" id="bahan" style="width: 100%; margin: 0; padding: 0; border-width: 0;"></textarea></div>
        </div>
        <div class="mb-6">
            <label for="langkah">Langkah</label><br>
            <div class="border rounded-md shadow-sm"><textarea name="langkah" id="langkah" style="width: 100%; margin: 0; padding: 0; border-width: 0;"></textarea></div>
        </div>
        <div class="mb-6">
            <!-- <label for="sampul">Upload Foto Masakan</label><br>
            <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()"> -->
            <label for="foto">Upload file</label>
            <input class="block w-full border rounded-md cursor-pointer focus:outline-none shadow-sm" id="foto" name="foto" type="file">
        </div>
        <div class="text-red-700 font-bold">
            <?= $validation->getError('foto'); ?>
        </div>
        <div class="w-full">
            <button type="submit" class="bg-[#547794] rounded-md px-3 text-white w-full py-[15px]" onclick="writeText()">Terbitkan Resep</button>
        </div>
    </form>
</div>
<?= $this->endSection('content'); ?>