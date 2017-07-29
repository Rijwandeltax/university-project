<?php
if(empty($_POST["mname"]) || empty($_POST["email"]) || empty($_POST["pass"])){
header("location:library.php?err=2");
}
else{
include("log.php");
$email1=$_COOKIE["user"];
$email2=$_POST["email"];
$mname=$_POST["mname"];
$pass=$_POST["pass"];
if(mysql_query("insert into library values('$mname','$email2','$pass','$email1',1)")){
  header("location:library.php?succ=1");
}
else{
     header("location:library.php?err=3");
}
}
?>