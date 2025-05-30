<?php
include 'koneksi.php';
$npm = $_GET['npm'];
$d = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_mahasiswa WHERE npm=$npm"));
?>
<div class="container">
    <h2>Edit Mahasiswa</h2>
    <form action="proses_editmhs.php" method="post">
        <input type="hidden" name="npm" value="<?= $d['npm'] ?>">
        <input type="text" name="namaMhs" value="<?= $d['namaMhs'] ?>">
        <input type="text" name="prodi" value="<?= $d['prodi'] ?>">
        <input type="text" name="alamat" value="<?= $d['alamat'] ?>">
        <input type="text" name="noHP" value="<?= $d['noHP'] ?>">
        <input type="submit" name="update" value="Update">
    </form>
</div>
