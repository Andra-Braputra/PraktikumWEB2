<?php
require_once 'Model.php';
$member = [];
if (isset($_GET['id'])) {
    $member = getMemberById($_GET['id']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= empty($member) ? 'Tambah' : 'Edit' ?> Member</title>
    <link rel="stylesheet" href="Form.css">
</head>
<body>
    <div class="form-container">
        <h1><?= empty($member) ? 'Tambah' : 'Edit' ?> Data Member</h1>
        <form action="ProsesMember.php" method="post">
            <?php if (!empty($member)): ?>
                <input type="hidden" name="id_member" value="<?= $member['id_member'] ?>">
            <?php endif; ?>

            <div class="form-group">
                <label for="nama_member">Nama Member:</label>
                <input type="text" id="nama_member" name="nama_member" value="<?= htmlspecialchars($member['nama_member'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="nomer_member">Nomor Telepon:</label>
                <input type="text" id="nomer_member" name="nomer_member" value="<?= htmlspecialchars($member['nomer_member'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="3" required><?= htmlspecialchars($member['alamat'] ?? '') ?></textarea>
            </div>

            <div class="form-group">
                <label for="tgl_terakhir_bayar">Tanggal Terakhir Bayar:</label>
                <input type="date" id="tgl_terakhir_bayar" name="tgl_terakhir_bayar" value="<?= $member['tgl_terakhir_bayar'] ?? '' ?>" required>
            </div>

            <button type="submit">Simpan</button>
            <a href="Member.php">Kembali</a>
        </form>
    </div>
</body>
</html>
