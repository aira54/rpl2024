<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM burung_kalkun WHERE id_siswa = '$id'";

if($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>