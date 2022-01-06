<?php
require 'functions.php';

//memeriksa apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {
    //jika sudah ditekan dijalankan function tambah
    if (tambah($_POST) > 0) {
        echo "berhasil";
    } else {
        echo "gagal!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email">
            </li>
            <li>
                <label for="address">address : </label>
                <input type="text" name="address">
            </li>
            <li>
                <label for="gender">Jenis Kelamin: </label>
                <label><input type="radio" name="gender" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="gender" value="perempuan"> Perempuan</label>
            </li>
            <li>
                <label for="position">position : </label>
                <input type="text" name="position">
            </li>
            <li>
                <label for="status">status: </label>
                <select name="status">
                    <option>FullTime</option>
                    <option>PartTime</option>
                </select>
            </li>
            <button type="submit" name="submit">
                Tambah Data
            </button>
        </ul>
    </form>
</body>

</html>