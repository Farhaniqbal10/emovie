<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style1.css" />
</head>		
  <body>
    <h1>Form Daftar Film</h1>
    <div class="wrap">
      <div class="container">
        <form action="" method="POST">
          <table>
            <tr>
              <td><label> Judul Film </label></td>
              <td>
                <input
                  type="text"
                  name="judul"
                  id="name"
                  placeholder="Judul Film"
                />
              </td>
            </tr>
            <tr>
              <td><label> Kategori </label></td>
              <td>
                <input
                  type="text"
                  name="kategori"
                  id="name"
                  placeholder="Kategori Film"
                />
              </td>
            </tr>
			<tr>
              <td><label> Harga </label></td>
              <td>
                <input
                  type="text"
                  name="harga"
                  id="name"
                />
              </td>
            </tr>
            <tr>
              <td><label> Tanggal </label></td>
              <td>
                <input type="date" name="tanggal" value="Tanggal" />
              </td>
            </tr>
            <tr>
              <td><label> Jadwal </label></td>
              <td>
                <input type="text" name="jadwal"  />
              </td>
            </tr>
            <tr>
              <td><label> Jadwal 2 </label></td>
              <td>
                <input type="text" name="jadwal2"  />
              </td>
            </tr>
          </table>

          <div class="flex">
          <input type="submit" name="tambah" value="Daftarkan Film" />
          <li><a href="indexadmin.php" class="kluar">kembali</a></li>
        </form>
        </div>
      </div>
    </div>


<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){

    // ambil data dari formulir
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
	$harga = $_POST['harga'];
	$tanggal = $_POST['tanggal'];
	$jadwal = $_POST['jadwal'];
	$jadwal2 = $_POST['jadwal2'];

    // buat query
    $sql = "INSERT INTO datafilm (kategori, judul, harga, tanggal, jadwal, jadwal2) VALUE ('$kategori', '$judul', '$harga','$tanggal','$jadwal', '$jadwal2')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list_film.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list_film.php?status=gagal');
    }



}

?>

</body>
</html>