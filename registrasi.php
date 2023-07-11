<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login">
        <center>Form Registrasi</center>
        <div class="container">
            <form action="" method="POST">
                <label> Username </label>
                <input type="text" name="username" id="name" placeholder="Username"/>
                <br>
                <label> Password </label>
                <input type="password" name="password" id="name" placeholder="Password"/>
                <br>
                <div class="btn">
                <label> Role </label>
                <input type="radio" name="role" value="admin"/> Admin
                <input type="radio" name="role" value="user"/> User
                <br>
                <div class="flex">
                <input type="submit" name="daftar" value="DAFTAR" class="tombol">
				<a href="index.php" class="tombol">login</a> 
            </form>
            </div>
            </div>
        </div>
    </div>
</body>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'bioskop');

if(isset($_POST['daftar'])){

if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['role'])){
    echo '<script type="text/javascript"> alert("Mohon Isi Seluruh Form") </script>';
}else if(isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role     = $_POST['role'];

    $query ="INSERT INTO `user` (`username`,`password`,`role`) VALUES ('$username','$password','$role')";
    $query_run = mysqli_query($connection,$query);
    
    if($query_run){
        echo '<script type="text/javascript"> alert("Registrasi Berhasil") </script>';
    }
}
}
?>

</html>