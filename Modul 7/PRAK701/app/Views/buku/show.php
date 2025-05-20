<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/buku.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Detail Buku</h1>

        <div class="book-detail">
            <div class="detail-row">
                <span class="detail-label">Judul:</span>
                <span class="detail-value"><?= esc($buku['judul']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Penulis:</span>
                <span class="detail-value"><?= esc($buku['penulis']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Penerbit:</span>
                <span class="detail-value"><?= esc($buku['penerbit']) ?></span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Tahun Terbit:</span>
                <span class="detail-value"><?= esc($buku['tahun_terbit']) ?></span>
            </div>
        </div>

        <div class="action-buttons">
            <a href="/buku" class="btn btn-primary">Kembali ke Daftar Buku</a>
            <?php if (session()->has('user')): ?>
                <a href="/buku/edit/<?= $buku['id'] ?>" class="btn btn-success">Edit Buku</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>