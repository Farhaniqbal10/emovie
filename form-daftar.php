<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style1.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
              <td><label> Tanggal </label></td>
              <td>
                <input type="date" name="tanggal" value="Tanggal" />
              </td>
            </tr>
            <tr>
              <td><label> Jam Mulai </label></td>
              <td>
                <input type="time" name="mulai" value="Tanggal" />
              </td>
            </tr>
            <tr>
              <td><label> Jam Selesai </label></td>
              <td>
                <input type="time" name="mulai" value="Tanggal" />
              </td>
            </tr>
          </table>

          <div class="flex">
          <input type="submit" name="daftar" value="DAFTARKAN FILM" />
          <li><a href="indexadmin.php" class="kluar">kembali</a></li>
        </form>
        </div>
      </div>
    </div>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'bioskop');

if(isset($_POST['daftar'])){

if(empty($_POST['judul']) || empty($_POST['kategori']) || empty($_POST['tanggal']) || empty($_POST['mulai']) || empty($_POST['selesai'])){
    echo '<script type="text/javascript"> alert("Mohon Isi Seluruh Data") </script>';
}else if(isset($_POST['daftar'])){
    $judul          = $_POST['judul'];
    $kategori       = $_POST['kategori'];
    $tanggal        = $_POST['tanggal'];
    $jam_mulai      = $_POST['mulai'];
    $jam_selesai    = $_POST['selesai'];

    $query  ="INSERT INTO `datafilm` (`judul`,`kategori`) VALUES ('$judul','$kategori')";
    $query_run  = mysqli_query($connection,$query);

    if($query_run==1){
        $query2 ="INSERT INTO `jadwal` (`tanggal`,`jam_mulai`,`jam_selesai`) VALUES ('$tanggal','$jam_mulai','$jam_selesai')";
        $query_run2 = mysqli_query($connection,$query2);
            if($query_run2==1){
                echo '<script type="text/javascript"> alert("Data Film Berhasil Didaftarkan") </script>';
            }
    }

}
}
?>

  </body>
</html>