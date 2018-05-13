
<?php

require("includes/conn.php");
$email = 'hopeochei@gmail.com';
$sql = "SELECT * FROM portfolio WHERE email = '$email'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Profile</title>
	
	<link rel="stylesheet" href="css/style.css"> 
	
</head>
<body>

<header>
		<h1>CRYSTAL PROJECTS INC.</h1>
		
	
		<ul>
			<li><a href="#section-light">Home</a></li>
			<li><a href="#section-dark">Services</a></li>
			<li><a href="#section-dark">About</a></li>
			<li><a href="Admin/loginpage.php">login</a></li>
		</ul>


</header>

	
<!-- <div id="main">
  
  	
</div> -->

<script src="script.js"></script>

<div class="pimg1">
	<div class="ptext">
	<span class="border">
		PROJECT MANAGEMENT
	</span>
	</div>
</div>

<section class="section-light">
	<h2>BIOGRAPHY</h2>
	
	<p>
		Hi, welcome to my page, i am  <?php echo $result["name"] ?> , the CEO of Crystal Projects.Inc. a Full Stack Developer, both front and backend.
		having 10 years experience in Public Administration, Political and Government policies, Project Management, Educational Development,
		a Team leader, Philanthropist, Youth Advocacy. School curriculum Advocacy.
		Also has extensive work experience on Education implementation and Integration,
		also known for innovative work in Computer/Communication Education, 
		particularly on issues involving young girls in ICT, and women in tech. Performance and Service
		Management, with a leadership skills to motivate teams to increase productivity in a demanding environment
		She is involved in the teaching of Secondary ward courses in Computer Science, 
		teaching of students in practical aspects of Computer Science.
		Hope Chinenye Ochei is also a member of the following learned/professional societies,
		 </p>
</section>

<div class="pimg2">
	<div class="ptext">
	<span class="border trans">FRONT-END DEVELOPER</span>
	</div>
</div>
<section class="section-dark">
	<h2>EDUCATIONAL BACKGROUND</h2>
	<p>


			Obtained a Post Graduate Diploma in Public Administration. 
			Also, had her BSC in Political Science Education from Delta State University,
			Executive Masters in Project Management (PNEUMA PROJECTS) 
			Diploma in Data Management IT. (Interlinks Technology, Atlanta Georgia USA), 
			Certification as a Front-End Developer from ALC-Google-Andela Intenship training.
			Certified as a Full-Stack Developer from Olotu-Sqare Dev-Fellowship.
			Certified as a Professional Teacher from Teachers Council of Nigeria.
			An Associate member of The Institute of Strategic Management Nigeria. (ISMN).
			also an Associate member of the Nigeria Institute of safety Proffessionals. (NISP)
			
</p>
</section>

<div class="pimg3">
	<div class="ptext">
	<span class="border trans">
		RESERARCH PHILANTHROPIST
	</span>
	</div>
</div>
<section class="section-dark">
	<h2>SKILLS</h2>
	<p>Skilled in Microsoft Office Project Management Professional, 
		PTDF Technology Enhancement Programme on ICT, Skilled in Microsoft Projects 2010 software.
		Javascript Basics, CSS and HTMl. as a Front-end Developer,
		PHP, Jquery, Ajax, Node Js, Python. as a Back-end Developer, Public Analyst, Motivational speaker, 
		Relationship councellor, Businesss Advicer.	
</p>
</section>

<div class="pimg4">
	<div class="ptext">
	<span class="border trans">
			HUMAN CAPITAL EDUCATIONAL DEVELOPMENTS
	</span>
	<section class="section-dark">
	<h2>PHILANTHROPIST</h2>
	
	<p>
		 I,  <?php echo $result["name"] ?>, the founder of Fresh Minds Initiatives(FMI)
		 </p>
</section>

	</div>
	


</div>
<div class="pimg1">
	<div class="ptext">
	<span class="border">
		EDUCATIONAL IMPROVEMENT
	</span>
	</div>
</div>

<section class="section-dark">
	<footer> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h2>CONTACTS</h2>
	
	<a href="www.facebook.com/hopechinenye.ochei"<i class="fa fa-facebook-official" style="font-size:24px"></a></i>
	<a href="https://twitter.com/@ocheiH"<i class="fa fa-twitter" style="font-size:24px"></a></i>	
	<a href="www.linkedin.com/in/hope-chinenye-ochei-653b09162"<i class="fa fa-linkedin-square" style="font-size:24px"></a></i>
	<a href="hoppyken.devsq@olotusquare.co"<i class="fa fa-slack"></a></i>
	<a href="hopeochei@gmail.com"<i class="fa fa-mail"></a></i>
	<hr>	
	<p>	Copyright &copy; 2018, Crystal Project Inc.	</p>
	</footer>	
</section>

</body>
</html>