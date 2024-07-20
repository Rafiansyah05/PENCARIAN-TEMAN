<?php 

session_start();



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashboar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="" href="dashboar.css">
  </head>
  <body>

<?php include 'layout/navbar.html'?>
<br>
<br>
<br>
<br>
<br>




<div class="container">
<div class="alert alert-primary" role="alert">
  <strong>INFOO KAWAN!!</strong> kalau searchnya ga berfungsi silahkan refresh halamannya dulu yaa...
</div>
  
  <div class="row p-4 cari" style="boreder-color: blue;">
  <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="masukkan nama">
  </div>
</div>

    
     <div id="searchresult">
    <div class="container">
      
  
    
<!--     
        <div class="row p-4">
        <table class="table table table-borderless">
            <h1 class="text-center"><strong>DATA DIRI TEMAN</strong></h1>
  <tbody>
    <tr>
      <td>Nama Lengkap </td>
      <td>: <?= $_SESSION["nama"]?> </td>
    </tr>
    <tr>
      <td>Gedung </td>
      <td>: <?= $_SESSION["gedung"]?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>: <?= $_SESSION["kelamin"]?></td>
    </tr>
    <tr>
      <td>Nomor WA </td>
      <td>: <?= $_SESSION["nomor"]?></td>
    </tr>
    <tr>
      <td>Media Sosial </td>
      <td>: <?= $_SESSION["sosial_media"]?></td>
    </tr>
  </tbody>
</table>
        </div> -->
    </div>
</div>


    <br>
    <br>

    <div class="container">
    
        <div class="row p-4">
        <table class="table table table-borderless">
            <h1 class="text-center"><strong>DATA DIRI KAMU</strong></h1>
  <tbody>
    <tr>
      <td>Nama Lengkap </td>
      <td>: <?= $_SESSION["nama"]?> </td>
    </tr>
    <tr>
      <td>Gedung </td>
      <td>: <?= $_SESSION["gedung"]?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>: <?= $_SESSION["kelamin"]?></td>
    </tr>
    <tr>
      <td>Nomor WA </td>
      <td>: <?= $_SESSION["nomor"]?></td>
    </tr>
    <tr>
      <td>Media Sosial </td>
      <td>: <?= $_SESSION["sosial_media"]?></td>
    </tr>
  </tbody>
</table>
        </div>
    </div>


   
    <?php include 'layout/footer.html'?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>