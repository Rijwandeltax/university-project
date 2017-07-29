<?php
include("log.php");
  $email=$_GET["id"];
  mysql_query("update problem set flag=0 where email='$email'");
  header("location:problem.php?succ=1");
  ?>