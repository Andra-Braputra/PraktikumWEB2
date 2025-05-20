<?php
require_once 'Model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id_member' => $_POST['id_member'],
        'id_buku' => $_POST['id_buku'],
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali']
    ];

    if (!empty($_POST['id_peminjaman'])) { 
        $data['id_peminjaman'] = $_POST['id_peminjaman'];
        updatePeminjaman($data);
    } else { 
        insertPeminjaman($data);
    }

    header('Location: Peminjaman.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['hapusPeminjaman'])) {
    $id = $_GET['hapusPeminjaman'];
    deletePeminjaman($id);

    header('Location: Peminjaman.php');
    exit;
}
?>
