<?php
include 'koneksi.php';
$kodeMK = $_GET['kodeMK'];
mysqli_query($koneksi, "DELETE FROM t_matakuliah WHERE kodeMK=$kodeMK");
header("location:viewmatakuliah.php");
?>