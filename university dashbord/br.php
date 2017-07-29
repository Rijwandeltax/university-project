<?php
if(empty($_POST["degree"]) || empty($_POST["year"]) || empty($_POST["branch"])){
header("location:degree.php?err=1");
}
else{
   include("log.php");
   $degree=$_POST["degree"];
   $year=$_POST["year"];
   $branch=$_POST["branch"];
  $sem=$_POST["sem"];
  $sub=$_POST["sub"];
   $sub1=$_POST["sub1"];
  $sub2=$_POST["sub2"];
   $sub3=$_POST["sub3"];
   $sub4=$_POST["sub4"];
   $sub5=$_POST["sub5"];
   $sub6=$_POST["sub6"];
   $sub7=$_POST["sub7"];
   $sub8=$_POST["sub8"];
   $sub9=$_POST["sub9"];
   $sub10=$_POST["sub10"];
   $sub11=$_POST["sub11"];
   $sub12=$_POST["sub12"];
   $sub13=$_POST["sub13"];
   $sub14=$_POST["sub14"];
   $sub15=$_POST["sub15"];
   $sub16=$_POST["sub16"];
   $sub17=$_POST["sub17"];
   $sub18=$_POST["sub18"];
   $sub19=$_POST["sub19"];
   $sub20=$_POST["sub20"];
   $x=1;
   $rs=mysql_query("select * from subjects");
   while($r=mysql_fetch_array($rs)){
   $x=$x+1;
   }
   if(mysql_query("insert into subjects values($x,'$degree','$year','$branch','$sem','$sub','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$sub7','$sub8','$sub9','$sub10','$sub11','$sub12','$sub13','$sub14','$sub15','$sub16','$sub17','$sub18','$sub19','$sub20')")){
   header("location:degree.php?succ=1");
   }
   else{
   header("location:degree.php?err=5");
   }
  
  }
  ?>