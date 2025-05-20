<?php
require_once 'Model.php';

$members = getMembers();
$books = getBooks();
$peminjaman = [];

if (isset($_GET['id'])) {
    $peminjaman = getPeminjamanById($_GET['id']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= empty($peminjaman) ? 'Tambah' : 'Edit' ?> Peminjaman</title>
    <link rel="stylesheet" href="Form.css">
</head>
<body>
    <div class="form-container">
        <h1><?= empty($peminjaman) ? 'Tambah' : 'Edit' ?> Data Peminjaman</h1>
        <form action="ProsesPeminjaman.php" method="post">
            <?php if (!empty($peminjaman)): ?>
                <input type="hidden" name="id_peminjaman" value="<?= $peminjaman['id_peminjaman'] ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="id_member">Nama Member:</label>
                <select id="id_member" name="id_member" required>
                    <option value="">-- Pilih Member --</option>
                    <?php foreach ($members as $m): ?>
                        <option value="<?= $m['id_member'] ?>"
                            <?= (isset($peminjaman['id_member']) && $peminjaman['id_member'] == $m['id_member']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($m['nama_member']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="id_buku">Judul Buku:</label>
                <select id="id_buku" name="id_buku" required>
                    <option value="">-- Pilih Buku --</option>
                    <?php foreach ($books as $b): ?>
                        <option value="<?= $b['id_buku'] ?>"
                            <?= (isset($peminjaman['id_buku']) && $peminjaman['id_buku'] == $b['id_buku']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($b['judul_buku']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="tgl_pinjam">Tanggal Pinjam:</label>
                <input type="date" id="tgl_pinjam" name="tgl_pinjam" value="<?= $peminjaman['tgl_pinjam'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label for="tgl_kembali">Tanggal Kembali:</label>
                <input type="date" id="tgl_kembali" name="tgl_kembali" value="<?= $peminjaman['tgl_kembali'] ?? '' ?>">
            </div>

            <button type="submit">Simpan</button>
            <a href="Peminjaman.php" style="margin-left: 10px;">Kembali</a>
        </form>
    </div>
</body>
</html>
