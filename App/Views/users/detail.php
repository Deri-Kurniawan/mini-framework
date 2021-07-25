<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile <?= $title; ?></title>
</head>

<body>
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

    <a href="<?= base_url('users.index'); ?>">Back</a>
</body>

</html>