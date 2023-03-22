<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM daftarsurah WHERE id='$id'")or die(mysqli_error($koneksi));
 
header("location:index2.php?pesan=hapus");
?>

