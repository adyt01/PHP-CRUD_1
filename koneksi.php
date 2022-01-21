<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'xhapussaja';

//Koneksi kedatabase
$con  = mysqli_connect($host,$user,$password,$database);

//jika tidak terhubung, maka koneksi dihentikan dan tampilkan pesan.
if(!$con){
    die('Koneksi Gagal'.mysqli_connect_error());
}

?>