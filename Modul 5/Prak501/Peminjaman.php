<?php
require_once 'Model.php';
$peminjaman = getPeminjaman();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <link rel="stylesheet" href="Tabel.css">
</head>
<body>
    <h1>Data Peminjaman</h1>
    <a href="FormPeminjaman.php">Tambah Peminjaman</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Member</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($peminjaman as $pinjam): ?>
        <tr>
            <td><?= $pinjam['id_peminjaman'] ?></td>
            <td><?= $pinjam['nama_member'] ?></td>
            <td><?= $pinjam['judul_buku'] ?></td>
            <td><?= $pinjam['tgl_pinjam'] ?></td>
            <td><?= $pinjam['tgl_kembali'] ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?= $pinjam['id_peminjaman'] ?>">Edit</a>
                <a href="ProsesPeminjaman.php?hapusPeminjaman=<?= $pinjam['id_peminjaman'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="Index.php" style="margin-left: 10px;">Index</a>
</body>
</html>
