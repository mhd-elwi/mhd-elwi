<?php
$host = "localhost";
$user = "root";
$pass ="";
$koneksi = mysqli_connect($host,$user,$pass) or die ("koneksi ke database gagal");
mysqli_select_db ($koneksi,$name) or die ("database tidak tersedia");
?>