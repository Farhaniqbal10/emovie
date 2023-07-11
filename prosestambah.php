<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
	$tanggal = $_POST['tanggal'];
	$jadwal = $_POST['jadwal'];
	$jadwal2 = $_POST['jadwal2'];

    // buat query
    $sql = "INSERT INTO datafilm (kategori, judul, tanggal, jadwal, jadwal2) VALUE ('$kategori', '$judul','$tanggal','$jadwal'
	, '$jadwal2')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>