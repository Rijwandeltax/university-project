<?php
include("log.php");
   if($_REQUEST["wk"]){
   $sb=$_REQUEST["wk"];
   $rs=mysql_query("select * from sylebus where degree='$sb'");
   ?>
   <select name="branch" class="form-control">
   <option>select branch</option>
   <?php
   while($r=mysql_fetch_array($rs)){
  ?>
  <option name="<?=$r[1]?>"><?=$r[1]?></option>
  <?php
  }
  ?>
  </select>
  <?php
  }
 ?>