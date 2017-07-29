<?php
include("log.php");
   if($_REQUEST["df"]){
   $sb=$_REQUEST["df"];
   $rs=mysql_query("select * from degre where degree='$sb'");
   while($r=mysql_fetch_array($rs)){
   $p=(int)$r[1];
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
   
  </select><br>
  <?php
  }
  ?>
