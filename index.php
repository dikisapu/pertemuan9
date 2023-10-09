<?php
$conn= mysqli_connect("localhost","root","","mahasiswa");
$result=mysqli_query($conn,"SELECT * FROM mhs");
// var_dump($conn);
// var_dump($result);
if( !$result){
    echo mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NO.</th>
        <th>AKSI</th>
        <th>gambar</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>email</th>
        <th>jurusan</th>
    </tr>
    <tr>
        <td>1</td>
        <td>
            <a href="">ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td>
            <img src="img/laptopadvan.jpg" alt="" width="50">
        </td>
        <td>
            <p>212310019</p>
        </td>
        <td>
            <p>DIKI SANTOSO</p>
        </td>
        <td>
            <p>dikis7256@gmail.com</p>
        </td>
        <td>
            <p>Informatika</p>
        </td>
    </tr>

    </table>
    
</body>
</html>