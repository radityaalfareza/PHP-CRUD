<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['namaDosen'];
$hp = $_POST['noHP'];
mysqli_query($koneksi, "UPDATE t_dosen SET namaDosen='$nama', noHP='$hp' WHERE idDosen=$id");
header("location:viewdosen.php");
?>
