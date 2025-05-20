<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/buku.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Edit Buku</h1>

        <?php if ($validation->getErrors()): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="/buku/update/<?= $buku['id'] ?>" method="post" class="book-form">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" id="judul" name="judul" class="form-control" 
                       value="<?= set_value('judul', $buku['judul']) ?>">
            </div>

            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" id="penulis" name="penulis" class="form-control" 
                       value="<?= set_value('penulis', $buku['penulis']) ?>">
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit" class="form-control" 
                       value="<?= set_value('penerbit', $buku['penerbit']) ?>">
            </div>

            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control" 
                       value="<?= set_value('tahun_terbit', $buku['tahun_terbit']) ?>">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update Buku</button>
                <a href="/buku" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>