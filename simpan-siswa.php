<?php
// Sertakan koneksi database
include('koneksi.php');

// Ambil data dari form
$nisn           = $_POST['nisn'];
$nama_lengkap   = $_POST['nama_lengkap'];
$alamat         = $_POST['alamat'];
$gender         = $_POST['gender'];

// Penanganan upload file
$foto_name      = basename($_FILES["foto"]["name"]);
$target_dir     = "uploads/";
$target_file    = $target_dir . $foto_name;

// Periksa apakah direktori uploads ada; jika tidak, buat direktori
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0755, true); // Buat direktori dengan permission
}

// Periksa apakah file diupload tanpa error
if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
    // Validasi jenis file
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $file_type = mime_content_type($_FILES["foto"]["tmp_name"]);
    
    if (!in_array($file_type, $allowed_types)) {
        echo "Jenis file tidak valid. Silakan unggah gambar (JPEG, PNG, GIF).";
        exit;
    }
    
    // Pindahkan file yang diupload ke direktori uploads
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // Masukkan data ke dalam database
        $query = "INSERT INTO burung_kalkun (nisn, nama_lengkap, alamat, gender, foto) VALUES ('$nisn', '$nama_lengkap', '$alamat', '$gender', '$foto_name')";
        
        // Periksa apakah data berhasil disimpan
        if ($koneksi->query($query)) {
            // Arahkan ke index.php
            header("location: index.php");
        } else {
            echo "Data Gagal Disimpan!";
        }
    } else {
        echo "Error saat mengupload file.";
    }
} else {
    echo "Error: " . $_FILES["foto"]["error"];
}
?>
