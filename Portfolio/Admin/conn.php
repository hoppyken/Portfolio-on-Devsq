<?php
$url= 'localhost';
$username= 'root';
$password= 'hoppyken';
$database= 'Hoppykenphp';


try{
    $conn = new mysqli ($url,$username, $password, $database);
    echo "connection successful";
}
    catch(exception $e){
        die("connection faled". $e)
    ;}




?>