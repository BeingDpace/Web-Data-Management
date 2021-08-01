<?php
$host = "localhost";
$username = "?";
$password = "?";
$database = "?";
$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn){
    echo "DB CONNECTION ERROR";
    die();
}
