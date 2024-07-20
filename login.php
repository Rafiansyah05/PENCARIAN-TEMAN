
<?php 

session_start();
$pesan ="";

include 'service/database.php';
if(isset($_POST['login'])) {
  $nama = $_POST['nama'];
  $gedung = $_POST['gedung'];
  $nomor = $_POST['nomor'];
  $kelamin = $_POST['kelamin'];
  $sosial = $_POST['sosial_media']; 

  $sql = "SELECT * FROM users WHERE nama='$nama' AND gedung='$gedung' AND nomor='$nomor' AND kelamin='$kelamin' AND sosial_media='$sosial'
  ";

$result = $db->query($sql);

if($result->num_rows > 0) {
  $data = $result->fetch_assoc();
  $_SESSION["nama"] = $data["nama"];
  $_SESSION["gedung"] = $data["gedung"];
  $_SESSION["nomor"] = $data["nomor"];
  $_SESSION["kelamin"] = $data["kelamin"];
  $_SESSION["sosial_media"] = $data["sosial_media"];

  header("location: dashboar.php ");
}else {
  $pesan = "Data anda tidak ditemukan";
}
$db->close();

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    
  <br>
  <br>
    <div class="container  shadow-lg p-4">
        <div class="row">
           
        <form action="login.php" method="POST">
            <h1 class="text-center"><strong>  LOGIN</strong></h1>
            <p class="text-center">Silahkan login</p>
            <p class="text-center">masukkan data sesuai dengan yang sudah di inputkan</p>
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
 
    <label for="exampleInputPassword1" class="form-label">Jenis kelamin</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="kelamin">
    <div id="emailHelp" class="form-text">WAJIB isi dengan (laki-laki/perempuan).</div>
  </div>
 
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Nomor WA(aktif)</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="nomor">
    <div id="emailHelp" class="form-text">WAJIB isi dengan (08........).</div>
  </div>

  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Sosial Media</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="sosial_media">
    <div id="emailHelp" class="form-text">WAJIB isi.</div>
  </div>
 
  <div id="emailHelp" class="form-text">Belum input data? <a href="regist.php">input sekarang</a></div>
  <br>
  <div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" name="login">Login</button>
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