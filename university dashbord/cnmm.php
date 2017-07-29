<?php
   if($_REQUEST["lk"]){
   $sb=$_REQUEST["lk"];
   include("log.php");
   $rs=mysql_query("select * from employ where name='$sb'");
   while($r=mysql_fetch_array($rs)){
   ?>
   <input type="text" class="form-control" name="email" value="<?=$r[2]?>">
   <?php
   }
   }
   ?>
   