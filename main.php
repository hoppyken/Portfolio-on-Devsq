
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
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Company & Projects</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="main relative">
  <div class="hero flex container">
    <div class="lefty pt3">
      <div class="content px2">
        <header>
          <div class="intro flex items-center mb3"><img class="avatar self-center mr2" src="hope.jpg"/>
            <div>
              <h1 class="mb1">Hey, I'm Hope Ochei.</h1>
              <p>A developer &amp; Project Manager from Nigeia.</p>
              <p>She codes on Linux </p>
               <?php echo $result["personal_profile"] ?>
            </div>
          </div>
          <div class="products mb3">
            <h2 class="mb1">I build products.</h2>
            <p><a href="<"main.php"">Cystal Projects .Inc</a>,   </div>
          <div class="companies mb3">
            <h2 class="mb1">Companies I work with.</h2>
            <p><a href="https://www.olotusuare.co/">Olotusquare</a>, <a href="http://cisco.com">Federal Ministry of Education</a>, 
          </div>
          <div class="technologies mb3">
            <h2 class="mb1">I use different technologies.</h2>
            <p>JavaScript, HTML and Css for Front-End Development.<br/>PHP for back-end development.<br/>React Native for app development.</p>
          </div>
          <div class="blog mb3">
            <h2 class="mb1">I write about my work.</h2>
            <p><a href="portfolio.php">Blog</a>.</p>
          </div>
          <div class="links">
            <h2 class="mb1">I'm available for hire.</h2>
            <p><a href="hopeochei@gmail.com,">Email</a> and <a href="https://github.com/hoppyken">Github</a>.</p>
          </div>
        </header>
      </div>
    </div>
    <div class="righty flex justify-center items-center flex-column px2">
      <div class="product-grid">
        <h2 class="product-title right-align mb2">Products I'm working on</h2>

        <div class="stack stack-bouncygrid">
<a class="reqres" href="http://jquery.com"><img src="jquery.png"/></a>
<a class="jsforall" href="http://php.com"><img src="php.png"/></a>
<a class="plot" href="http://jquery.com"><img src="html.png"/></a>
<a class="ekko" href="http://jquery.com"><img src="java.jpeg"/></a>
      </div>
    </div>
  </div>
</section>




<section class="services">
  <h2 class="section-title">Hire me for these things</h2>
  <div class="container flex">
    <div class="consulting mx1 center">
      <h2><a href="hopeocchei@gmail.com?subject=Consulting request">Consulting</a></h2>
    </div>
    <div class="contracting mx1 center">
      <h2><a href="hopeochei@gmail.com?subject=Contracting request">Contracting</a></h2>
    </div>
    <div class="workshops mx1 center">
      <h2><a href="hopeochei@gmail.com?subject=Workshop request">Workshops</a></h2>
    </div>
  </div>
</section>



<section class="testimonials">
  <h2 class="section-title">About Me</h2>
  <div class="container">
    <ul class="flex flex-column">
      <li><img class="avatar" src="hoppy.jpg"/>
        <h2><a href="https://twitter.com/hopeochei">Just Me</a></h2>
        <p>"I am Hope Chinenye Ochei, From Nigeria. a Web Developer, an Educationist, a Business Analyst with a Project Consulting Firm. Likes Programming,singing and Movies."</p>
      </li>
      <li><img class="avatar" src="confidence.jpg"/>
        <h2> <a href="https://twitter.com/favourhart">My Skills</a></h2>
        <p>"Skilled in Microsoft Office Project Management Professional, 
		PTDF Technology Enhancement Programme on ICT, Skilled in Microsoft Projects 2010 software.
		Javascript Basics, CSS and HTMl. as a Front-end Developer,
		PHP, Jquery, Ajax, Node Js, Python. as a Back-end Developer, Public Analyst, Motivational speaker, 
		Relationship councellor, Businesss Advicer, Marketer	."</p>
      </li>
      <li><img class="avatar" src="chichi.jpg"/>
        <h2> <a href="https://twitter.com/Deniro">Educational Qualification</a></h2>
        <p>"Obtained a Post Graduate Diploma in Public Administration. 
			Also, had her BSC in Political Science Education,
			Executive Masters in Project Management (PNEUMA PROJECTS) 
			Diploma in Data Management IT. (Interlinks Technology, Atlanta Georgia USA), 
			Certification as a Front-End Developer from ALC-Google-Andela Intenship training.
			Certified as a Full-Stack Developer from Olotu-Sqare Dev-Fellowship.
			Certified as a Professional Teacher from Teachers Council of Nigeria.."</p>
      </li>
      <li><img class="avatar" src="sexy.jpg"/>
        <h2> <a href="https://twitter.com/Machee">Philanthropist</a></h2>
        <p>"The President and Founder of Fresh Minds Initiatives (FMI), The Secretary general of FEDAN, and the Business Analyst for Klint Global Resources (KGR), "</p>
      </li>
      <li><img class="avatar" src="hot.jpg"/>
        <h2> <a href="https://twitter.com/Tonye"> My Bio</a></h2>
        <p>"The CEO of Crystal Projects.Inc. a Full Stack Developer, both front and backend.
		having many years experience in Public Administration, Political and Government policies, Project Management, Educational Development,
		a Team leader, Philanthropist, Youth Advocacy. School curriculum Advocacy.
		Also has extensive work experience on Education implementation and Integration,
		also known for innovative work in Computer/Communication Education, 
		particularly on issues involving young girls in ICT, and women in tech. Performance and Service
		Management, with a leadership skills to motivate teams to increase productivity in a demanding environment
		She is involved in the teaching of Secondary ward courses in practical aspects of Computer Science.
		Hope Chinenye Ochei is also a member of the following learned/professional societies,
		An Associate member of The Institute of Strategic Management Nigeria. (ISMN).
		also an Associate member of the Nigeria Institute of safety Proffessionals. (NISP)."</p>
      </li>
    </ul>
  </div>
</section>

    </main>
    
    
    
</body>
</html>
