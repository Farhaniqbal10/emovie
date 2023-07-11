<html>
<link rel="stylesheet" href="w3.css">
<form action="indexuser.php?p=savebeli" method=post>
<center>
<table border=0>
<?php
require ("koneksi.php");
$idfilm=$_GET['idfilm'];
 echo "<center><img src='./images/$idfilm.jpg' width=15% height=35%></center>";
 echo "<br>";
 $sql="select * from datafilm WHERE idfilm='$idfilm'";
 $hasil=mysqli_query($db,$sql);
 $row=mysqli_fetch_row($hasil);
 do
 {
 list($idfilm,$kategori,$judul,$harga,$tanggal,$jadwal, $jadwal2)=$row;
 echo   "<tr><td   width=150>Code Item<td   width=100><input   name=idfilm   value='$idfilm'
 readonly size=10>";
 echo "<tr><td>Judul<td><input name=namabarang value='$judul' readonly size=50>";
 echo "<tr><td>Price<td><input name=harga value='$harga' readonly size=10>";
 echo "<tr><td>Tanggal<td><input name=tanggal value='$tanggal' size=20>";
 echo "<tr><td>Jadwal<td><input type='radio' id='jadwal' name='jadwal' value='$jadwal'>
  <label for='jadwal'>$jadwal</label></br>";
 echo "<input type='radio' id='jadwal' name='jadwal' value='$jadwal2'>
  <label for='jadwal'>$jadwal2</label></br>";
  echo "<tr><td><label for='cars'>Choose a seat:</label><td>
		<select id='seat'>
		<option value='A1'>A1</option><option value='A2'>A2</option>
		<option value='A3'>A3</option><option value='A4'>A4</option>
		<option value='B1'>B1</option><option value='B2'>B2</option>
		<option value='B3'>B3</option><option value='B4'>B4</option>
		<option value='C1'>C1</option><option value='C2'>C2</option>
		<option value='C3'>C3</option><option value='C4'>C4</option>
		
		
		</select>";
 }
 while($row=mysqli_fetch_row($hasil));
 ?>
 </table>
 <hrwidth=400>
 <button class="w3-btn w3-round-xxlarge w3-red" >Save </button>
 <a class="w3-btn w3-round-xxlarge w3-red" href="indexuser.php">Back</a>