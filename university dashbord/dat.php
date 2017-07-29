<?php
include("log.php");
   if($_REQUEST["nk"]){
   $sb=$_REQUEST["nk"];
   for($i=1;$i<=$sb;$i++){
   ?>
   <input type="date" class="form-control" name="sub<?=$i?>"/><br />
   <?php
   }
   }
   
   
   ?>