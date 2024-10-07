<?php
include('koneksi.php');

// Get data from the form
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];
$gender       = $_POST['gender'];
$foto_name    = basename($_FILES["foto"]["name"]);
$target_dir   = "uploads/";
$target_file  = $target_dir . $foto_name;

// Check if a new photo is uploaded
if ($foto_name) {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        // Update query with a new photo
        $query = "UPDATE burung_kalkun SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat', gender = '$gender', foto = '$foto_name' WHERE id_siswa = '$id_siswa'";
    } else {
        echo "Error uploading new image.";
        exit;
    }
} else {
    // Update query without changing the photo
    $query = "UPDATE burung_kalkun SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat', gender = '$gender' WHERE id_siswa = '$id_siswa'";
}

// Execute the query
if ($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Diupdate!";
}
?>
