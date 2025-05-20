<?php
require_once 'Model.php';

// Proses tambah atau update buku
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'judul_buku' => $_POST['judul_buku'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun_terbit' => $_POST['tahun_terbit']
    ];

    // Jika ada ID, berarti update
    if (!empty($_POST['id_buku'])) {
        $data['id_buku'] = $_POST['id_buku'];
        updateBook($data);
    } else {
        // Jika tidak ada ID, berarti tambah
        insertBook($data);
    }

    header('Location: Buku.php');
    exit;
}

// Proses hapus buku
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['hapusBuku'])) {
    $id = $_GET['hapusBuku'];
    deleteBook($id);

    header('Location: Buku.php');
    exit;
}
?>
