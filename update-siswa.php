<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];
$gender      = $_POST['genderr'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE burung_kalkun SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat', gender = '$gender' WHERE id_siswa = '$id_siswa'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>