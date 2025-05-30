<?php
include 'koneksi.php';
$kode = $_GET['kode'];
mysqli_query($koneksi, "DELETE FROM t_matakuliah WHERE kodeMK=$kode");
header("location:viewmk.php");
?>
