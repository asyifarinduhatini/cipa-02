<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "data_login";

$db = mysqli_connect($hostname,$username,$password,$database_name);

if($db->connect_error) {
    echo "gagal";
    die("error");
}

echo "sukses"; 
?>