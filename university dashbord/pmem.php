<?php
if(empty($_POST["mname"]) || empty($_POST["email"]) || empty($_POST["pass"])){
header("location:problem.php?err=2");
}
else{
include("log.php");
$email1=$_COOKIE["user"];
$email2=$_POST["email"];
$mname=$_POST["mname"];
$pass=$_POST["pass"];
$area=$_POST["area"];
if(mysql_query("insert into problem values('$mname','$email2','$pass','$email1','$area',1)")){
  header("location:problem.php?succ=1");
}
else{
     header("location:problem.php?err=3");
}
}
?>