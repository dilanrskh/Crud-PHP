<?php

// Get = buat ambil data, data nya juga
// akan masuk kedalam url
// Jadi dibelakang url ada key=valuenya
// $bunga = $_GET['nama'];
// echo "Nama bunga yang saya punya adalah " . $bunga;


// Post, datanya ngak ada di url
$bunga = $_POST['nama'];
echo "Nama bunga yang saya punya adalah " . $bunga;


?>


<form action="getpost.php" method="post">
    <input type="text" name="nama" />
    <input type="submit" />
</form>

