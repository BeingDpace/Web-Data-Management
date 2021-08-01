<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "testdb";
$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn){
    echo "DB CONNECTION ERROR";
    die();
}
