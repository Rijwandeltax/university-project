<?php
include("log.php");
  $email=$_GET["id"];
  mysql_query("update library set flag=0 where email='$email'");
  header("location:library.php?succ=1");
  ?>