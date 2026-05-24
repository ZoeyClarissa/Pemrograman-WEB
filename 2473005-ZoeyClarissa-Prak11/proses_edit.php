<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

mysqli_query($conn,
"UPDATE siswa
SET nama='$nama',
kelas='$kelas'
WHERE id='$id'");

header("location:soal_2.php");

?>