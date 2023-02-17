<?php

$serverName = "Localhost";
$username = "root";
$password = "";
$dbName = "oop-php";

//create connection

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(mysqli_connect_errno()){
    echo "failed to connect!";
    exit();
}
echo "connection succes!"
?>