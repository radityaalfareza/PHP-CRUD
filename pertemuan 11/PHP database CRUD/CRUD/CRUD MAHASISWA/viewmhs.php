<?php
include 'koneksi.php';
$cari = $_GET['cari'] ?? '';
$data = mysqli_query($koneksi, "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$cari%'");
?>
<form method="get"><input type="text" name="cari" placeholder="Cari mahasiswa..."><input type="submit" value="Cari"></form>
<table><tr><th>NPM</th><th>Nama</th><th>Prodi</th><th>Alamat</th><th>HP</th><th>Aksi</th></tr>
<?php while ($m = mysqli_fetch_assoc($data)) {
echo "<tr><td>{$m['npm']}</td><td>{$m['namaMhs']}</td><td>{$m['prodi']}</td><td>{$m['alamat']}</td><td>{$m['noHP']}</td>
<td><a href='editmhs.php?npm={$m['npm']}'>Edit</a> | <a href='hapusmhs.php?npm={$m['npm']}'>Hapus</a></td></tr>";
} ?>
</table>
