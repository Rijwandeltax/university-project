<?php
include("log.php");
  $sn=$_GET["id"];
  $x=(int)$sn;
  mysql_query("update newsss set flag=0 where sn=$sn");
  header("location:news.php?succ=1");
  ?>