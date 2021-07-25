<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <h1>User Index</h1>
    <a href="<?= base_url('users.form'); ?>">+ Add Data +</a>
    <br>

    <table style="text-align: center;">
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>NAMA</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data as $d) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d['id'] ?></td>
            <td><?= $d['nama'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>