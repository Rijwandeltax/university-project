
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
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.js"></script>

</head>
<body>
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
		  <li class="active"><a href="time_table.php">Time-Table</a></li>
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
		<div class="container-fluid">
		<div class="row">
		<div class="col-sm-3">
		<div class="banner-grid">
		<h3 style="text-align:center"><em>Quick Links</em></h3></div>
		<div class="w3-card-4" style="height:150px">
		<ul style="margin-left:50px;">
					 <li><a href="about.html"><span></span>History</a></li>
					 <li><a href="about.html"><span></span>Departments</a></li>
					 <li><a href="gallery.html"><span></span>Services</a></li>
					 <li><a href="blog.html"><span></span>Guidancs</a></li></ul>
		
		
		</div></div>
		<div class="col-sm-1"></div>
		
		<div class="col-sm-8">
		         <div class="banner-grid">
				 <h3 style="text-align:center">Examination Time table for B.tec</h3></div>
				<div class="w3-card-12">	
				<table class="table table-bordered">
     <tr>
     <th>SN</th>
	 <th>Degree</th>
	 <th>Year</th>
	 <th>Sem</th>
	 <th>Session</th>
	 <th>Downlode</th>
	 </tr>
	  <?php
	  include("log.php");
      $rs=mysql_query("select * from timetable where degree='B.tec'");
	   while($r=mysql_fetch_array($rs)){
	 ?>
	 <tr>
	 <td><?=$r[0]?></td>
	 <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><?=$r[3]?></td>
	  <td><?=$r[4]?></td>
	  <td style="color:#FF3300"><a href="../../university dashbord/uploads/<?=$r[1]?><?=$r[3]?>.pdf">Downlode</a></td>
	 </tr>
	 <?php
	 }
	 ?>
	 </table>
				</div><br><br><br>
				 
				 </div></div>
				 <div class="clearfix"></div></div></div>
		
		
		
		
<div class="footer">
	 <div class="container">
		 <div class="ftr-sec">
			 <div class="col-md-4">
				 <h3><em>About University</em></h3>
				<p>S.V. Technical University is situated in Silicon Vally .We give a atmosphere where you can improve your skills.</p>
				 <p>Our teachers are well trained & they always there for help.You can also develop your extra curriculam activity in all the field & The campus is covered with 24*7wifi.</p>
			 </div>
			 <div class="col-md-4">
				 <h3><em>Pages</em></h3>
				 <ul>
					 <li><a href="index.php"><span></span>Home</a></li>
					  <li><a href="academics.php"><span></span>Academics</a></li>
					 <li><a href="exam1.php"><span></span>Examination</a></li>
					<li><a href="faculty.php"><span></span>Faculty</a></li>
		            <li><a href="gelery.php"><span></span>Photo Gallery</a></li>
		            <li><a href="contact.php"><span></span>Contact Us</a></li>
				 </ul>
			 </div>
			 <div class="col-md-4">
				 <h3><em>Quick links</em></h3>
				 <ul>
					 <li><a href="about.html"><span></span>History</a></li>
					 <li><a href="about.html"><span></span>Departments</a></li>
					 <li><a href="gallery.html"><span></span>Services</a></li>
					 <li><a href="blog.html"><span></span>Guidancs</a></li>	
					 <li><a href="about.html"><span></span>Team</a></li>
					 <li><a href="contact.html"><span></span>Contact</a></li>
				 </ul>
			 </div>
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