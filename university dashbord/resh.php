<?php
include("log.php");
   if($_REQUEST["bn"]){
   $sb=$_REQUEST["bn"];
   $rs=mysql_query("select * from registration where enroll='$sb'");
   if($r=mysql_fetch_array($rs)){
   ?>
  
   <input type="text" class="form-control" name="degree" value="<?=$r[1]?>"><br>
  <label class="label label-success">year</label> <input type="text" class="form-control" name="year" value="<?=$r[2]?>"><br />
<label class="label label-success">sem</label>   <input type="text" class="form-control" name="sem" value="<?=$r[3]?>"><br />
 <label class="label label-success">roll no.</label>  <input type="text" class="form-control" name="roll" value="<?=$r[4]?>"><br />
 <label class="label label-success">branch</label>  <input type="text" class="form-control" name="branch" value="<?=$r[5]?>"><br />
 <label class="label label-success">Name</label>  <input type="text" class="form-control" name="name" value="<?=$r[7]?>"><br />
 <label class="label label-success">Father Name</label>  <input type="text" class="form-control" name="fname" value="<?=$r[8]?>"><br />
 <label class="label label-success">Mother Name</label>  <input type="text" class="form-control" name="mname" value="<?=$r[9]?>"><br />
   <?php
   }
  /* $sm=(int)$r[3];
   if($sm==0){
   
   $rs=mysql_query("select * from subjects where degree='$r[1]' AND year='$r[2]' AND branch='$r[5]'");
   $e=(int)$r[5];
   for($i=1;$i<=$e;$i++){*/
   
   }
   ?>