<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../../public/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
    <title>Welcome Page</title>
</head>
<body>
    <?= $this->include('template/navbar'); ?>
    <div class="container mx-auto">
        <?= $this->renderSection('content'); ?>
    </div>
    <script>
        // $('.nav').on('click', function() {
        //     $('.nav').removeClass('bg-slate-100');
        //     $(this).addClass('bg-slate-100');
        // });
    </script>
</body>
</html>