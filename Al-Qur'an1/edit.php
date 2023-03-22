<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Update Data</h1>
	</div>
	
	<br/>
	
	<a href="index2.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM daftarsurah WHERE id='$id'")or die(mysqli_error($koneksi));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Surah_indonesia</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="surah_indonesia" value="<?php echo $data['surah_indonesia'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Surah_arab</td>
				<td><input type="text" name="surah_arab" value="<?php echo $data['surah_arab'] ?>"></td>					
			</tr>	
			<tr>
				<td>Arti</td>
				<td><input type="text" name="arti" value="<?php echo $data['arti'] ?>"></td>					
			</tr>
            <tr>
				<td>Jumlah_ayat</td>
				<td><input type="number" name="jumlah_ayat" value="<?php echo $data['jumlah_ayat'] ?>"></td>					
			</tr>
            <tr>
				<td>Tempat_turun</td>
				<td><input type="text" name="tempat_turun" value="<?php echo $data['tempat_turun'] ?>"></td>					
			</tr>
            <tr>
				<td>Urutan_pewahyuan</td>
				<td><input type="text" name="urutan_pewahyuan" value="<?php echo $data['urutan_pewahyuan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" onclick="return confirm('Yakin akan mengubah data?');"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>



