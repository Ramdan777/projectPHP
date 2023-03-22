<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$surah_indonesia = $_POST['surah_indonesia'];
$surah_arab = $_POST['surah_arab'];
$arti = $_POST['arti'];
$jumlah_ayat = $_POST['jumlah_ayat'];
$tempat_turun = $_POST['tempat_turun'];
$urutan_pewahyuan = $_POST['urutan_pewahyuan'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO daftarsurah VALUES('','$surah_indonesia','$surah_arab','$arti','$jumlah_ayat','$tempat_turun','$urutan_pewahyuan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index2.php?pesan=input");
 
?>