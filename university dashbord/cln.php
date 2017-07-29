<?php
 if(empty($_POST["degree"]) || empty($_POST["year"])){
 header("location:exam.php?err=1");
 }
 else{
     include("log.php");
	 $degree=$_POST["degree"];
	 $year=$_POST["year"];
	 $sem=$_POST["sem"];
	 $class=$_POST["class"];
	 $sub1=$_POST["first"];
	 $sub2=$_POST["second"];
	 $sub3=$_POST["last"];
	 $sub4=$_POST["practical"];
	 $sub5=$_POST["exam"];
	 $sub6=$_POST["vacation"];
	 $sub7=$_POST["break"];
	 $x=1;
   $rs=mysql_query("select * from clnder");
   while($r=mysql_fetch_array($rs)){
   $x=$x+1;
   }
	 
	 
	 
if(mysql_query("insert into clnder values($x,'$degree','$year','$sem','$class''$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7')")){
	 header("location:exam.php?succ=1");
	 }
	 else{
	    header("location:exam.php?err=2");
		}
		}
		?>