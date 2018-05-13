<?php
require("../includes/conn.php");

if(!empty($_POST["email"])){
    $name = $_POST["name"];
    $personal_profile = $_POST["personal_profile"];
    $company_profile = $_POST["company_profile"];
    $skills = $_POST["skills"];
    $contacts = $_POST["contacts"];
    $email = $_POST["email"];

    $sql = "UPDATE portfolio SET 
    company_profile = '$company_profile',
    name = '$name',
    personal_profile = '$personal_profile',
    contacts = '$contacts',
    skills = '$skills' WHERE
    email = '$email'";
// using the WHERE clause to set the condition for the query

if(mysqli_query($conn, $sql) == TRUE){
        echo "";
    } else{
        echo "";
    }
}


?>