<?php
if(empty($_POST["newss"]) || empty($_POST["ne"])){
header("location:news.php?err=2");
}
else{
include("log.php");
    $newss=$_POST["newss"];
	$ne=$_POST["ne"];
	 $x=1;
   $rs=mysql_query("select * from newsss");
   while($r=mysql_fetch_array($rs)){
   $x=$x+1;
   }
	 
	if(mysql_query("insert into newsss values($x,'$newss','$ne',1)")){
	header("location:news.php?succ=2");
	}
	else{
	header("location:news.php?err=4");
	}
	}
?>