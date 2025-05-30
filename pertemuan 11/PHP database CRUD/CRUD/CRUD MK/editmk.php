<?php
include 'koneksi.php';
$kode = $_GET['kode'];
$d = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_matakuliah WHERE kodeMK=$kode"));
?>
<div class="container">
    <h2>Edit Matakuliah</h2>
    <form action="proses_editmk.php" method="post">
        <input type="hidden" name="kodeMK" value="<?= $d['kodeMK'] ?>">
        <input type="text" name="namaMK" value="<?= $d['namaMK'] ?>">
        <input type="number" name="sks" value="<?= $d['sks'] ?>">
        <input type="number" name="jam" value="<?= $d['jam'] ?>">
        <input type="submit" name="update" value="Update">
    </form>
</div>
