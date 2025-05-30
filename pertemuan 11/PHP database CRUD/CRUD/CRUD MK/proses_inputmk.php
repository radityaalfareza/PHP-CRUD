<?php
include 'koneksi.php';
$kode = $_POST['kodeMK'];
$nama = $_POST['namaMK'];
$sks = $_POST['sks'];
$jam = $_POST['jam'];
mysqli_query($koneksi, "INSERT INTO t_matakuliah VALUES($kode, '$nama', $sks, $jam)");
header("location:viewmk.php");
?>
