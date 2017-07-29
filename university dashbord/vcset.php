<?php
 if(empty($_POST["vname"]) || empty($_POST["email"]) || empty($_POST["pass"])){
 header("location:vc.php?err=1");
 }
 else{
       include("log.php");
      $email1=$_COOKIE["user"];
      $vname=$_POST["vname"];
	  $email=$_POST["email"];
	  $pass=$_POST["pass"];
	  $mobile=$_POST["mobile"];
	  $address=$_POST["address"];
	  mysql_query("update vc set flag=0 where email='$email1'");
	   setcookie("user",$email1,time()+0);
	  if(mysql_query("insert into vc values('$vname','$email','$mobile','$address','$pass',1)")){
	  setcookie("user",$email,time()+1000);
	   header("location:vc.php?succ=1");
	 }
	 else{
	       header("location:vc.php?err=4");
		   }
		   }
	 ?>