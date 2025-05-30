<?php
include 'koneksi.php';
$idDosen = $_POST['idDosen'];
$namaDosen = $_POST['namaDosen'];
$noHP = $_POST['noHP'];
mysqli_query($koneksi, "UPDATE t_dosen SET namaDosen='$namaDosen', noHP='$noHP' WHERE idDosen=$idDosen");
header("location:viewdosen.php");
?>