
<!DOCTYPE HTML>
<html>
<head>
<title>University a Educational Category Flat Bootstarp Responsive Website Template |Typography :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/w3.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.js"></script>
<style>
.top-menu ul li.active a,.top-menu ul li a:hover{
	color:#FFFFFF;
	background-color:#009933;
}
</style>
</head>
<body style="background-color:#ccc3c3">
<!-- banner --> 
<div class="banner2">	  
	 <div class="header">
			 <div class="logo">
				 <a href="index.php"><img src="images/logo.jpg" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li><a href="index.php">Home</a></li>
					  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="acade.php" id="dropdownMenu1">Academics <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="academy.php">Academic Calander</a></li>
            <li><a href="sylubus.php">Syllabus</a></li>
            <li><a href="college.php">College Info</a></li>
          </ul>
        </li>
       <li class="dropdown">
		  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="dropdownMenu1">Examination<span class="caret"></span></a>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		  <li><a href="time_table.php">Time-Table</a></li>
		  <li class="active"><a href="result.php">Result</a></li>
		  <li><a href="exam_cen.php">Exam-Center</a></li>
		  <li><a href="mark.php">Markshet</a></li>
		  </ul>
		  </li>
					 <li><a href="faculty.php">Faculty</a></li>
		<li><a href="gelery.php">Photo Gallery</a></li>
		<li><a href="about.php"><span></span>About Us</a></li>
		<li><a href="contact.php">Contact Us</a></li>

				 </ul>
			 </div>
			 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->
			 <div class="clearfix"></div>
	 </div>	  
</div>
<!---->
<!----end-header---->
	<!--pages-starts-->
	<div class="pages">
		<div class="container-fluid" style="margin-bottom:240px; margin-top:40px">
		<div style="margin-bottom:40px">
		<h1 class="text-center" style="font-family:'Ubuntu-Medium';">RESULT </h1>
		<hr style="border-top:2px solid #50d150; margin-left:44%; margin-right:44%"></div>
		
		 <div class="col-md-3 banner-grid">
				 <h3><em>Latest Results</em></h3>
				 <div class="banner-grid-sec">
						 <marquee direction="up" scrolldelay="200" onMouseOver="stop()" onMouseOut="start()" style="height:250px">
						                         <a href="#">eventsss</a><br>
						                          <a href="#">smad f</a><br>
												   <a href="#">eventsss</a><br>
						                          <a href="#">smad f</a><br>
												   <a href="#">eventsss</a><br>
						                          <a href="#">smad f</a><br>
												   <a href="#">eventsss</a><br>
						                          <a href="#">smad f</a><br>
												   <a href="#">eventsss</a><br>
						                          <a href="#">smad f</a><br>
						 </marquee>
					  <div class="clearfix"></div>
				 </div>
			 </div>
			 <div class="col-sm-1"></div>
		<div class="col-sm-8">
		         <div class="banner-grid w3-card-2">
				 <h3 style="text-align:center">Result</h3></div>
				<div class="w3-card-2 w3-white" style="height:300px; padding:40px 10px 10px 10px">
				
				<form method="post" action="show_result.php">
           <div class="row">
           <label class="col-sm-4"><em>BRANCH</em></label>
         <div class="col-sm-8">
          <select name="branch" class="form-control" id="sem">
  <?php
  include("log.php");
  $rs=mysql_query("select * from sylebus");
  while($r=mysql_fetch_array($rs)){
  ?>
  <option name="<?=$r[2]?>"><?=$r[2]?></option>
  <?php
  }
  ?>
  </select></div></div><br />
  <div id="show"></div><br />
  <div class="row">
  <label class="col-sm-4"><em>ROLL NO.</em></label>
  <div class="col-sm-8">
  <input type="text" name="roll" class="form-control" /></div></div><br />
  <input type="submit" class="w3-btn w3-ripple w3-light-green" style="float:right; margin-right:220px"/>
  </form></div><br><br><br>
				 
				 </div></div>
				 <div class="clearfix"></div></div></div>
		
		
		
		
<div class="footer" style="background-color:#0a0a1d; color:#FFFFFF">
	 <div class="container">
		 <div class="ftr-sec">
			 <div class="col-md-4">
				 <h3><em>About University</em></h3>
				 <p>S.V. Technical University is situated in Silicon Vally .We give a atmosphere where you can improve your skills.</p>
				 <p>Our teachers are well trained & they always there for help.You can also develop your extra curriculam activity in all the field & The campus is covered with 24*7wifi.</p>
			 </div>
			 <div class="col-md-1"></div>
			 <div class="col-md-3">
				 <h3><em>Pages</em></h3>
				 <ul>
					 <li><a href="index.php"><span></span>Home</a></li>
					  <li><a href="academics.php"><span></span>Academics</a></li>
					 <li><a href="exam1.php"><span></span>Examination</a></li>
					<li><a href="faculty.php"><span></span>Faculty</a></li>
		            <li><a href="gelery.php"><span></span>Photo Gallery</a></li>
		            <li><a href="contact.php"><span></span>Contact Us</a></li>
				 </ul>
			 </div><div class="col-md-1"></div>
			 <div class="col-md-3">
				 <h3><em>Quick links</em></h3>
				 <ul>
					 <li><a href="about.php"><span></span>History</a></li>
					 <li><a href="faculty.php"><span></span>Departments</a></li>
					 <li><a href="service.php"><span></span>Services</a></li>
					 <li><a href="about.php"><span></span>Guidancs</a></li>	
					 <li><a href="about.php"><span></span>Team</a></li>
					 <li><a href="contact.php"><span></span>Contact</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>Copyright © 2016 s.v. University. All rights reserved | Design by Rijwan</p>
	 </div>
</div>
<!---->
</body>
</html>