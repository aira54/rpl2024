<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nisn           = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];
$gender       = $_POST['gender'];

//query insert data ke dalam database
$query = "INSERT INTO burung_kalkun (nisn, nama_lengkap, alamat, gender) VALUES ('$nisn', '$nama_lengkap', '$alamat','$gender')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>