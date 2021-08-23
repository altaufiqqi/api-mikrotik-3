<?php
$koneksi = mysqli_connect("localhost","root","","data_tagihan");
$koneksi2 = mysqli_connect("localhost","root","","routelink");

if(mysqli_connect_error()){
    echo "koneksi ke database GAGAL". mysqli_connect_error();
}
?>