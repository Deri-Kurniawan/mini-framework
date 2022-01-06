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

  <h1>User Index</h1>
  <a href="<?= base_url('users.form'); ?>">+ Add Data +</a>
  <br>

  <?php if (isset($_GET['status']) == 1) {
    echo 'Success';
  } elseif (isset($_GET['status']) == -1) {
    echo 'Failed';
  }
  ?>

  <table style="text-align: center;">
    <tr>
      <th>NO</th>
      <th>ID</th>
      <th>NAME</th>
      <th>ACTION</th>
    </tr>
    <?php
    $no = 1;
    foreach ($data as $d) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $d['id'] ?></td>
      <td><?= $d['name'] ?></td>
      <td>
        <a href="<?= base_url('users/detail/' . $d['id']); ?>">Detail</a>
        <a href="<?= base_url('users/delete/' . $d['id']); ?>"
          onclick="return confirm('Are you sure want delete user with name <?= $d['name'] ?> ?')">Delete</a>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</body>

</html>