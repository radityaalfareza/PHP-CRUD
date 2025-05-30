<?php
include 'koneksi.php';

$cari = $_GET['cari'] ?? '';
$keyword = mysqli_real_escape_string($koneksi, $cari);

$data = mysqli_query($koneksi, "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$keyword%'");

// Cek jika query gagal
if (!$data) {
    die("Query error: " . mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container {
            width: 90%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        input[type='text'] {
            padding: 8px;
            width: 300px;
        }
        input[type='submit'] {
            padding: 8px 15px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class='container'>
    <h2>Data Mahasiswa</h2>

    <form method='get'>
        <input type='text' name='cari' placeholder='Cari nama...' value='<?= htmlspecialchars($cari) ?>'>
        <input type='submit' value='Cari'>
    </form>

    <table>
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        <?php while ($d = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $d['npm'] ?></td>
            <td><?= $d['namaMhs'] ?></td>
            <td><?= $d['prodi'] ?></td>
            <td><?= $d['alamat'] ?></td>
            <td><?= $d['noHP'] ?></td>
            <td>
                <a href='editmahasiswa.php?npm=<?= $d['npm'] ?>'>Edit</a> |
                <a href='hapusmahasiswa.php?npm=<?= $d['npm'] ?>' onclick='return confirm("Hapus data?")'>Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
