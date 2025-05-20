<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/buku.css') ?>">
</head>
<body>
    <div class="container">
        <h1>Daftar Buku</h1>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?php if (session()->has('user')): ?>
            <div class="user-info">
                <div>
                    Selamat datang, <strong><?= esc(session()->get('user')['username']) ?></strong>!
                </div>
                <div class="action-buttons">
                    <a href="/buku/create" class="btn btn-success">Tambah Buku Baru</a>
                    <a href="/auth/logout" class="btn">Logout</a>
                </div>
            </div>
        <?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($buku) && is_array($buku)) : ?>
                    <?php foreach ($buku as $b) : ?>
                        <tr>
                            <td><?= esc($b['id']) ?></td>
                            <td><?= esc($b['judul']) ?></td>
                            <td><?= esc($b['penulis']) ?></td>
                            <td><?= esc($b['penerbit']) ?></td>
                            <td><?= esc($b['tahun_terbit']) ?></td>
                            <td>
                                <a href="/buku/show/<?= $b['id'] ?>" class="btn">Show</a>
                                <?php if (session()->has('user')): ?>
                                    <a href="/buku/edit/<?= $b['id'] ?>" class="btn">Edit</a>
                                    <a href="/buku/delete/<?= $b['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus buku ini?')">Delete</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6" style="text-align: center;">Data buku tidak ditemukan.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

        <?php if (!session()->has('user')): ?>
            <div class="auth-links">
                <a href="/auth/login" class="btn">Login</a>
                <a href="/auth/register" class="btn">Register</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>