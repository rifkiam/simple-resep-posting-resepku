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
      }
</script>
<?= $this->endSection('customjs'); ?>