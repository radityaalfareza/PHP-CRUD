<?php
include 'koneksi.php';
$id = $_GET['id'];
$d = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM t_dosen WHERE idDosen=$id"));
?>
<div class="container">
    <h2>Edit Dosen</h2>
    <form action="proses_editdosen.php" method="post">
        <input type="hidden" name="id" value="<?= $d['idDosen'] ?>">
        <input type="text" name="namaDosen" value="<?= $d['namaDosen'] ?>">
        <input type="text" name="noHP" value="<?= $d['noHP'] ?>">
        <input type="submit" name="update" value="Update">
    </form>
</div>
