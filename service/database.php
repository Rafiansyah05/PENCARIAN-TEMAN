<?php 

$hostname = "localhost";
$username = "root";
$password ="";
$database_name = "mahasiswa_telyu";

$db = mysqli_connect($hostname, $username, $password, $database_name);
 
if($db->connect_error) {
    echo "koneksi database gagal";
    die("error!!");
}

?>