<?php
include 'koneksi.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    // Simpan user baru ke database
    $stmt = $koneksi->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $name, $email, $password);

    if ($stmt->execute()) {
        // Berhasil register, arahkan ke halaman login
        header('Location: index.php');
    } else {
        echo "Gagal mendaftarkan pengguna. Silakan coba lagi.";
    }
}
?>
