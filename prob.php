<?php
if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["msg"])){
   header("location:contact.php?err=1");
   }
   else{
    include("log.php");
	$name=$_POST["name"];
	$email=$_POST["email"];
	$msg=$_POST["msg"];
	$sub=$_POST["sub"];
	$enroll=$_POST["enroll"];
	$x=1;
	$rs=mysql_query("select * from problemss");
	while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	if(mysql_query("insert into problemss values($x,'$name','$email','$enroll','$sub','$msg',1)")){
	 header("location:contact.php?succ=1");
	 }
	 else{
	  header("location:contact.php?err=2");
	  }
	  }
	  ?>
	