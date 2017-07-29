<?php
include("log.php");
   if($_REQUEST["nk"]){
   $sb=$_REQUEST["nk"];
   for($i=1;$i<=$sb;$i++){
   ?>
   <input type="text" class="form-control" name="sub<?=$i?>" placeholder="enter the subject name"/><br />
   <?php
   }
   }
   ?>