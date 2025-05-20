<?php
require_once 'Model.php';
$books = getBooks();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="Tabel.css">
</head>
<body>
    <h1>Data Buku</h1>
    <a href="FormBuku.php">Tambah Buku</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= $book['id_buku'] ?></td>
            <td><?= htmlspecialchars($book['judul_buku']) ?></td>
            <td><?= htmlspecialchars($book['penulis']) ?></td>
            <td><?= htmlspecialchars($book['penerbit']) ?></td>
            <td><?= $book['tahun_terbit'] ?></td>
            <td>
                <a href="FormBuku.php?id=<?= $book['id_buku'] ?>">Edit</a>
                <a href="ProsesBuku.php?hapusBuku=<?= $book['id_buku'] ?>" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="Index.php" style="margin-top: 20px; display: block;">Kembali ke Index</a>
</body>
</html>
