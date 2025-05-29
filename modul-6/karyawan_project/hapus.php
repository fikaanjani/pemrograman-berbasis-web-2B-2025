<?php include "auth.php"; include "db.php";
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM karyawan_absensi WHERE id = $id");
header("Location: index.php");
?>