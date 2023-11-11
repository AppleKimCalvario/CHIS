<?php
session_start();
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'chis';

$conn = mysqli_connect($server, $username, $password, $dbname);
if(mysqli_connect_errno()) {
    echo "Connection Error " . mysqli_connect_errno();
}

?>