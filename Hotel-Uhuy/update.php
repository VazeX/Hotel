<?php
require 'functions.php';

//connect database 
$conn = mysqli_connect("localhost", "root", "yoyo", "hotel-uhuy");

//ambil data di URL
$id = $_GET["id"];

//query data berdasarkan id
$admin = query("SELECT * FROM data_admin WHERE id = $id")[0];


//logika submit button
if ( isset($_POST["submit"]) ) {

    //cek data berhasil diubah
    if( update($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'admin.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'admin.php';
    </script>";
        
    }
}
if ($admin['tipe_kamar']) {
    $select="selected";
   }else{
    $select="";
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data Pemesan</title>
</head>
<body>
    <h1> Update Data Pemesan</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $admin["id"]; ?>">
        <ul>
            <li>
                <label for="nama_pemesan">Nama Pemesan:</label>
                <input type="text" name="nama_pemesan" id="nama_pemesan" 
                required value="<?= $admin["nama_pemesan"]; ?>">
            </li>
            <li>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($admin['jenis_kelamin']=='Laki-laki') echo 'checked'?> >Laki-laki 
                <input type="radio" name="jenis_kelamin" value="Perempuan"<?php if($admin['jenis_kelamin']=='Perempuan') echo 'checked'?> >Perempuan

            </li>
            
            <li>
                <label for="no_identitas">Nomor Identitas:</label>
                <input type="text" name="no_identitas" id="no_identitas"
                required value="<?= $admin["no_identitas"]; ?>">
            </li>
            <li>
                <label for="tipe_kamar">Tipe Kamar:</label>
                <select name="tipe_kamar" id="tipe_kamar" value="<?= $admin["tipe_kamar"]; ?>">
                <option value="Standar" if($admin['tipe_kamar']=='Standar') echo 'selected'?>> Standar </option>
                <option value="Deluxe" if($admin['tipe_kamar']=='Deluxe') echo 'selected'?>> Deluxe </option>
                <option value="Family" if($admin['tipe_kamar']=='Family') echo 'selected'?>> Family </option>  
                </select>
            </li>
            <li>
                <label for="lama_menginap">Lama Menginap:</label>
                <input type="text" name="lama_menginap" id="lama_menginap" value="<?= $admin["lama_menginap"]; ?>">
            </li>
            <li>
                <label for="discount">Discount:</label>
                <input type="text" name="discount" id="discount" value="<?= $admin["discount"]; ?>">
            </li>
            <li>
                <label for="total_bayar">Total Bayar:</label>
                <input type="text" name="total_bayar" id="total_bayar" value="<?= $admin["total_bayar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update Data</button>
            </li>




        </ul>


    </form>





</body>
</html>