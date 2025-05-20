<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Baru</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/buku.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Tambah Buku Baru</h1>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form method="post" action="/buku/store" class="book-form">
            <?= csrf_field() ?>
            
            <div class="form-group">
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" class="form-control" 
                       value="<?= old('judul') ?>" required>
            </div>

            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" id="penulis" name="penulis" class="form-control" 
                       value="<?= old('penulis') ?>" required>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" class="form-control" 
                       value="<?= old('penerbit') ?>" required>
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control"
                       min="1801" max="<?= date('Y') ?>" 
                       value="<?= old('tahun_terbit') ?>" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success">Simpan Buku</button>
                <a href="/buku" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>