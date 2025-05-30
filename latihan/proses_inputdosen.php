<?php
include 'koneksi.php';

if (isset($_POST['input'])) {

    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $query = "INSERT INTO t_dosen VALUES (NULL, '$namaDosen', '$noHP')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
}

header("location:viewdosen.php");
?>
