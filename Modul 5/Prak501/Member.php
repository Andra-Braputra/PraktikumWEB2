<?php
require_once 'Model.php';
$members = getMembers();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
    <link rel="stylesheet" href="Tabel.css">
</head>
<body>
    <h1>Data Member</h1>
    <a href="FormMember.php">Tambah Member</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Alamat</th>
            <th>Terakhir Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($members as $member): ?>
        <tr>
            <td><?= $member['id_member'] ?></td>
            <td><?= htmlspecialchars($member['nama_member']) ?></td>
            <td><?= htmlspecialchars($member['nomer_member']) ?></td>
            <td><?= htmlspecialchars($member['alamat']) ?></td>
            <td><?= $member['tgl_terakhir_bayar'] ?></td>
            <td>
                <a href="FormMember.php?id=<?= $member['id_member'] ?>">Edit</a>
                <a href="ProsesMember.php?hapus=<?= $member['id_member'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="Index.php">Index</a>
</body>
</html>
