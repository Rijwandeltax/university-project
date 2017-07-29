<!DOCTYPE HTML>
<html>
<head>
<title>University a Educational Category Flat Bootstarp Responsive Website Template | Contact :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/w3.css" rel='stylesheet' type='text/css' />
<link href="riju.css" rel='stylesheet' type='text/css' />
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
<body style="background-color:#f0ebeb;">
<!-- banner --> 
<div class="banner2">	  
	 <div class="header">
			 <div class="logo">
				 <a href="index.php"><img src="images/logo.jpg" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li ><a href="index.php">Home</a></li>
					  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="acade.php" id="dropdownMenu1">Academics <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="academy.php">Academic Calander</a></li>
            <li><a href="sylubus.php">Syllabus</a></li>
            <li><a href="college.php">College Info</a></li>
          </ul>
        </li>
       <li class="dropdown" class="active">
		  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="dropdownMenu1">Examination<span class="caret"></span></a>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		  <li><a href="time_table.php">Time-Table</a></li>
		  <li><a href="result.php">Result</a></li>
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
		<div class="container-fluid" style="margin-bottom:70px; margin-top:40px">
		<div style="margin-bottom:40px">
		<h1 class="text-center" style="font-family:'Ubuntu-Medium';">Student Portal</h1>
		<hr style="border-top:2px solid #50d150; margin-left:44%; margin-right:44%">
		<p style="color:#000000; text-align:center; margin-left:24%; margin-right:24%" >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
		
		
		<div class="row">
		<div class="col-sm-3">
		<div class="banner-grid w3-card-2">
		<h3 style="text-align:center">Quick Links</h3></div>
		<div class="w3-card-2 w3-white" style="margin-top:5px; padding:10px 10px 10px 40px">
		<ul>
					 <li style="margin-top:10px"><a href="about.html"><span></span>History</a></li>
					 <li style="margin-top:10px"><a href="about.html"><span></span>Departments</a></li>
					 <li style="margin-top:10px"><a href="gallery.html"><span></span>Services</a></li>
					 <li style="margin-top:10px"><a href="blog.html"><span></span>Guidancs</a></li>
					  <li style="margin-top:10px"><a href="about.html"><span></span>Departments</a></li>
					 <li style="margin-top:10px"><a href="gallery.html"><span></span>Services</a></li>
					 <li style="margin-top:10px"><a href="blog.html"><span></span>Guidancs</a></li></ul>
		
		
		</div></div>

		<div class="col-sm-1"></div>
		
		<div class="col-sm-8">
		         <div class="banner-grid w3-card-2">
				 <h3 style="text-align:center">Student Information</h3></div>
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
  </select>
  </select></div></div><br />
  <div id="show"></div><br />
  <div class="row">
  <label class="col-sm-4"><em>ROLL NO.</em></label>
  <div class="col-sm-8">
  <input type="text" name="roll" class="form-control" /></div></div><br />
  <input type="submit" class="w3-btn w3-ripple w3-light-green" style="margin-left:10px; margin-right:480px"/>
  </form></div><br><br><br>
				 
				 </div></div>
				 <div class="clearfix"></div></div></div>

				
				
		
		
		
<div class="footer" style="background-color:#09242b!important; color:#FFFFFF">
	 <div class="container">
		 <div class="ftr-sec">
			 <div class="col-md-3 ftr-grid" style="padding-left:10px">
				 <h3 style="color:#aab0b3;">About University</h3>
				<p>S.V. Technical University is situated in Silicon Vally .We give a atmosphere where you can improve your skills.</p>
				 <p>Our teachers are well trained & they always there for help.You can also develop your extra curriculam activity in all the field & The campus is covered with 24*7wifi.</p>
			 </div>
			 <div class="col-md-3 ftr-grid2" style="padding-left:19px">
				 <h3 style="color:#aab0b3;">Pages</h3>
				 <ul>
					 <li><a href="index.php"><span></span>Home</a></li>
					  <li><a href="academics.php"><span></span>Academics</a></li>
					 <li><a href="exam1.php"><span></span>Examination</a></li>
					<li><a href="faculty.php"><span></span>Faculty</a></li>
		            <li><a href="gelery.php"><span></span>Photo Gallery</a></li>
		            <li><a href="contact.php"><span></span>Contact Us</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid3" style="padding-left:19px">
				 <h3 style="color:#aab0b3;">Quick links</h3>
				 <ul>
					 <li><a href="about.html"><span></span>History</a></li>
					 <li><a href="about.html"><span></span>Departments</a></li>
					 <li><a href="gallery.html"><span></span>Research</a></li>
					 <li><a href="blog.html"><span></span>Guidancs</a></li>	
					 <li><a href="about.html"><span></span>Team</a></li>
					 <li><a href="contact.html"><span></span>Contact</a></li>
				 </ul>
			 </div>
			 
			 <div class="col-md-3 ftr-grid3" style="padding-left:1px">
				 <h3 style="color:#aab0b3;">Follow Us</h3><br>
				  <ul class="social slideanim">
	            <li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
	            <li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
	            <li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
	            <li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
	            <li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
	        </ul></div>
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>Copyright © 2015 University. All rights reserved | Design by Rijwan</a></p>
	 </div>
</div>
<!---->
</body>
</html>
