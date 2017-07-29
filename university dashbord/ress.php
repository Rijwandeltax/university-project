<?php
include("log.php");
   if($_REQUEST["nm"]){
   $sb=$_REQUEST["nm"];
  // $en=(int)$sb;
   $rs=mysql_query("select * from regis where enroll='$sb'");
   
   }
   ?>
   