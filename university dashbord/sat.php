<?php
if(empty($_POST["year"]) || empty($_POST["dname"])){
 header("location:degree.php?err=1");
 }
 else{
 include("log.php");
 $dname=$_POST["dname"];
 $year=$_POST["year"];
 $sem=$_POST["semm"];
 $dur=$_POST["dur"];
 if(mysql_query("insert into degre values('$dname','$year','$sem','$dur',1)")){
 header("location:degree.php?succ=1");
 }
 else{
    header("location:degree.php?err=2");
 }
 }
 ?>
 