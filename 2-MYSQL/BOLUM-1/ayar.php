<?php 
$baglan = mysqli_connect("localhost", "root", "", "mysqli_dersleri");

mysqli_set_charset($baglan,"UTF8");

if (mysqli_connect_errno() > 0) {
    die("hata : " . mysqli_connect_errno());
}






?>