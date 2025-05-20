<?php
require_once 'Model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nama_member' => htmlspecialchars($_POST['nama_member']),
        'nomer_member' => htmlspecialchars($_POST['nomer_member']),
        'alamat' => htmlspecialchars($_POST['alamat']),
        'tgl_terakhir_bayar' => $_POST['tgl_terakhir_bayar']
    ];

    if (!empty($_POST['id_member'])) {
        $data['id_member'] = $_POST['id_member'];
        updateMember($data);
    } else {
        insertMember($data);
    }

    header('Location: Member.php');
    exit;
}

// Proses hapus dengan GET
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    deleteMember($id);
    header('Location: Member.php');
    exit;
}
?>
