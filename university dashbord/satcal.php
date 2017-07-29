<?php
 if(empty($_POST["degree"])){
 header("location:exam.php?err=1");
 }
 else{
     include("log.php");
	 $degree=$_POST["degree"];
	 $year=$_POST["sess"];
	 $x=1;
	 $img=$degree.$year.".pdf";
$target="calnder/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            $photo="no";
    }
	 
	 
	 
	 
	 
   $rs=mysql_query("select * from clnder");
   while($r=mysql_fetch_array($rs)){
   $x=$x+1;
   }
	 
	 
	 
if(mysql_query("insert into clnder values($x,'$degree','$year','$photo')")){
	 header("location:exam.php?succ=1");
	 }
	 else{
	 echo $degree;
	 echo $img;
		}
		}
		?>