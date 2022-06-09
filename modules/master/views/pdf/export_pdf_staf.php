<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Staf</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>user id</th>
            <th>role</th>
        </tr>
        <?php foreach ($data_staf as $i => $staf) : ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $staf->nama ?></td>
                <td><?= $staf->username ?></td>
                <td><?= $staf->role ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>