<?php
include("log.php");
  $sn=$_GET["id"];
  mysql_query("update newsss set flag=0 where sn=$sn");
  header("location:news.php?succ=1");
  ?>