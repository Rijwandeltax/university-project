<?php
if(empty($_POST["dpt"]) || empty($_POST["cname"]) || empty($_POST["email"]) || empty($_POST["pass"])){
 header("location:vc.php");
 }
 else{
      include("log.php");
	  $name=$_POST["cname"];
	  $depart=$_POST["dpt"];
	  $email=$_POST["email"];
	  $pass=$_POST["pass"];
	  mysql_query("insert into logi values('$name','$email','$pass','$depart',1)");
	  if(mysql_query("insert into $depart values('$name','$email','$pass','$email',1)")){
	  header("location:vc.php?succ=1");
	  }
	}
	?>
	  