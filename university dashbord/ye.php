<?php
   if($_REQUEST["pk"]){
   $sb=$_REQUEST["pk"];
   $rs=mysql_query("select * from degre where degree='$sb'");
   var s=parseInt($rs);
   var p=1;
   echo "<select name="year">"
   while(s>0){
   ?> 
     <option name="<?=?>"
   <?php
   }
   }
   ?>