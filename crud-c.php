<?php

// Ini bagian proses input data
// Nambah data itu pake method POST
// Kalau ambil atau liat data pake method GET

include "koneksicrud.php";

$nim = $_POST['nim'];
$kd_kelas = $_POST['kd_kelas'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "INSERT INTO kelas values ('$nim', '$kd_kelas', '$nama', '$jenis_kelamin', '$kelas')");

header("location:crud-r.php");

?>