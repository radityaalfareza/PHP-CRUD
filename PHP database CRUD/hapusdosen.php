<?php
include 'koneksi.php';
$idDosen = $_GET['idDosen'];
mysqli_query($koneksi, "DELETE FROM t_dosen WHERE idDosen=$idDosen");
header("location:viewdosen.php");
?>