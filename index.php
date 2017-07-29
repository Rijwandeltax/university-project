<!DOCTYPE HTML>
<html>
<head>
<title>University a Educational Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->

<link href="css/w3.css" rel='stylesheet' type='text/css' />
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
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
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>  
<div class="banner">	  
	 <div class="header">
			 <div class="logo">
				 <a href="index.php"><img src="images/logo.jpg" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
					 <li class="active"><a href="index.php">Home</a></li>
					  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="acade.php" id="dropdownMenu1">Academics <span class="caret"></span></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="academy.php">Academic Calander</a></li>
            <li style="text-align:center"><a href="sylubus.php" >Syllabus</a></li>
            <li><a href="college.php">College Info</a></li>
			 <li><a href="course.php">Course</a></li>
			 <li><a href="holledy_calander.php">Holledy Calander</a></li>
			 <li><a href="admission.php">Admission</a></li>
			 <li><a href="gelery.php">Photo Gallery</a></li>
          </ul>
        </li>
		
       <li class="dropdown">
		  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="dropdownMenu1">Examination<span class="caret"></span></a>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		  <li><a href="time_table.php">Time-Table</a></li>
		  <li><a href="result.php">Result</a></li>
		  <li><a href="exam_cen.php">Exam-Center</a></li>
		  <li><a href="mark.php">Markshet</a></li>
		  <li><a href="download.php">Downloads</a></li>
		  </ul>
		  </li>
		  
		  <li class="dropdown">
		  <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="dropdownMenu1">Student Portal<span class="caret"></span></a>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		  <li><a href="time_table.php">Club</a></li>
		  <li><a href="result.php">Student Information</a></li>
		  <li><a href="notice.php">Notice</a></li>
		  <li><a href="download.php">Downloads</a></li>
		  <li><a href="enquire.php">Enquire</a></li>
		  <li><a href="research.php">Research</a></li>
		  </ul>
		  </li>
		  
		  
		  
					 <li><a href="faculty.php">Faculty</a></li>
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
	 <div class="slider">
		 <div class="caption">
			 <div class="container">
				  <div class="callbacks_container">
					  <ul class="rslides" id="slider">
						    <li><h3>Change Your Life.Start Here.</h3></li>
							<li><h3>Change Your Mind.Change Your Life.</h3></li>	
							<li><h3>Education For Individual And Social Responsibility.</h3></li>	
							<li><h3>Your Success.Our Tradition</h3></li>
					  </ul>	
						<div class="clearfix"></div>
				  </div>
			  </div>
		  </div>
	  </div>
	  
	  
	  
	  <div class="banner-grids">
		  <div class="container">
			 <div class="col-md-4 banner-grid">
				 <h3>Latest News</h3>
				 <div class="banner-grid-sec">
					 <div class="grid_info">
						 <marquee direction="up" scrolldelay="500" onMouseOver="stop()" onMouseOut="start()" style="height:250px">
						 <?php
						 include("log.php");
						 $rs=mysql_query("select * from newsss where flag=1");
						 while($r=mysql_fetch_array($rs)){
						 ?>
						                        <a href="#" style="color:#0000FF" class="animated "><?=$r[2]?>.</a><br> 
												<?php
												}
												?>
						                      
						 </marquee>
						 
					 </div>
				 </div>
			 </div>
			 <div class="col-md-4 banner-grid">
				 <h3>News Feed</h3>
				 <div class="banner-grid-sec">
					 <div class="news-grid">
						 <h4><a href="#">Vivamus tempus ligula</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
					 </div>
					 <div class="news-grid">
						 <h4><a href="#">Vivamus tempus ligula</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
					 </div>
					 <div class="news-grid">
						 <h4><a href="#">Vivamus tempus ligula</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra.</p>
					 </div><br>
				 </div>
			 </div>
			 <div class="col-md-4 banner-grid">
				 <h3>News Letter</h3>
				 <div class="banner-grid-sec news_sec">
					 <div class="news-ltr">
						 <h4><a href="#">Pellentesque sed arcu lacinia</a></h4>
						 <p>Aliquam sem velit, rhoncus sed arcu eu viverra. Suspendisse lacus posuere ultricies turpis.</p>
					 </div>
					 <form>
						 <input type="text" placeholder="Email Address*" required="">
						 <input type="submit" value="SEND">
					 </form>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		  </div>
	  </div>
</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
<div class="welcome">
	 <div class="container">
		 <h2>Transforming Education , Transforming India</h2>
		 <div class="welcm_sec">
			 <div class="col-md-9 campus">
				 <div class="campus_head">
					 <h3>Welcome</h3>
					 <p>Nunc justo sapien, cursus at urna at, placerat porttitor tellus. Aliquam vehicula tellus nunc,
					 id pretium lacus placerat dignissim. Donec quis dui sed lacus vulputate scelerisque a sit amet neque.</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w1.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w3.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w2.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w4.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Morbi molestie nec ante ultrices. Cum sociis natoque penatibus et magnis dis parturient</p>
				 </div>
				 <div class="clearfix"></div>
				 <div class="more_info">
						 <a href="blog.html">More Info....</a>
				 </div>
			 </div>
			 <div class="col-md-3 testimonal">
					<h3>Testimonials</h3>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>John.Mr</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>John.Mr</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>John.Mr</h5>
					</div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="news">
	 <div class="container">
		 <h3>Top News</h3>
		  <div class="event-grids">			
		     <div class="col-md-4 event-grid">
				 <div class="date">
				     <h4>26</h4>
					 <span>08/2016</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">Etiam malesuada feugiat rutrum purus quis vulputate.</a></h5>
						<p>Praesent sagittis in enim vel cursus. Aenean velit ante, maximus ac placerat at, 
						volutpat et orci. Aliquam eu tellus orci.</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="col-md-4 event-grid">
				 <div class="date">
				     <h4>24</h4>
					 <span>06/2016</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">Etiam malesuada feugiat rutrum purus quis vulputate.</a></h5>
						<p>Praesent sagittis in enim vel cursus. Aenean velit ante, maximus ac placerat at, 
						volutpat et orci. Aliquam eu tellus orci.</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="col-md-4 event-grid">
				 <div class="date">
				     <h4>20</h4>
					 <span>04/2016</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">Etiam malesuada feugiat rutrum purus quis vulputate.</a></h5>
						<p>Praesent sagittis in enim vel cursus. Aenean velit ante, maximus ac placerat at, 
						volutpat et orci. Aliquam eu tellus orci.</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="clearfix"></div>	
		 </div>
	 </div>
</div>
<!---->
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