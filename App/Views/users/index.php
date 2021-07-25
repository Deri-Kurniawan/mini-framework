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
    <table>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
        </tr>
        <?php foreach ($data as $d) : ?>
        <tr>
            <td><?= $d['id'] ?></td>
            <td><?= $d['nama'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>