<?php
$host = "localhost:3307";
$user = "root";
$pass = "";
$db   = "manajemen_karyawan";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>