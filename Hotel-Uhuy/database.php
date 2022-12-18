<?php
$server = "localhost";
$database = "hotel-uhuy";
$username = "root";
$password = "yoyo";

$database = mysqli_connect($server, $username, $password, $database);
// sesuaikan dengan detail database
// membuat koneksi

// mengecek koneksi
if ($database) {
    echo "Database Terhubung";
} else {
    echo"Database Error";
}

?>