<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
$(document).ready(function(){
$("a").click(function(){
var t=$(this).attr("class");
$("#"+t).show();
if(t=="depart"){
$("#new").hide();
$("#add").hide();
$("#emp").hide();
$("#alemp").hide();
$("#alvc").hide();
$("#delem").hide();
}
else if(t=="add"){
$("#new").hide();
$("#depart").hide();
$("#emp").hide();
$("#alemp").hide();
$("#alvc").hide();
$("#delem").hide();
}
 else if(t=="new"){
$("#depart").hide();
$("#add").hide();
$("#emp").hide();
$("#alemp").hide();
$("#alvc").hide();
$("#delem").hide();
}
else if(t=="emp"){
$("#depart").hide();
$("#add").hide();
$("#new").hide();
$("#alemp").hide();
$("#alvc").hide();
$("#delem").hide();
}
else if(t=="delem"){
$("#depart").hide();
$("#add").hide();
$("#new").hide();
$("#emp").hide();
$("#alemp").hide();
$("#alvc").hide();
}
else if(t=="alemp"){
$("#depart").hide();
$("#add").hide();
$("#new").hide();
$("#emp").hide();
$("#alvc").hide();
$("#delem").hide();
}
else if(t=="alvc"){
$("#depart").hide();
$("#add").hide();
$("#new").hide();
$("#emp").hide();
$("#delem").hide();
$("#alemp").hide();
}
});

 $("#empy").change(function(){
  var q=$("#empy").val();
  $.post(
  "em.php",
  {tk:q},
  function(data){
  $("#rij").html(data);
     });
   });
   
   $("#cn").change(function(){
  var k=$("#cn").val();
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
#add,#new,#depart,#emp,#delem,#alemp,#alvc{display:none;
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
<body>
<?php
if(!isset($_COOKIE["user"])){
header("location:loginn.php");
}

else{
?>
<div class="container-fluid  col-sm-3">
<nav class="navbar navbar-default" style="background-color:#336666">
<ul class="nav nav-stacked">
<li><a href="#" style="color:#9999CC"><strong><h3>UNIVERSITY</h3></strong></a></li>
<li><a href="#" class="add" style="color:#FFFFFF">ADD DEPARTMENT</a></li>
<li><a href="#" class="depart" style="color:#FFFFFF">DEPARTMENT</a></li>
<li><a href="#" class="new" style="color:#FFFFFF">NEW VC</a></li>
<li><a href="#" class="emp" style="color:#FFFFFF">ADD Employee</a></li>
<li><a href="#" class="alemp" style="color:#FFFFFF">ALL Employee</a></li>
<li><a href="#" class="alvc" style="color:#FFFFFF">ALL VC</a></li>
<li><a href="#" class="delem" style="color:#FFFFFF">Change The Controller</a></li>

</ul>
</nav></div>



<div class="col-sm-7">

<div id="add">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="sett.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="dpt" class="form-control" id="empy">
<option>employee</option>
                <option name="exam">exam</option>
				<option name="degree">degree</option>
				<option name="account">account</option>
				<option name="student">student</option>
				<option name="problem">problem</option>
				<option name="library">library</option>
				</select></div></div><br />
				<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
				<div id="rij"></div></div></div><br />
				<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
				<select class="form-control" id="cn">
                 <option>email</option>
                <option>email is</option>
				</select></div></div><br />
				<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
               <div id="msg"></div></div></div>	<br />		
			   <div class="row"><div class="col-sm-2"></div><div class="col-sm-9">	 
        <input type="password" class="form-control" name="pass" placeholder="enter password" /></div></div><br />
        <input type="submit" class="btn btn-success" style="float:right" />  
</form></div></div></div></div>



<div id="new">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="vcset.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" class="form-control" name="vname" placeholder="enter the vc name" /></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="email" class="form-control" name="email" placeholder="enter the vc email" /></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" class="form-control" name="mobile" placeholder="enter the mobile no." /><br />
<textarea name="address" class="form-control" cols="10" rows="6">address...</textarea><br />
<input type="password" class="form-control" name="pass" placeholder="enter password" /><br /></div></div>
<input type="submit" class=" btn btn-success" style="float:right" />
</form></div></div></div></div>



<?php
include("log.php");
$rs=mysql_query("select * from logi where flag=1");
?>
<div id="depart" class="table-responsive">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>MEMBER</h4></div>
<div class="panel-body">
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
	 <td><a href="delet.php?id=<?=$r[1]?>">Delete</a></td>
</tr>
<?php
}
?>
</table></div></div></div></div>


<div id="emp">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD Employee</h4></div>
<div class="panel-body">
<form method="post" action="empl.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" class="form-control" name="ename" placeholder="enter the full name" /><br />
<input type ="email" class="form-control" name="email" placeholder="enter the email" /><br />
<input type="text" class="form-control" name="dept" placeholder="enter the department name" /><br />
<input type="text" class="form-control" name="mob" placeholder="enter the mobile no." /><br />
<textarea name="address" class="form-control" cols="10" rows="6">address...</textarea></div></div><br />
<input type="submit" class=" btn btn-success" style="float:right" />
</form></div></div></div></div>

<?php
include("log.php");
$rs=mysql_query("select * from employ where flag=1 order by sn DESC");
?>
<div id="alemp" class="table-responsive">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<table class="table">
<tr>
    <th>Name</th>
	<th>email</th>
	<th>Department</th>
	<th>Mobile No.</th>
	<th>Address</th>
	<th>Delete</th>
</tr>
<?php
while($r=mysql_fetch_array($rs)){
?>	
<tr>
     <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><?=$r[3]?></td>
	 <td><?=$r[4]?></td>
	 <td><?=$r[5]?></td>
	 <td><a href="edelet.php?id=<?=$r[2]?>">Delete</a></td>
</tr>
<?php
}
?>
</table></div></div></div></div>



<?php
include("log.php");
$rs=mysql_query("select * from vc");
?>
<div id="alvc" class="table-responsive">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<table class="table">
<tr>
    <th>Name</th>
	<th>email</th>
	<th>Mobile No.</th>
	<th>address</th>
</tr>
<?php
while($r=mysql_fetch_array($rs)){
?>	
<tr> <td><?=$r[0]?></td>
     <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><?=$r[3]?></td>
</tr>
<?php
}
?>
</table></div></div></div></div>





</div>


<?php
}
?>
</body>
</html>
