<?php

include 'koneksicrud.php';

$nim = $_GET['nim'];

$data = mysqli_query($koneksi, "SELECT * FROM kelas where nim='$nim'");
while ($bimbel = mysqli_fetch_array($data)) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data Bimbel</title>
    </head>

    <body>
        <h1>Form Edit Data Peserta Bimbel</h1>

        <form action="crud-u.php" method="post">

            <input type="hidden" name="nim" value="<?php print $bimbel['nim']; ?>" />

            <label for="kd_kelas">Kode Ruangan Anda</label>
            <br>
            <input type="text" id="kd_kelas" name="kd_kelas" value="<?php print $bimbel['kd_kelas'];  ?>" />
            <br>


            <label for="nama">Nama Lengkap Anda</label>
            <br>
            <input type="text" id="nama" name="nama" value="<?php print $bimbel['nama'];  ?>" />
            <br>


            <label for="jenis_kelamin">Jenis Kelamin Anda</label>
            <br>
            <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php print $bimbel['jenis_kelamin'];  ?>" />
            <br>


            <label for="kelas">Nama Kelas Anda</label>
            <br>
            <input type="text" id="kelas" name="kelas" value="<?php print $bimbel['kelas'];  ?>" />
            <br>

            <button type="submit">Simpan Perubahan</button>
        </form>

    <?php
}
    ?>
    </body>

    </html>