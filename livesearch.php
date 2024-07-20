<?php 

include "service/database.php";

$pesan = "";

if(isset($_POST['input']) ) {
    $input = $_POST['input'];

    $query = "SELECT * FROM users WHERE nama LIKE '{$input}%'";

    $result = mysqli_query($db,$query);

    if(mysqli_num_rows($result) > 0) {?>

                
           <link rel="stylesheet" href="login.css">


           <div class="container">
            
    
    <div class="row p-4">
    <table class="table table table-borderless">
        <h1 class="text-center"><strong>DATA DIRI TEMAN</strong></h1>
<tbody>


<?php 

while($row = mysqli_fetch_assoc($result)) {
    $nama = $row['nama'];
    $gedung = $row['gedung'];
    $kelamin = $row['kelamin'];
    $nomor = $row['nomor'];
    $sosial_media = $row['sosial_media'];
}  

?>
<tr>
  <td>Nama Lengkap </td>
  <td>: <?php echo $nama; ?> </td>
</tr>
<tr>
  <td>Gedung </td>
  <td>: <?php echo $gedung; ?></td>
</tr>
<tr>
  <td>Jenis Kelamin </td>
  <td>: <?php echo $kelamin; ?> </td>
</tr>
<tr>
  <td>Nomor WA </td>
  <td>: <?php echo $nomor; ?></td>
</tr>
<tr>
  <td>Media Sosial </td>
  <td>: <?php echo $sosial_media; ?></td>
</tr>
</tbody>
</table>
    </div>
</div>



<?php
    }else {

       echo "Data Tidak Ditemukkan";
    }
}
?>