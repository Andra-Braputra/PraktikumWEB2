<?php
require_once 'Koneksi.php';
// Mendapatkan semua member
function getMembers() {
    $conn = getConnection();
    $result = $conn->query("SELECT * FROM member");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Mendapatkan member berdasarkan ID
function getMemberById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Menambahkan member baru
function insertMember($data) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO member (nama_member, nomer_member, alamat, tgl_terakhir_bayar) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $data['nama_member'], $data['nomer_member'], $data['alamat'], $data['tgl_terakhir_bayar']);
    $stmt->execute();
}

// Memperbarui data member
function updateMember($data) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE member SET nama_member = ?, nomer_member = ?, alamat = ?, tgl_terakhir_bayar = ? WHERE id_member = ?");
    $stmt->bind_param("ssssi", $data['nama_member'], $data['nomer_member'], $data['alamat'], $data['tgl_terakhir_bayar'], $data['id_member']);
    $stmt->execute();
}

// Menghapus member
function deleteMember($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM member WHERE id_member = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

// Mendapatkan semua peminjaman
function getPeminjaman() {
    $conn = getConnection();
    $result = $conn->query("SELECT p.id_peminjaman, m.nama_member, b.judul_buku, p.tgl_pinjam, p.tgl_kembali
                            FROM peminjaman p
                            JOIN member m ON p.id_member = m.id_member
                            JOIN buku b ON p.id_buku = b.id_buku");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Mendapatkan peminjaman berdasarkan ID
function getPeminjamanById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Menambahkan peminjaman baru
function insertPeminjaman($data) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiss", $data['id_member'], $data['id_buku'], $data['tgl_pinjam'], $data['tgl_kembali']);
    $stmt->execute();
}

// Memperbarui peminjaman
function updatePeminjaman($data) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE peminjaman SET id_member = ?, id_buku = ?, tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?");
    $stmt->bind_param("iissi", $data['id_member'], $data['id_buku'], $data['tgl_pinjam'], $data['tgl_kembali'], $data['id_peminjaman']);
    $stmt->execute();
}

// Menghapus peminjaman
function deletePeminjaman($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

// Mendapatkan semua buku
function getBooks() {
    $conn = getConnection();
    $result = $conn->query("SELECT * FROM buku");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Mendapatkan buku berdasarkan ID
function getBookById($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Menambahkan buku baru
function insertBook($data) {
    $conn = getConnection();
    $stmt = $conn->prepare("INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $data['judul_buku'], $data['penulis'], $data['penerbit'], $data['tahun_terbit']);
    $stmt->execute();
}

// Memperbarui data buku
function updateBook($data) {
    $conn = getConnection();
    $stmt = $conn->prepare("UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?");
    $stmt->bind_param("ssssi", $data['judul_buku'], $data['penulis'], $data['penerbit'], $data['tahun_terbit'], $data['id_buku']);
    $stmt->execute();
}

// Menghapus buku
function deleteBook($id) {
    $conn = getConnection();
    $stmt = $conn->prepare("DELETE FROM buku WHERE id_buku = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}
?>
