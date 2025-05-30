<?php
// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di URL ada nilai GET idDosen
if (isset($_GET['idDosen'])) {
    // ambil nilai idDosen dari URL
    $id = $_GET['idDosen'];

    // menampilkan data dosen dari database berdasarkan id
    $query = "SELECT * FROM t_dosen WHERE idDosen = $id";
    $result = mysqli_query($koneksi, $query);

    // periksa apakah query berhasil
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }

    // ambil data dan simpan dalam variabel
    $data = mysqli_fetch_assoc($result);
    $idDosen = $data['idDosen'];
    $namaDosen = $data['namaDosen'];
    $noHP = $data['noHP'];
} else {
    // redirect jika tidak ada id di URL
    header("location:viewdosen.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        h1{
            text-align: center;
        }

        .container{
            width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form id="form_mahasiswa" action="proses_editdosen.php" method="post">

            <fieldset>
                <legend>Edit Data Dosen</legend>
                <p>
                    <label for="idDosen">ID : </label>
                    <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>" />
                    <input type="text" name="idDosenDisabled" id="idDosenDisabled" value="<?php echo $idDosen ?>" disabled />
                </p>

                <p>
                    <label for="namaDosen">Nama Dosen : </label>
                    <input type="text" name="namaDosen" id="namaDosen" value="<?php echo $namaDosen ?>" />
                </p>

                <p>
                    <label for="noHP">NO HP : </label>
                    <input type="text" name="noHP" id="noHP" value="<?php echo $noHP ?>" />
                </p>

                <p>
                    <input type="submit" name="edit" value="Update Data">
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>
