<?php
include 'koneksi.php';
$npm = $_POST['npm'];
$namaMhs = $_POST['namaMhs'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$noHP = $_POST['noHP'];
mysqli_query($koneksi, "UPDATE t_mahasiswa SET namaMhs='$namaMhs', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE npm=$npm");
header("location:viewmahasiswa.php");
?>