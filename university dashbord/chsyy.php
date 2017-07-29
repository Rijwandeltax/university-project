<?php
if(empty($_POST["branch"]) || empty($_POST["pdf"]) || empty($_POST["degree"])){
header("location:degree.php?err=3");
}
else{
include("log.php");
  $degree=$_POST["degree"];
  $branch=$_POST["branch"];
  $pdf=$_POST["pdf"];
  if(mysql_query("update sylebus set pdf='$pdf' where degree='$degree' AND branch='$branch'")){
  header("location:degree.php?succ=7");
  }
  else{
     header("location:degree.php?succ=7");
	 }
	 }
	 ?>
