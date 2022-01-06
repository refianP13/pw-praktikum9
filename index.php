<?php
//memanggil file functions.php
require 'functions.php';

//memanggil function query pengambilan data pada table mahasiswa
//lalu ditampung kedalam variable mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan UP</title>
</head>

<body>
    <h1>Daftar karyawan</h1>

    <a href="tambah.php">Tambah Karyawan</a>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>
                No.
            </th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Address</th>
            <th>gender</th>
            <th>position</th>
            <th>status</th>
        </tr>

        <?php foreach ($mahasiswa as $item) : ?>
            <tr>
                <td><?= $item["id"] ?></td>
                <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a></td>
                <td><?= $item["nama"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["gender"] ?></td>
                <td><?= $item["position"] ?></td>
                <td><?= $item["status"] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>