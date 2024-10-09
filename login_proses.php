<?php
session_start();
include 'koneksi.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Periksa apakah user ada di database
    $stmt = $koneksi->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        // Jika password cocok, arahkan ke index.php
        $_SESSION['user'] = $user['name'];
        header('Location: index.php');
    } else {
        // Jika gagal login, arahkan kembali ke login page dengan pesan error
        header('Location: login.php?login_error=1');
    }
}
?>
