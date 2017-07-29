<?php
include("log.php");
  $email=$_GET["id"];
  mysql_query("update employ set flag=0 where email='$email'");
  header("location:vc.php?succ=1");
  ?>