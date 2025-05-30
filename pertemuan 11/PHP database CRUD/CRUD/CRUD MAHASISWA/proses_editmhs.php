<?php
include 'koneksi.php';
$npm = $_POST['npm'];
$nama = $_POST['namaMhs'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$hp = $_POST['noHP'];
mysqli_query($koneksi, "UPDATE t_mahasiswa SET namaMhs='$nama', prodi='$prodi', alamat='$alamat', noHP='$hp' WHERE npm=$npm");
header("location:viewmhs.php");
?>
