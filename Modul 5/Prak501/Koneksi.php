<?php
function getConnection() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'prak5';

    // Menggunakan MySQLi untuk koneksi
    $koneksi = new mysqli($host, $username, $password, $dbname);

    // Cek apakah terjadi kesalahan saat koneksi
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }
    
    return $koneksi;
}
?>
