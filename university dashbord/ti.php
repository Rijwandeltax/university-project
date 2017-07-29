<?php
include("log.php");
   if($_REQUEST["pk"]){
   $sb=$_REQUEST["pk"];
   $rs=mysql_query("select * from degre where degree='$sb'");
   while($r=mysql_fetch_array($rs)){
   $p=(int)$r[1];
   $h=(int)$r[2];
   }
   ?>
   <select name="year" class="form-control">
   <option>Select year</option>
   <?php
   for($i=1;$i<=$p;$i++){
   ?>
   <option name="<?=$i?>"><?=$i?></option>
   <?php
   }
   ?>
   
  </select><br><br>
  <?php
  
   if($h!=0){
   ?>
   <select name="sem" class="form-control">
    <option>select sem</option>
    <?php
	for($j=1;$j<=$h;$j++){
   ?>
   <option name="<?=$j?>"><?=$j?></option>
  <?php
  }
  }
 ?>
 </select><br><br>
 <select name="branch" class="form-control">
 <option>Select branch</option>
 <?php
  $rs=mysql_query("select * from sylebus where degree='$sb'");
  
   while($r=mysql_fetch_array($rs)){
  ?>
  <option name="<?=$r[2]?>"><?=$r[2]?></option>
  <?php
  }
  ?>
  </select><br><br>
  <?php
  }
 ?>