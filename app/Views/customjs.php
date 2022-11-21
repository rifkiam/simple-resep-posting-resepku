<?= $this->section('customjs'); ?>
<script>
    function previewImg() {
        const sampul = document.querySelector('#sampul');
        const sampulLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');
  
        sampulLabel.textContent = sampul.files[0].name;
  
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
  
        fileSampul.onload = function(event) {
          imgPreview.src = event.target.result;
      }
      
      function writeText() {
        console.log("test");
        const bahan = document.getElementById('bahan').value;
        const langkah = document.getElementById('langkah').value;
        // let t = '';
        // t = ele.value;
        console.log(bahan, langkah);
        document.getElementById('bahan').innerHTML = bahan.replace(/(\r\n|\r|\n)/g, '<br>');
        document.getElementById('langkah').innerHTML = langkah.replace(/(\r\n|\r|\n)/g, '<br>');
      }
</script>
<?= $this->endSection('customjs'); ?>