<?php
if(empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["depart"])){
header("location:loginn.php?err=1");
}
else{
    include("log.php");
    $email=$_POST["email"];
	$pass=$_POST["pass"];
	$depart=$_POST["depart"];
	$p=1;
	$rs=mysql_query("select * from $depart where email='$email' AND password='$pass' AND flag=1");
	if($r=mysql_fetch_array($rs)){
	setcookie("user",$email,time()+1000);
	header("location:".$depart.".php"); 
	}
	else{
	header("location:loginn.php?err=2");
 }
}
?>	