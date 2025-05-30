<?php
include 'koneksi.php';
$kodeMK = $_POST['kodeMK'];
$namaMK = $_POST['namaMK'];
$sks = $_POST['sks'];
$jam = $_POST['jam'];
mysqli_query($koneksi, "UPDATE t_matakuliah SET namaMK='$namaMK', sks='$sks', jam='$jam' WHERE kodeMK=$kodeMK");
header("location:viewmatakuliah.php");
?>