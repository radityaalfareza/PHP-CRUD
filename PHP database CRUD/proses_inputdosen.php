<?php
include 'koneksi.php';
$namaDosen = $_POST['namaDosen'];
$noHP = $_POST['noHP'];
mysqli_query($koneksi, "INSERT INTO t_dosen VALUES(NULL, '$namaDosen', '$noHP')");
header("location:viewdosen.php");
?>