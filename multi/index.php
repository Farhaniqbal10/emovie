<?php
session_start();
include 'koneksi.php'
?>
<html>
    <head>
        <title>
            Halaman Login
</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="user"  placeholder="Masukan Username" /> <br><br>
    <input type="password" name="pass"  placeholder="Masukan Password" /> <br><br>
    <input type="submit" name="login" value="Login"/>     
</form>
<?php
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $data_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
    $r = mysqli_fetch_array($data_user);
    $username = isset($r['username']) ? $r['username'] : '';
    $password = isset($r['password']) ? $r['password'] : '';
    $level = isset($r['level']) ? $r['level'] : '';
    if($user == $username && $pass == $password){
        $_SESSION['level'] = $level;
        header('location:beranda.php');
    }else{
        echo 'Maaf Ya, Password atau Username Kamu Salah!';
    }
}
?>
</body>
</html>