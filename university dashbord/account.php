<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){  
   $("a").click(function(){
        var t=$(this).attr("class");  
        $("#"+t).fadeIn(1000);
   if(t=="add"){
         $("#depart").hide();
         $("#sy").hide();
         $("#mem").hide();
   }
   else if(t=="depart"){
         $("#add").hide();
         $("#sy").hide();
         $("#mem").hide();
   }
   else if(t=="sy"){
         $("#add").hide();
         $("#depart").hide();
         $("#mem").hide();
   } 
   else if(t=="mem"){
         $("#add").hide();
         $("#depart").hide();
         $("#sy").hide();
   }
   });
   
   $("#cnm").change(function(){
  var k=$("#cnm").val();
  $.post(
  "cnmm.php",
  {lk:k},
  function(data){
  $("#msg").html(data);
     });
	 });
   
});
  
  
  
  </script>
  <style>
#add,#depart,#sy,#pitt,#mem{
display:none;
}
</style>
</head>
<body>
<?php
if(!isset($_COOKIE["user"])){
header("location:loginn.php");
}

else{
?>
<div class="container-fluid col-sm-3">
<nav class="navbar navbar-default" style="background-color:#336666">
<ul class="nav nav-stacked">
<li><a href="#" style="color:#9999CC"><strong><h3>UNIVERSITY</h3></strong></a></li>
<li><a href="#" class="add" style="color:#FFFFFF">PROBLEMS</a></li>
<li><a href="#" class="thi" style="color:#FFFFFF">ALL DEGREE</a></li>
<li><a href="#" class="depart" style="color:#FFFFFF">MEMBER</a></li>
<li><a href="#" class="mem" style="color:#FFFFFF">ADD MEMBER</a></li>
</ul>
</nav></div>
<div class="col-sm-6">
<div id="mem">
<form method="post" action="accmem.php">
<select name="mname" class="form-control" id="cnm">
<option>Select name</option>
<?php
include("log.php");
$rs=mysql_query("select * from employ where dpt='account' AND flag=1");
while($r=mysql_fetch_array($rs)){
?>
<option name="<?=$r[1]?>"><?=$r[1]?></option>
<?php
}
?>
</select><br />
<div id="msg"></div><br />
<input type="password" class="form-control" name="pass" placeholder="enter the password" /><br />
<input type="submit" class="btn btn-primary btn-block" />
</form></div>
<?php
include("log.php");
$rs=mysql_query("select * from account where flag=1");
?>
<div id="depart">
<div class="table-responsive">
<table class="table">
<tr>
	<th>Name </th>
	<th>E-mail</th>
	<th>Password</th>
	<th>Delete</th>
</tr>
<?php
while($r=mysql_fetch_array($rs)){
?>	
<tr>
     <td><?=$r[0]?></td>
	 <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><a href="accdelete.php?id=<?=$r[1]?>">Delete</a></td>
</tr>
<?php
}
?>
</table></div></div>
