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
body{
 background-color:#f9ffe5;
 font-style:italic;
 font-family:Arial, Helvetica, sans-serif;
 }
 .nav-stacked>li>a{padding-top:20px;
                 line-height:20px;
				 color:#FF0033 !important;
				 }
		.nav-stacked>li.active>a{background-color:#333333;
		}		 	
			 
.nav-stacked>li>a:hover{
background:#CCFF66 !important;
transition:all .5s !important;
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
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="pmem.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="mname" class="form-control" id="cnm">
<option>Select name</option>
<?php
include("log.php");
$rs=mysql_query("select * from employ where dpt='problem' AND flag=1");
while($r=mysql_fetch_array($rs)){
?>
<option name="<?=$r[1]?>"><?=$r[1]?></option>
<?php
}
?>
</select><br />
<div id="msg"></div><br />
<select name="area" class="form-control">
<option>Select Area</option>
<option name="marksheet">marksheet</option>
<option name="rechacking">rechacking</option>
<option name="revil">rivil</option>
<option name="fees">fees</option>
<option name="other">other</option>
</select><br />
<input type="password" class="form-control" name="pass" placeholder="enter the password" /></div></div><br />
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>
<?php
include("log.php");
$rs=mysql_query("select * from problem where flag=1");
?>
<div id="depart">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<div class="table-responsive">
<table class="table">
<tr>
	<th>Name </th>
	<th>E-mail</th>
	<th>Password</th>
	<th>Arae</th>
	<th>Delete</th>
</tr>
<?php
while($r=mysql_fetch_array($rs)){
?>	
<tr>
     <td><?=$r[0]?></td>
	 <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><?=$r[3]?></td>
	 <td><a href="pdelete.php?id=<?=$r[1]?>">Delete</a></td>
</tr>
<?php
}
?>
</table></div></div></div></div></div>


<?php
include("log.php");
$rs=mysql_query("select * from problemss where flag=1");
?>
<div id="add">
<div class="w3-card-8 w3-gray" style="width:100%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<div class="table-responsive">
<table class="table">
<tr>
	<th>Name </th>
	<th>E-mail</th>
	<th>Enroll No.</th>
	<th>Arae</th>
	<th>Problem</th>
	<th>Delete</th>
</tr>
<?php
while($r=mysql_fetch_array($rs)){
?>	
<tr>
	 <td><?=$r[1]?></td>
	 <td><a href="mailto:<?=$r[2]?>"><?=$r[2]?></a></td>
	 <td><?=$r[3]?></td>
	 <td><?=$r[4]?></td>
	 <td><?=$r[5]?></td>
	 <td><a href="pde.php?id=<?=$r[0]?>"">Delete</a></td>
</tr>
<?php
}
?>
</table></div></div></div></div></div>









</div>
<?php
}
?>
</body></html>