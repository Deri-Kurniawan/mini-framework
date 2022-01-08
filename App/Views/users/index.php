<?= addComponent('layouts.components.header', $title) ?>
<?= addComponent('layouts.components.navbar') ?>

<h1>User Index</h1>
<a href="<?= baseUrl('users/add'); ?>">+ Add Data +</a>
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
      <a href="<?= baseUrl('users/detail/' . $d['id']); ?>">Detail</a>
      <form action="<?= baseUrl('users/delete/' . $d['id']); ?>" method="POST">
        <button type="submit" onclick="return confirm('Are you sure want delete user with name <?= $d['name'] ?> ?')">Delete</button>
      </form>
    </td>
  </tr>
  <?php endforeach ?>
</table>

<?= addComponent('layouts.components.footer') ?>