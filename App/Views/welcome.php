<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- data receive from $data = [..] and Exctracted to $Var -->
  <title><?= $title; ?></title>
</head>

<body>
  <!-- you can use '.' or '/' for directory separator between folder and file -->
  <?= required('layouts.components.navbar'); ?>

  <!-- receive data from view function and extract key on array as -->
  <h1><?= $title; ?></h1>

  <!-- Bad example
        do not use for js file like this
        because '.' will change to '/';
    -->
  <script src="<?= base_url('public.script.js'); ?>"></script>

  <!-- Good example
        use like this
    -->
  <script src="<?= base_url(); ?>public/assets/js/script.js"></script>

  <!-- or -->
  <script src="<?= base_url('public.assets.js'); ?>/script.js"></script>
</body>

</html>