<?= addComponent('layouts.components.header', $title) ?>
<?= addComponent('layouts.components.navbar') ?>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
  </tr>
  <tr>
    <td><?= ucfirst($data['id']) ?></td>
    <td><?= ucfirst($data['name']) ?></td>
  </tr>
</table>

<a href="<?= baseUrl('users/index'); ?>">Back</a>

<?= addComponent('layouts.components.footer') ?>