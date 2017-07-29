<?php
if(empty($_POST["cname"]) || empty($_POST["email"]) || empty($_POST["contact"])){
header("location:student.php?err=2");
}
else{
include("log.php");
$email=$_POST["email"];
$cname=$_POST["cname"];
$contact=$_POST["contact"];
$web=$_POST["web"];
$address=$_POST["address"];
$x=1;
$rs=mysql_query("select * from clg");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
if(mysql_query("insert into clg values($x,'$cname','$address','$email','$contact','$web',1)")){
  header("location:student.php?succ=1");
}
else{
     header("location:student.php?err=3");
}
}
?>