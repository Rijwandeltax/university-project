<?php
if(empty($_POST["ename"]) || empty($_POST["email"]) || empty($_POST["mob"]) || empty($_POST["dept"])){
header("location:vc.php?err=1");
}
else{
   include("log.php");
   $ename=$_POST["ename"];
   $email=$_POST["email"];
   $mob=$_POST["mob"];
   $dept=$_POST["dept"];
   $address=$_POST["address"];
   $x=1;
   $rs=mysql_query("select * from employ");
   while($r=mysql_fetch_array($rs)){
   $x=$x+1;
   }
   if(mysql_query("insert into employ values($x,'$ename','$email','$dept','$mob','$address',1)")){
   header("location:vc.php?succ=1");
   }
   
   else{
   header("location:vc.php?err=5");
   }
   }
   ?>