<?php
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['namaMhs'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$noHP = $_POST['noHP'];
mysqli_query($koneksi, "INSERT INTO t_mahasiswa VALUES($npm, '$nama', '$prodi', '$alamat', '$noHP')");
header("location:viewmhs.php");
?>
