<?php
if($_REQUEST["id"]){
$d=$_REQUEST["id"];
include("log.php");
mysql_query("update problemss set flag=0 where sn='$d'");
header("location:problem.php?succ=1");
}