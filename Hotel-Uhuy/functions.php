<?php
// koneksi
    $conn = mysqli_connect("localhost", "root", "yoyo", "hotel-uhuy"); //parameter

    function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


    function create($data) {
    global $conn;
    // ambil data dari tiap elemen form
    $nama_pemesan = htmlspecialchars ($data["nama_pemesan"]);
    $jenis_kelamin = htmlspecialchars ($data["jenis_kelamin"]);
    $no_identitas = htmlspecialchars ($data["no_identitas"]);
    $tipe_kamar = htmlspecialchars ($data["tipe_kamar"]);
    $lama_menginap = htmlspecialchars ($data["lama_menginap"]);
    $discount = htmlspecialchars ($data["discount"]);
    $total_bayar = htmlspecialchars ($data["total_bayar"]);

    //INSERT DATA query
    $query = "INSERT INTO data_admin
                VALUES
                ('', '$nama_pemesan', '$jenis_kelamin', '$no_identitas', '$tipe_kamar',
                    '$lama_menginap', '$discount', '$total_bayar');
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

    function delete($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM data_admin WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function update($data) {
global $conn;

    // ambil data dari tiap elemen form
    $id = $data["id"];
    $nama_pemesan = htmlspecialchars ($data["nama_pemesan"]);
    $jenis_kelamin = htmlspecialchars ($data["jenis_kelamin"]);
    $no_identitas = htmlspecialchars ($data["no_identitas"]);
    $tipe_kamar = htmlspecialchars ($data["tipe_kamar"]);
    $lama_menginap = htmlspecialchars ($data["lama_menginap"]);
    $discount = htmlspecialchars ($data["discount"]);
    $total_bayar = htmlspecialchars ($data["total_bayar"]);

    //INSERT DATA query
    $query = "UPDATE data_admin SET
            nama_pemesan = '$nama_pemesan',
            jenis_kelamin = '$jenis_kelamin',
            no_identitas = '$no_identitas',
            tipe_kamar = '$tipe_kamar',
            lama_menginap = '$lama_menginap',
            discount = '$discount',
            total_bayar = '$total_bayar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>