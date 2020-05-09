<?php

// Connect ke database
$db_host = 'localhost';
$db_database = 'data_siswa';
$db_username = 'root';
$db_password = "";
$db_port = '3306';

// Create koneksi
$con = new mysqli($db_host, $db_username, $db_password, $db_database, $db_port);

// Check koneksi
if ($con -> connect_error) {
    die('Connection failed:'.$con->connect_error);
}
?>