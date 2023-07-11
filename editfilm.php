	<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['idfilm']) ){
    header('Location: list_film.php');
}

//ambil id dari query string
$idfilm = $_GET['idfilm'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM datafilm WHERE idfilm=$idfilm";
$query = mysqli_query($db, $sql);
$film = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Film </title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>Edit Film</h3>
    </header>

    <form action="edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="idfilm" value="<?php echo $film['idfilm'] ?>" />

        <p>
            <label for="kategori">kategori: </label>
            <input type="text" name="kategori"  value="<?php echo $film['kategori'] ?>" />
        </p>
		 <p>
            <label for="judul">judul: </label>
            <input type="text" name="judul"  value="<?php echo $film['judul'] ?>" />
        </p>
		<p>
            <label for="harga">harga: </label>
            <input type="text" name="harga"  value="<?php echo $film['harga'] ?>" />
        </p>
		<p>
            <label for="tanggal">Tanggal: </label>
            <input type="date" name="tanggal"  value="<?php echo $film['tanggal'] ?>" />
        </p>
        <p>
            <label for="jadwal">jadwal: </label>
            <input type="text" name="jadwal"  value="<?php echo $film['jadwal'] ?>" />
        </p>
		<p>
            <label for="jadwal2">jadwal 2: </label>
            <input type="text" name="jadwal2"  value="<?php echo $film['jadwal2'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>

