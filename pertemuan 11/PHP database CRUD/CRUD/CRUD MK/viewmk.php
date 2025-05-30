<?php
include 'koneksi.php';
$cari = $_GET['cari'] ?? '';
$data = mysqli_query($koneksi, "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$cari%'");
?>
<form method="get"><input type="text" name="cari" placeholder="Cari matakuliah..."><input type="submit" value="Cari"></form>
<table><tr><th>Kode</th><th>Nama MK</th><th>SKS</th><th>Jam</th><th>Aksi</th></tr>
<?php while ($d = mysqli_fetch_assoc($data)) {
echo "<tr><td>{$d['kodeMK']}</td><td>{$d['namaMK']}</td><td>{$d['sks']}</td><td>{$d['jam']}</td>
<td><a href='editmk.php?kode={$d['kodeMK']}'>Edit</a> | <a href='hapusmk.php?kode={$d['kodeMK']}'>Hapus</a></td></tr>";
} ?>
</table>
