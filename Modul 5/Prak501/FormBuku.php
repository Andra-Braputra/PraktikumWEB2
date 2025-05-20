<?php
require_once 'Model.php';
$book = [];
if (isset($_GET['id'])) {
    $book = getBookById($_GET['id']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= empty($book) ? 'Tambah' : 'Edit' ?> Buku</title>
    <link rel="stylesheet" href="Form.css">
</head>
<body>
    <div class="form-container">
        <h1><?= empty($book) ? 'Tambah' : 'Edit' ?> Data Buku</h1>
        <form action="ProsesBuku.php" method="post">
            <?php if (!empty($book)): ?>
                <input type="hidden" name="id_buku" value="<?= $book['id_buku'] ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="judul_buku">Judul Buku:</label>
                <input type="text" id="judul_buku" name="judul_buku" value="<?= htmlspecialchars($book['judul_buku'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" id="penulis" name="penulis" value="<?= htmlspecialchars($book['penulis'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" value="<?= htmlspecialchars($book['penerbit'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?= $book['tahun_terbit'] ?? '' ?>" min="1900" max="<?= date('Y') ?>" required>
            </div>

            <button type="submit">Simpan</button>
            <a href="Buku.php" style="margin-left: 10px;">Kembali</a>
        </form>
    </div>
</body>
</html>
