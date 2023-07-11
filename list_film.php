<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Film</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>Now Showing</h3>
    </header>
    <br>
	<center>
    <table class="tabel1">
    <thead>
        <tr>	
            <th>id_film</th>
            <th>Kategori</th>
            <th>Judul</th>
			<th>Harga</th>
            <th>Tanggal</th>
            <th>Jadwal 1</th>
			<th>Jadwal 2</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM datafilm";
        $query = mysqli_query($db, $sql);

        while($film = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$film['idfilm']."</td>";
            echo "<td>".$film['kategori']."</td>";
            echo "<td>".$film['judul']."</td>";
			echo "<td>".$film['harga']."</td>";
			echo "<td>".$film['tanggal']."</td>";
            echo "<td>".$film['jadwal']."</td>";
            echo "<td>".$film['jadwal2']."</td>";
            echo "<td>";
            echo "<a href='editfilm.php?idfilm=".$film['idfilm']."'><button>Edit</button></a> | ";
            echo "<a href='hapusfilm.php?idfilm=".$film['idfilm']."'><button>Hapus</button></a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
	<br><a href="tambahfilm.php"><button>tambah film</button></a></br>
	<br><a href="indexadmin.php"><button>kembali ke admin</button></a></br>
	</center>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>