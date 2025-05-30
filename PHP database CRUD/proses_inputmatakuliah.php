<?php
include 'koneksi.php';
$kodeMK = $_POST['kodeMK'];
$namaMK = $_POST['namaMK'];
$sks = $_POST['sks'];
$jam = $_POST['jam'];
mysqli_query($koneksi, "INSERT INTO t_matakuliah VALUES('$kodeMK', '$namaMK', '$sks', '$jam')");
header("location:viewmatakuliah.php");
?>