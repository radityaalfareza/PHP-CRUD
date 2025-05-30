<?php
include 'koneksi.php';

// Validasi apakah idDosen dikirim melalui URL
if (!isset($_GET['idDosen'])) {
    echo "ID Dosen tidak ditemukan di URL.";
    exit;
}

$idDosen = intval($_GET['idDosen']);
$result = mysqli_query($koneksi, "SELECT * FROM t_dosen WHERE idDosen=$idDosen");

// Cek apakah query berhasil
if (!$result || mysqli_num_rows($result) == 0) {
    echo "Data tidak ditemukan.";
    exit;
}

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        input[type='text'], input[type='number'] { width: 100%; padding: 8px; margin: 4px 0; }
        input[type='submit'] { padding: 8px 15px; background: orange; color: white; border: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Edit Data Dosen</h2>
        <form action='proses_editdosen.php' method='post'>
            <input type='hidden' name='idDosen' value='<?= $data['idDosen'] ?>'>
            <input type='text' name='namaDosen' placeholder='Nama Dosen' value='<?= $data['namaDosen'] ?>'><br>
            <input type='text' name='noHP' placeholder='No HP' value='<?= $data['noHP'] ?>'><br>
            <input type='submit' value='Simpan'>
        </form>
    </div>
</body>
</html>
