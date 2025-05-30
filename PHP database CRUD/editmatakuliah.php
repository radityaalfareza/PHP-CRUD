<?php
include 'koneksi.php';

// Validasi parameter kodeMK
if (!isset($_GET['kodeMK'])) {
    echo "Kode MK tidak ditemukan di URL.";
    exit;
}

$kodeMK = intval($_GET['kodeMK']);
$query = mysqli_query($koneksi, "SELECT * FROM t_matakuliah WHERE kodeMK=$kodeMK");

// Cek apakah query berhasil dan data ditemukan
if (!$query || mysqli_num_rows($query) == 0) {
    echo "Data matakuliah tidak ditemukan.";
    exit;
}

$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Matakuliah</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
        input[type='text'], input[type='number'] {
            width: 100%; padding: 8px; margin: 4px 0;
        }
        input[type='submit'] {
            padding: 8px 15px; background: orange; color: white;
            border: none; border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Edit Data Matakuliah</h2>
        <form action='proses_editmatakuliah.php' method='post'>
            <input type='hidden' name='kodeMK' value='<?= $data['kodeMK'] ?>'>
            <input type='text' name='namaMK' placeholder='Nama MK' value='<?= $data['namaMK'] ?>'><br>
            <input type='number' name='sks' placeholder='SKS' value='<?= $data['sks'] ?>'><br>
            <input type='number' name='jam' placeholder='Jam' value='<?= $data['jam'] ?>'><br>
            <input type='submit' value='Simpan'>
        </form>
    </div>
</body>
</html>
