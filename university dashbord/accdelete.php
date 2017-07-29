<?php
include("log.php");
  $email=$_GET["id"];
  mysql_query("update account set flag=0 where email='$email'");
  header("location:account.php?succ=1");
  ?>