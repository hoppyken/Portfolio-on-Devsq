<?php
require("includes/conn.php");
$email = 'hopeochei@gmail.com';
$sql = "SELECT * FROM portfolio WHERE email = '$email'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>


 #wrapper{
    display:inline-block;
    width: auto;
}

    
body{
    background-image: url('./images/love.jpg');
        height: 100%;
        margin: 50px auto;	
        width: 600px;
        _background-color: _grey;
        
    }
img{
    width: 100%;
}
img:hover{
    -webkit-transform:rotate(90deg) scale(1.2);
}
h3{
      text-align: center;
      background: rgb(107, 117, 133);
      margin-top: 20px;
  }


 .figure{
    margin: 0;
    position:relative;
    border: 2px solid white;
    padding: 1%; 
    box-shadow: 0 0 4px rgba(0,0,0,.3);
    display: inline-block;
    cursor: pointer;
    overflow: hidden; 
    }

.figure, h3, p{
    padding: 10px 20px;
      margin: 0;
      position: relative;
      width: auto;
      }

figure:hover figcaption{
     opacity: 1;
     top: 0;
     }
    
figcaption{
     opacity:0 ;
     position: absolute;
     height: 100%;
     width: 100%;
     top: -100%;
     background-color: rgba(0,0,0,.4);
     color: white;
     padding:20px;
     _webkit-box-sizing:border-box;
     -webkit-transition: all 1s ease-in;
     -webkit-transition-delay: .5s;
  } 
    


.btn{
    display: inline-block;
    color: #333;
    font-size: 15px;
    margin-top: 15px;
    font-family: Arial, Helvetica, sans-serif;
    text-decoration: none;
    padding: 1rem 2rem;
    border: lightcoral 2px solid;
    opacity: -1;
    animation-name: btn;
    animation-duration: 3s;
    animation-delay: 2s;
    animation-fill-mode: forwards;

    transition-property: transform;
    transition-duration: 1s
}
@keyframes btn{
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}
.btn:hover{
    transform: rotateY(180deg);
    color: white;
    background-color: deepskyblue;
    border-radius: 15px;
    font-weight: bolder;
    
}



.section-dark{
	text-align: center;
background-color: #282e34;
color: #ddd; 	
}
    
    </style>
</head>
<body>



    
    <div id="wrapper">
            <div class="figure">
                    <figure> 
                            <img src="images/arrows.jpg" alt="picture of hope">
                            <figcaption> 
                                <h3>Portfolio</h3>
                                <h4><?php echo $result["name"] ?></h4>
                                <p>She codes on Linux </p>
                                <?php echo $result["personal_profile"] ?>
                                <p><h1> FRONT-END DEVELOPER</h1></p>    
                            </figcaption>
                        </figure>

          <hr>     


         <div class="btn">
             <a href="profile.php" class="btn">Biography</a>
        </div> 

            </div>

          <section class="section-dark">
	<footer> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h2>CONTACTS</h2>
	
	<a href="www.facebook.com/hopechinenye.ochei"<i class="fa fa-facebook-official" style="font-size:24px"></a></i>
	<a href="https://twitter.com/@ocheiH"<i class="fa fa-twitter" style="font-size:24px"></a></i>	
	<a href="www.linkedin.com/in/hope-chinenye-ochei-653b09162"<i class="fa fa-linkedin-square" style="font-size:24px"><a></i>
	<a href="www.facebook.com/hoppyken.devsq@olotusquare.co"><i class="fa fa-slack"></a></i>
	<a href="hopeochei@gmail.com"<i class="fa fa-mail"></a></i>
    <hr>	
	<p>	Copyright &copy; 2018, Crystal Project Inc.	</p>
	</footer>	
</section>

    </div>

</body>
</html>