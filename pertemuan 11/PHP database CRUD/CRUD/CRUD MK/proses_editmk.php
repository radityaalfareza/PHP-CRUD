<?php
include 'koneksi.php';
$kode = $_POST['kodeMK'];
$nama = $_POST['namaMK'];
$sks = $_POST['sks'];
$jam = $_POST['jam'];
mysqli_query($koneksi, "UPDATE t_matakuliah SET namaMK='$nama', sks=$sks, jam=$jam WHERE kodeMK=$kode");
header("location:viewmk.php");
?>
