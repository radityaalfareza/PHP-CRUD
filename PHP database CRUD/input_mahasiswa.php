<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Input Mahasiswa</title>
        <style>
            body { font-family: Arial; background: #f4f4f4; }
            .container { width: 500px; margin: auto; background: white; padding: 20px; border-radius: 8px; }
            input[type='text'], input[type='number'] { width: 100%; padding: 8px; margin: 4px 0; }
            input[type='submit'] { padding: 8px 15px; background: #007BFF; color: white; border: none; border-radius: 5px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Input Data Mahasiswa</h2>
            <form action='proses_inputmahasiswa.php' method='post'>
            <input type='text' name='npm' placeholder='Npm' value='<?= $npm ?? "" ?>'><br>
            <input type='text' name='namaMhs' placeholder='Namamhs' value='<?= $namaMhs ?? "" ?>'><br>
            <input type='text' name='prodi' placeholder='Prodi' value='<?= $prodi ?? "" ?>'><br>
            <input type='text' name='alamat' placeholder='Alamat' value='<?= $alamat ?? "" ?>'><br>
            <input type='text' name='noHP' placeholder='Nohp' value='<?= $noHP ?? "" ?>'><br>
            <input type='submit' value='Simpan'>
            </form>
        </div>
    </body>
</html>
