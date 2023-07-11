<?php
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($db,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$row = mysqli_fetch_assoc($login);
				$_SESSION["id"]=$row["id"];
				$_SESSION["username"]=$row["username"];
				$_SESSION["role"]=$row["role"];
		
		
				if ($_SESSION["role"]=$row["role"]=="admin")
				{
					header("Location:indexadmin.php");
				} 
				else if ($_SESSION["role"]=$row["role"]=="user")
				{
					header("Location:indexuser.php");
				}
			
			}else {
				echo "<div class='alert alert-danger'>
				<strong>Error!</strong> Username dan password salah. 
			  </div>";
			}

		
	
	?>