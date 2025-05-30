<?php
include 'koneksi.php';

// Validasi parameter npm
if (!isset($_GET['npm'])) {
    echo "NPM tidak ditemukan di URL.";
    exit;
}

$npm = intval($_GET['npm']); // konversi untuk keamanan
$query = mysqli_query($koneksi, "SELECT * FROM t_mahasiswa WHERE npm=$npm");

// Cek apakah query berhasil
if (!$query || mysqli_num_rows($query) == 0) {
    echo "Data mahasiswa tidak ditemukan.";
    exit;
}

$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        input[type='text'], input[type='number'] { width: 100%; padding: 8px; margin: 4px 0; }
        input[type='submit'] { padding: 8px 15px; background: orange; color: white; border: none; border-radius: 5px; }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Edit Data Mahasiswa</h2>
        <form action='proses_editmahasiswa.php' method='post'>
            <input type='hidden' name='npm' value='<?= $data['npm'] ?>'>
            <input type='text' name='namaMhs' placeholder='Nama Mahasiswa' value='<?= $data['namaMhs'] ?>'><br>
            <input type='text' name='prodi' placeholder='Prodi' value='<?= $data['prodi'] ?>'><br>
            <input type='text' name='alamat' placeholder='Alamat' value='<?= $data['alamat'] ?>'><br>
            <input type='text' name='noHP' placeholder='No HP' value='<?= $data['noHP'] ?>'><br>
            <input type='submit' value='Simpan'>
        </form>
    </div>
</body>
</html>
