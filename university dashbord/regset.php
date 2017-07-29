<?php
 if(empty($_POST["degree"]) || empty($_POST["year"]) || empty($_POST["branch"])){
 header("location:student.php?err=1");
 }
 else{
     include("log.php");
	 $degree=$_POST["degree"];
	 $year=$_POST["year"];
	 $sem=$_POST["sem"];
	 $branch=$_POST["branch"];
	 $enroll=$_POST["enroll"];
	 $roll=$_POST["roll"];
	 $name=$_POST["name"];
	 $fname=$_POST["fname"];
	 $mname=$_POST["mname"];
	 $email=$_POST["email"];
	 $mobile=$_POST["mobile"];
	 $clg=$_POST["clg"];
	 $address=$_POST["address"];
	 $x=1;
	 $rs=mysql_query("select * from registration ");
	 while($r=mysql_fetch_array($rs)){
	 $x=$x+1;
	 }
	 
	 if(mysql_query("insert into registration values($x,'$degree','$year','$sem','$roll','$branch','$enroll','$name','$fname','$mname','$mobile','$email','$address','$clg')")){
	 header("location:student.php?succ=3");
	 }
	 else{
	   header("location:student.php?err=4");
	   }
	 }
	 ?>  