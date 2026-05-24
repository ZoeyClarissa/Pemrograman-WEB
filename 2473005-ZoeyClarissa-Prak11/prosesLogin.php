<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin"){
    echo "<h1>Login berhasil!</h1>";
    echo "<h2>Selamat datang, admin</h2>";
    echo "<a href='soal_1.html'>Kembali</a>";
}else{
    echo "<h1>
    <span style='color:red'>
    Username :
    </span>

    <span style='color:black'>
    $username
    </span>

    <span style='color:red'>
    Tidak Terdaftar!
    </span>

    </h1>";

    echo "<a href='soal_1.html'>
    kembali ke halaman login
    </a>";
    }
?>