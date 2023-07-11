<?php

include("koneksi.php");

if( isset($_GET['idfilm']) ){

    // ambil id dari query string
    $idfilm = $_GET['idfilm'];

    // buat query hapus
    $sql = "DELETE FROM datafilm WHERE idfilm=$idfilm";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_film.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>