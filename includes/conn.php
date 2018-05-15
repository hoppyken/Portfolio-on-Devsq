<?php

$url= 'localhost';
$username = 'root';
$password = 'hoppyken';
$database = 'Profile';

try{
$conn =new mysqli($url, $username, $password, $database);
echo "Connection Successful";
}
catch(Exception $e){
    die("connection failed:". $e);
}
?>