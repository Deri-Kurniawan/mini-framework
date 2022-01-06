<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
</head>

<body>
  <?= addComponent('layouts.components.navbar') ?>

  <form action="<?= base_url('users.save'); ?>" method="post">
    <input type="text" name="name" id="name" class="" value="" placeholder="">
    <button>simpan</button>
  </form>
</body>

</html>