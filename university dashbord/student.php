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
        $("#"+t).show();
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
   $("#deg").change(function(){
  var l=$("#deg").val();
  $.post(
  "ti.php",
  {pk:l},
  function(data){
  $("#syshow").html(data);
     });
   });
    $("#cnm").change(function(){
  var k=$("#cnm").val();
  $.post(
  "cnmm.php",
  {lk:k},
  function(data){
  $("#msgr").html(data);
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
<li><a href="#" class="add" style="color:#FFFFFF">ADD College</a></li>
<li><a href="#" class="thi" style="color:#FFFFFF">ALL DEGREE</a></li>
<li><a href="#" class="depart" style="color:#FFFFFF">member</a></li>
<li><a href="#" class="mem" style="color:#FFFFFF">Add member</a></li>
<li><a href="#" class="sy" style="color:#FFFFFF">Student Registration</a></li>
</ul>
</nav></div>



<div class="col-sm-5">


<div id="mem">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
    <form method="post" action="sme.php">
	<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
    <select name="mname" class="form-control" id="cnm">
    <option>Select name</option>
<?php
    include("log.php");
    $rs=mysql_query("select * from employ where dpt='student' AND flag=1");
	while($r=mysql_fetch_array($rs)){
?>
   <option name="<?=$r[1]?>"><?=$r[1]?></option>
<?php
}
?>
    </select><br />
	
    <div id="msgr"></div><br />
    <input type="password" class="form-control" name="pass" placeholder="enter the password" /></div></div><br />
    <input type="submit" class="btn btn-primary btn-block" />
     </form></div></div></div></div>
	 
	 
<?php
   include("log.php");
   $rs=mysql_query("select * from student where flag=1");
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
	<th>Delete</th>
</tr>
<?php
while($r=mysql_fetch_array($rs)){
?>	
<tr>
     <td><?=$r[0]?></td>
	 <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><a href="delete.php?id=<?=$r[1]?>">Delete</a></td>
</tr>
<?php
}
?>
</table></div></div></div></div></div>





<div id="sy">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="regset.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" class="form-control" name="roll" placeholder="enter the roll" /><br />
<input type="text" class="form-control" name="enroll" placeholder="enter enroll" /><br />
<select name="degree" class="form-control" id="deg">
<option>Select Degree</option>
<?php
include("log.php");
$rs=mysql_query("select * from degre");
while($r=mysql_fetch_array($rs)){
?>	
<option name="<?=$r[0]?>"><?=$r[0]?></option>
<?php
}
?>
</select><br />

<div id="syshow"></div><br />

<input type="text" class="form-control" name="name" placeholder="enter the full name" /><br />
<input type="text" class="form-control" name="fname" placeholder="enter the father name" /><br />
<input type="text" class="form-control" name="mname" placeholder="enter the mother name" /><br />
<input type="email" class="form-control" name="email" placeholder="enter the email" /><br />
<input type="taxt" class="form-control" name="mobile" placeholder="enter the mobile no." /><br />
<input type="text" class="form-control" name="clg" placeholder="enter the clg name" /><br />
<textarea class="form-control" rows="5" cols="100" name="address">Address..</textarea></div></div><br />
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>


<div id="add">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="clge.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" class="form-control" name="cname" placeholder="enter the clg name" /><br />
<input type="email" class="form-control" name="email" placeholder="enter mail" /><br />
<input type="text" class="form-control" name="contact" placeholder="enter the contact" /><br />
<input type="text" class="form-control" name="web" placeholder="enter the site name" /><br />
<textarea class="form-control" rows="5" cols="100" name="address" placeholder="enter the clg address"></textarea></div></div><br />
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>

<?php
}
?>


</div></body></html>