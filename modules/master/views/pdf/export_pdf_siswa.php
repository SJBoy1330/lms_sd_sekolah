<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export siswa</title>
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
            <th>username</th>
            <th>kelas</th>
            <th>jenis kelamin</th>
        </tr>
        <?php foreach ($data_siswa as $i => $siswa) : ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= $siswa->nama ?></td>
                <td><?= $siswa->username ?></td>
                <td><?= $siswa->kelas ?></td>
                <td><?= $siswa->gender === 'L' ? 'Laki - laki' : 'Perempuan' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>