<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Cetak</title>
    <meta name ="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <style>
    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image:url(https://merahputih.com/media/76/d4/7f/76d47fe1df55b9ce96cf4f573031c01a.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(201, 76, 76, 1.0);
    box-shadow: 0 0 10px rgba(255,255,255,.4);
}
.container h1{
    text-align: left;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
}
.container label{
    text-align: left;
    color: #90caf9;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: #fff;
    font-size: 20px;
}
.container form button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
}
</style>
</head>

<body>
<div class="container">



        <h3>Bukti Pemesanan</h3>
        <form>


        <?php

        $sql = "SELECT * FROM datafilm,jadwal,tiket ";
        
        $query = mysqli_query($db, $sql);

        while($cetak = mysqli_fetch_array($query)){
            
			echo " Tanggal booking : ".$cetak['tanggal'];
            echo "<br>";
            echo " Nama pelanggan :";
            echo "<br>";
            echo " Id Tiket : ".$cetak['idtiket'];
            echo "<br>";
            echo " NO kursi : ".$cetak['kursi'];
            echo "<br>";
            echo " Jam Mulai :  ".$cetak['jam_mulai'];
            echo "<br>";
            echo " Jam Selesai : ".$cetak['jam_selesai'];
            echo "<br>";
            echo "<br>";

        }
        ?>



    </form>
    </div>

    
</body>
</html>

