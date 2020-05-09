<?php

    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($con, "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'");
    $cek = mysqli_num_rows($result);

    if ($cek > 0 ) {
        $data = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['status'] = "sudah_login";
        $_SESSION['id_login'] = $data['id'];
        header("location:admin.php");
        } else {
            header("location:form_login.php?pesan= Gagal Login data not found");
        }
?>