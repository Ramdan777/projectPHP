<?php

header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=Al-qur'an.xls");

?>
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
    <nav class="navbar navbar-light bg-light justify-content-between">
  <div class="container-fluid">
  <h3 class="navbar-brand">Al-Qur'an Digital</h3>
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
        </tr>
        <?php
        //koneksi
        include "koneksi.php";
        $tampil = mysqli_query($koneksi, "SELECT * FROM daftarsurah") ;
        $nomor = 1;
        while ($data = mysqli_fetch_array($tampil)):
          ?>
            <tr>
            <td><?php echo $nomor++; ?></td>
                <td>
                  <a> 
                    <?= $data['surah_indonesia'] ?> 
                  </a> <span class="arabic">(<?= $data['surah_arab']?>)</span>
                </td>
                <td><?= $data['arti']?></td>
                <td><?= $data['jumlah_ayat']?></td>
                <td><?= $data['tempat_turun']?></td>
                <td><?= $data['urutan_pewahyuan']?></td>
            </tr>

          <?php endwhile; ?>
      </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>


  </body>
</html>
