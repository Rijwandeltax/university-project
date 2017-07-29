<?php
if(empty($_POST["year"]) || empty($_POST["dname"])){
 header("location:exam.php?err=1");
 }
 else{
 include("log.php");
 $dname=$_POST["dname"];
 $year=$_POST["year"];
 $sem=$_POST["semm"];
 $pdf=$_POST["pdf"];
 if(mysql_query("insert into degre values('$dname','$year','$sem','$pdf',1)")){
 header("location:exam.php?succ=1");
 }
 else{
    header("location:exam.php?err=2");
 }
 }
 ?>
 