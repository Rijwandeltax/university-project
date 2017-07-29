<?php
include("log.php");
$rs=mysql_query("select * from degree");
?>
<div id="depart">
<div class="table-responsive">
<table class="table">
<tr>
    <th>Name Of Department</th>
	<th>Name Of Controller</th>
	<th>E-mail</th>
	<th>Password</th>
	<th>Delete</th>
</tr>
<?php
while($r=mysql_fetch_array($rs)){
?>	
<tr>
     <td><?=$r[3]?></td>
	 <td><?=$r[0]?></td>
	 <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><a href="delet.php">Delete</a></td>
</tr>
</table></div></div>
<div class="table-responsive">
<table class="table">
<tr>
    <th>Name Of Degree</th>
	<th>Name Of Year</th>
	<th>no. of sem</th>
	<th>sem time</th>
	<th>Delete</th>
</tr>
<?php
}
include("log.php");
$rs=mysql_query("select * from degre");
while($r=mysql_fetch_array($rs)){
?>	
<tr>
     <td><?=$r[3]?></td>
	 <td><?=$r[0]?></td>
	 <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><a href="delet.php">Delete</a></td>
</tr>
<?php
}
?>
</table></div></div>
<div id="sy">
<form method="post" action="satsy.php">
<select name="de" class="form-control" id="deg">
<option>select degree</option>
<?php
include("log.php");
$rs=mysql_query("select * from degree");
while($r=mysql_fetch_array($rs)){
?>
<option name="<?=$r[0]?>"><?=$r[0]?></option>
</select>
<div id="showw"></div>
<div id="showww"></div>
<input type="file" name="pdf" placeholder="enter the syllbus" />
<input type="submit" class="btn btn-primary btn-block" />
</form></div>

<?php
}
}
?>
$("#radio").change(function(){
var d=$("#radio").val();
  alert(d);
  $.post(
  "sem.php",
  {wk:d},
  function(data){
  $("#show").html(data);
     });
   });
   $("#deg").change(function(){
  var d=$("#deg").val();
  alert(d);
  $.post(
  "ye.php",
  {pk:d},
  function(data){
  $("#showw").html(data);
     });
   });<div id="sy">
<form method="post" action="satsy.php">
<select name="de" class="form-control" id="deg">
<option>select degree</option>
<?php
include("log.php");
$rs=mysql_query("select * from degree");
while($r=mysql_fetch_array($rs)){
?>
<option name="<?=$r[0]?>"><?=$r[0]?></option>
</select>
<div id="showw"></div>
<div id="showww"></div>
<input type="file" name="pdf" placeholder="enter the syllbus" />
<input type="submit" class="btn btn-primary btn-block" />
</form>