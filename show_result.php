<?php
if(empty($_POST["branch"]) || empty($_POST["roll"])){
 header("location:result.php?err=1");
 }
 else{
 include("log.php");
 $roll=$_POST["roll"];
      $rs=mysql_query("select * from result where roll=$roll");
	  if($r=mysql_fetch_array($rs)){
	  ?>
	  <table border="2px">
	  <tr>
	  <td>Name</td>
	  <td><?=$r[29]?></td>
	  </tr>
	  <tr>
	  <td>fname</td>
	  <td><?=$r[30]?></td>
	  </tr>
	  <tr>
	  <td>Mname</td>
	  <td><?=$r[31]?></td>
	  </tr>
	  <tr>
	  <td>Roll No.</td>
	  <td><?=$r[2]?></td>
	  </tr>
	  <tr>
	  <td>Enroll</td>
	  <td><?=$r[1]?></td>
	  </tr>
	  <tr>
	  <td>Result</td>
	  <td><?=$r[28]?></td>
	  </tr>
	  <tr>
	  <td>persentage</td>
	  <td><?=$r[27]?></td>
	  </tr><tr>
	  <td>total</td>
	  <td><?=$r[26]?></td>
	  </tr></table>
	  <?php
	  }
	  }
	  ?>