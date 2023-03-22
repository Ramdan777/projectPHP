<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title>Al-Qur'an Digital | RPL</title>

    <style>
      @font-face {
        font-family: 'Uthmani';
        src: url('assets/font/UthmanicHafs1Ver09.otf') format('truetype');
      }

      .arabic {
          font-family: 'Uthmani', 'serif';
          font-size: 20px;
          font-weight: bold;
          direction: rtl;
          padding: 0 5px;
          margin: 0;
          
      }
      
    </style>


  </head>
  <body>
    <div class="container">
    <?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<b>Data berhasil di input.</b>";
		}else if($pesan == "update"){
			echo "<b>Data berhasil di update.</b>";
		}else if($pesan == "hapus"){
			echo "<b>Data berhasil di hapus.</b>";
		}else if($pesan == "login"){
      echo "<b>Anda berhasil login.</b>";
    }
	}

  if(isset($_GET['Search'])){
    $Search = $_GET['Search'];
    echo "<b>Hasil pencarian : ".$Search."</b>";
  }
	?>
    <nav class="navbar navbar-light bg-light justify-content-between">
  <div class="container-fluid">
  <h3 class="navbar-brand">Al-Qur'an Digital XI-RPL</h3>
  <form action="index2.php" method="get">
	        <label>Search :</label>
	        <input type="text" name="Search">
	        <input type="submit" value="Search" style="margin-left:2px;">
            <input type="button" class="btn btn-primary" value="Export Excel" onclick="window.open('index-excel.php')" style="margin-left:5px;">
      <a type="button" class="btn btn-secondary" href="input.php" style="margin-left:5px;">+_Tambah Data Baru</a>
      <a type="button" class="btn btn-danger" href="index.php" style="margin-left:5px;">Log out</a>
    </form>
</div>
</nav>
<hr>
      <table class="table table-striped table-bordered">
        <tr>
          <th>No.</th>
          <th>Surah</th>
          <th>Arti</th>
          <th>Jumlah Ayat</th>
          <th>Tempat Turun</th>
          <th>Urutan Pewahyuan</th>
          <th>pengaturan</th>
        </tr>
        <?php
        //koneksi
        include "koneksi.php";
        include "session.php";
        if(isset($_GET['Search'])){
          $Search = $_GET['Search'];
          $tampil = mysqli_query($koneksi, "SELECT * FROM daftarsurah WHERE surah_indonesia like '%".$Search."%'");
        }else{
          $tampil = mysqli_query($koneksi, "SELECT * FROM daftarsurah") ;
        }
        $nomor = 1;
        while ($data = mysqli_fetch_array($tampil)):
          ?>
            <tr>
            <td><?php echo $nomor++; ?></td>
                <td>
                    <a href="detail.php?surah=<?= $data['id'] ?>&nama_surah=<?= $data
                    ['surah_indonesia'] ?>"> 
                    <?= $data['surah_indonesia'] ?> 
                  </a> <span class="arabic">(<?= $data['surah_arab']?>)</span>
                </td>
                <td align="center"><?= $data['arti']?></td>
                <td align="center"><?= $data['jumlah_ayat']?></td>
                <td align="center"><?= $data['tempat_turun']?></td>
                <td align="center"><?= $data['urutan_pewahyuan']?></td>
                <td>
				        <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				        <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin akan menghapus data?');">Hapus</a>				
			          </td>
            </tr>

          <?php endwhile; ?>
      </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>


  </body>
</html>
