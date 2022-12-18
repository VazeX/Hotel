<?php
//konksi database
require 'functions.php';

//ambil data pemesan
$data_admin = query("SELECT * FROM data_admin");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Tamu Hotel</h1>
<a href="Create.php">Tambah Data Pemesan</a>
<br></br>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama Pemesan </th>
    <th>Jenis Kelamin </th>
    <th>Nomor Identitas </th>
    <th>Tipe Kamar </th>
    <th>Lama Menginap </th>
    <th>Discount </th>
    <th>Total Bayar </th>
</tr>

<?php $i = 1;?>
<?php foreach( $data_admin as $row) : ?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="update.php?id=<?= $row["id"]; ?>">Edit</a>
        <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin hapus data ini?');">Delete</a>
    </td>
    <td><?= $row["nama_pemesan"]; ?></td>
    <td><?= $row["jenis_kelamin"]; ?></td>
    <td><?= $row["no_identitas"]; ?></td>
    <td><?= $row["tipe_kamar"]; ?></td>
    <td><?= $row["lama_menginap"]; ?></td>
    <td><?= $row["discount"]; ?></td>
    <td><?= $row["total_bayar"]; ?></td>
</tr>
<?php $i++;?>
<?php endforeach;?>

</table>

</body>
</html>