<?php
include 'koneksi.php';
$nama = $_POST['namaDosen'];
$hp = $_POST['noHP'];
mysqli_query($koneksi, "INSERT INTO t_dosen VALUES(NULL, '$nama', '$hp')");
header("location:viewdosen.php");
?>
