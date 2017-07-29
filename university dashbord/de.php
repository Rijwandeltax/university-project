<?php
include("log.php");
  $email=$_GET["id"];
  mysql_query("update degree set flag=0 where email='$email'");
  header("location:degree.php?succ=1");
  ?>