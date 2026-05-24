<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn,
"DELETE FROM siswa WHERE id='$id'");

header("location:soal_2.php");

?>