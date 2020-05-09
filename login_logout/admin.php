<?php

    session_start();

    if ($_SESSION['status']!="sudah_login") {
        header("location:form_login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Yay! Welcome : <?php echo $_SESSION['nama']; ?></h1>

    <br>

    <a href="logout.php">Klik disini untuk Logout.</a>

</body>
</html>