<?php
require 'functions.php';
//connect database 
$conn = mysqli_connect("localhost", "root", "yoyo", "hotel-uhuy");

//logika submit button
if( isset($_POST["submit"]) ){

    //cek data 
    if( create($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil dibuat!');
            document.location.href = 'admin.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('data gagal dibuat!');
        document.location.href = 'admin.php';
    </script>";
        
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Pemesan</title>
</head>
<body>
    <h1> Tambah Data Pemesan</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_pemesan">Nama Pemesan:</label>
                <input type="text" name="nama_pemesan" id="nama_pemesan" 
                required>
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki 
                 <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </li>
            <li>
                <label for="no_identitas">Nomor Identitas:</label>
                <input type="text" name="no_identitas" id="no_identitas"
                required>
            </li>
            <li>
                <label for="tipe_kamar">Tipe Kamar:</label>
                <select name="tipe_kamar" id="tipe_kamar">
                <option value="Standar"> Standar </option>
                <option value="Deluxe"> Deluxe </option>
                <option value="Family"> Family </option>  
                </select> 
            </li>
            <li>
                <label for="lama_menginap">Lama Menginap:</label>
                <input type="text" name="lama_menginap" id="lama_menginap">
            </li>
            <li>
                <label for="discount">Discount:</label>
                <input type="text" name="discount" id="discount">
            </li>
            <li>
                <label for="total_bayar">Total Bayar:</label>
                <input type="text" name="total_bayar" id="total_bayar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>




        </ul>


    </form>





</body>
</html>