<?php
if(empty($_POST["branch"])){
header("location:degree.php?err=3");
}
else{
    include("log.php");
  $degree=$_POST["degree"];
  $branch=$_POST["branch"];
  $x=1;
  $img=$branch.".pdf";
$target="uploads/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            $photo="no";
    }
	
	 $rs=mysql_query("select * from timetable");
   while($r=mysql_fetch_array($rs)){
   $x=$x+1;
   }
	$x=$x+1;

if(mysql_query("insert into sylebus values($x,'$degree','$branch','$photo')")){
  header("location:degree.php?succ=1");
}
 else{ 
      echo 'rijwan';
      echo $photo ;
	  echo $degree;
	  echo $branch;
	  
	  }
	  }
	  ?>