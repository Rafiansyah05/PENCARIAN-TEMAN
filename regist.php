
<?php 

include 'service/database.php';


$pesan = "";

if(isset($_POST['input'])) {
  $nama = $_POST['nama'];
  $gedung = $_POST['gedung'];
  $nomor = $_POST['nomor'];
  $kelamin = $_POST['kelamin'];
  $sosial = $_POST['sosial_media'];

  $sql = "INSERT INTO users (nama, gedung, nomor,  kelamin, sosial_media) VALUES ('$nama', '$gedung', '$nomor', '$kelamin', '$sosial')";



  if (empty($nama)){
    $pesan ="Nama tidak boleh kososng";
  }else if(empty($gedung)) {
    $pesan ="gedung tidak boleh kososng";
  } else if (empty($nomor)){
    $pesan ="nomor tidak boleh kososng";
  }else if(empty($kelamin)){
    $pesan ="gender tidak boleh kososng";
  }else if (empty($sosial)) {
    $pesan ="Sosial media tidak boleh kososng";
  }else {

    
try {

  if($db->query($sql)) {
    header("location: login.php");
  }else {

    $pesan = "daftar akun gagal, silahkan coba lagi";
  }
 
} catch(mysqli_sql_exception) {

  $pesan = "Data Sudah digunakan";
}
$db->close();

  }


  


} 
 
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>regist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="regist.css">
  </head>
  <body>
  <br>
  <br>
    <div class="container  shadow-lg p-4">
        <div class="row">
           
        <form  method="POST" action="regist.php" name="myform">
            <h1 class="text-center"><strong>  REGISTRASI</strong></h1>
            <p class="text-center">silahkan isi data kalian dengan benar untuk bisa mempermudah pencarian.</p>
            <p class="text-center pesan" style="color: red;"><strong> <?= $pesan ?> </strong></p>
   <div class="mb-5">
    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    <div id="emailHelp" class="form-text">WAJIB menggunakan nama lengkap.</div>
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Gedung</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="gedung">
    <div id="emailHelp" class="form-text">WAJIB isi menggunakan angka atau huruf saja. contoh (A,B,C,.../1,2,3,...).</div>
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="kelamin">
    <div id="emailHelp" class="form-text">WAJIB isi dengan (laki-laki/perempuan).</div>
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Nomor WA(aktif)</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="nomor">
    <div id="emailHelp" class="form-text">WAJIB isi dengan (08........).</div>
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Media Sosial yang bisa di hubungi</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="sosial_media">
    <div id="emailHelp" class="form-text">WAJIB isi.</div>
  </div>
  <div id="emailHelp" class="form-text">sudah input data? <a href="login.php">login sekarang</a></div>
  <br>
  <div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" name="input"  onclick="input()" >Input</button>
</div>
</form>
        </div>
    </div>
    <br>
    <br>
    <br>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>