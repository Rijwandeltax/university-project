<?php
include("log.php");
   if($_REQUEST["kn"]){
   $sb=$_REQUEST["kn"];
   $b=(int)$sb;
   for($i=1;$i<=$b;$i++){
   ?>
   <input type="text" name="sub<?=$i?>" class="form-control" placeholder="sub<?=$i?>" /><br>
  <?php
  }
  }
  ?>