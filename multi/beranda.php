<html>
    <head>
        <title>Halaman Beranda</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <ul>
        <li><a href="">Home</a></li>
        <?php
        $level = isset($_SESSION['level']) ? $_SESSION['level'] : '' == 'user';
        if($level){
        ?>
        <li><a href="">Update Status</a></li>
        <?php }else{ ?>
        <li><a href="">Kelola User</a></li>
        <li><a href="">Kelola Status</a></li>
        <?php } ?>
        <li><a href="logout.php">Logout</a></li>

</ul>
</body>
</html>