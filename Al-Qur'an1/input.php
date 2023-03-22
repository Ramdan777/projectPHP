<!DOCTYPE html>
<html>
<head>
	<title>AL-Qur'an</title>
</head>
<body>
 
	<h2>AL-QUR'AN DIGITAL</h2>
	<br/>
	<a href="index2.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA AL-QUR'AN</h3>
	<form method="post" action="input_aksi.php">
		<table>
		    <tr>			
				<td>ID</td>
				<td><input type="number" name="id"></td>
			</tr>
			<tr>
				<td>Surah_indonesia</td>
				<td><input type="text" name="surah_indonesia"></td>
			</tr>
			<tr>
				<td>Surah_arab</td>
				<td><input type="text" name="surah_arab"></td>
			</tr>
            <tr>
				<td>Arti</td>
				<td><input type="text" name="arti"></td>
			</tr>
            <tr>			
				<td>Jumlah_ayat</td>
				<td><input type="number" name="jumlah_ayat"></td>
			</tr>
            <tr>
				<td>Tempat_turun</td>
				<td><input type="text" name="tempat_turun"></td>
			</tr>
            <tr>			
				<td>Urutan_pewahyuan</td>
				<td><input type="number" name="urutan_pewahyuan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>	
		</table>
	</form>
</body>