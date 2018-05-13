<?php
require("../includes/conn.php");
$username = $_GET['username'];
$password = $_GET['password'];

$sql="SELECT * FROM admin WHERE username ='$username' AND password = 'password' LIMIT 1";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

if($row && empty($row)){
    echo "Auth Error";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <style>
    
    body{
        background-image:url("../images/farm.jpg");
        height:100px;
        width:600px;
    }

    .form{
        text-align: center;
        height:400px;
        width:400px;
        margin-left:350px;
        background-image: url("../images/avatar.png");
        
    }
    
    
    </style>
</head>
<body>
<div class="form">
                <section>
                <h1>PROFILE</h1>
                    <form action="formsubmit.php" method="POST">
                        <p>Name:<input type="text" name="name"></p>
                        <p>Personal Profile:<input type="text" name="personal_profile" /></p>
                        <p>Company Profile:<input type="text" name="company_profile" /></p>
                        <p>Skills:<input type="text" name="skills"></p>
                        <p>Contacts:<input type="text" name="contacts"></p>
                        <p>Email:<input type="email" name="email"></p>
       
                    <input type="submit" value="Submit">
                </form>
                </section> 
            </div>
            
 <!-- <hr>


           
            </div>
</body>
</html>