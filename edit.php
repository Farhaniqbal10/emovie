<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $idfilm = $_POST['idfilm'];
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
	$harga = $_POST['harga'];
	$tanggal = $_POST['tanggal'];
	$jadwal = $_POST['jadwal'];
	$jadwal2 = $_POST['jadwal2'];

    // buat query update
    $sql = "UPDATE datafilm SET kategori='$kategori', judul='$judul', harga='$harga', tanggal='$tanggal', jadwal='$jadwal', jadwal2='$jadwal2'	 WHERE idfilm=$idfilm";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list_film.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
