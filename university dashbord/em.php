<?php
   if($_REQUEST["tk"]){
   $sb=$_REQUEST["tk"];
   include("log.php");
  ?>
  <select name="cname" class="form-control" id="cn">
  <option>employee name</option>
  <?php 
   $rs=mysql_query("select * from employ where dpt='$sb' AND flag=1");
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
   