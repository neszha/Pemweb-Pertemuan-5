<?php

// Konfigurasi database.
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'pemweb_p5';

// Mengkoneksikan ke mysql database.
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(!$connection) {
    die('Koneksi ke database gagal.');
}