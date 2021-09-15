<?php
// Koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', 'root', 'pw2020_123789456');

// Query isi tabel buku_pelajaran
$result = mysqli_query($conn, "SELECT * FROM buku_pelajaran");

// ubah data ke dalam array
// mysqli_fetch_row($result); // array numerik
// mysqli_fetch_assoc($result); // araay associative
// mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// tampung ke variabel buku_pelajaran
$buku_pelajaran = $rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar buku_pelajaran</title>
</head>

<body>
    <h3>Daftar buku_pelajaran</h3>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id_buku</th>
            <th>judul_buku</th>
            <th>nama_penerbit</th>
            <th>tahun_terbit</th>
        </tr>

        <?php $i = 1;
        foreach ($buku_pelajaran as $bp) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $bp['id_buku']; ?></td>
            <td><?= $bp['judul_buku']; ?></td>
            <td><?= $bp['nama_penerbit']; ?></td>
            <td><?= $bp['tahun_terbit']; ?></td>
            <td>
                <a href="">ubah</a> | <a href="">hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>