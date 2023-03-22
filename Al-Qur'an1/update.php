<?php 
 
include 'koneksi.php';
$id = $_POST['id'];
$surah_indonesia = $_POST['surah_indonesia'];
$surah_arab = $_POST['surah_arab'];
$arti = $_POST['arti'];
$jumlah_ayat = $_POST['jumlah_ayat'];
$tempat_turun = $_POST['tempat_turun'];
$urutan_pewahyuan = $_POST['urutan_pewahyuan'];
 
mysqli_query($koneksi, "UPDATE daftarsurah SET surah_indonesia='$surah_indonesia', surah_arab='$surah_arab', arti='$arti', jumlah_ayat='$jumlah_ayat', tempat_turun='$tempat_turun', urutan_pewahyuan='$urutan_pewahyuan' WHERE id='$id'");
 
header("location:index.php?pesan=update");
?>

