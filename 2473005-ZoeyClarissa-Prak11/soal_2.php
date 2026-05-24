<?php
include 'koneksi.php';

$query = "SELECT * FROM siswa";
$data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>

    <style>
        button {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            background-color: #2196F3;
            color: white;
            border-radius: 5px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
        }

        button {
            padding: 8px 12px;
        }

        .edit {
            background-color: #2196F3;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .hapus {
            background-color: red;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>

</head>

<body>

    <h2>Data Siswa</h2>

    <a href="tambah.php">Tambah Data</a>

    <br><br>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>

        <?php while ($d = mysqli_fetch_array($data)) { ?>

            <tr>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['kelas']; ?></td>

                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">
                        Edit
                    </a>
                    <a class="hapus" href="hapus.php?id=<?php echo $d['id']; ?>">
                        Hapus
                    </a>
                </td>
            </tr>

        <?php } ?>

    </table>

</body>

</html>