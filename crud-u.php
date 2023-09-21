<?php

// Ini buat proses edit

include "koneksicrud.php";

$nim = $_POST['nim'];
$kd_kelas = $_POST['kd_kelas'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];

$data = mysqli_query($koneksi, "UPDATE kelas SET kd_kelas='$kd_kelas', nama='$nama', jenis_kelamin='$jenis_kelamin', kelas='$kelas' where nim='$nim'");

header("location:crud-r.php");

?>