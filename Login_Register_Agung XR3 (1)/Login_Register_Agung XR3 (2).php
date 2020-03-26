<?php
include "koneksi.php";
$email=$_POST["Email"];
$username=$_POST["Username"];
$password=$_POST["Password"];

$query= "INSERT INTO data_akun (Email, Username, Password) VALUES ('$email','$username','$password')";
$result= mysqli_query($connect, $query);
$num=mysqli_affected_rows($connect);
if($num > 0){
    echo "Penambahan Data Berhasil";
} else{
    echo "Penambahan Data Gagal: ".mysqli_connect_error($connect);
}