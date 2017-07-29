<?php
include("log.php");
  $email=$_GET["id"];
  mysql_query("update degre set flag=0 where degree='$email'");
  header("location:degree.php?succ=1");
  ?>