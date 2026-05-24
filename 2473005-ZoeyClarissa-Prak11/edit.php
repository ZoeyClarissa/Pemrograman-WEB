<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM siswa WHERE id='$id'");

$d = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h1>Edit Data</h1>

<form action="proses_edit.php" method="POST">

<input type="hidden" name="id"
value="<?php echo $d['id']; ?>">

Nama :
<br>
<input type="text" name="nama"
value="<?php echo $d['nama']; ?>">

<br><br>

Kelas :
<br>
<input type="text" name="kelas"
value="<?php echo $d['kelas']; ?>">

<br><br>

<button type="submit">Update</button>

</form>

</body>
</html>