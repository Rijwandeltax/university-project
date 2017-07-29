<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  $("#radio").change(function(){
  var d=$("#radio").val();
  $.post(
  "sem.php",
  {wk:d},
  function(data){
  $("#show").html(data);
     });
   });
   $("#lij").change(function(){
  var b=$("#lij").val();
  $.post(
  "brr.php",
  {nk:b},
  function(data){
  $("#msgg").html(data);
     });
   });
   
    $("#tin").change(function(){
  var d=$("#tin").val();
  $.post(
  "ti.php",
  {pk:d},
  function(data){
  $("#showwe").html(data);
     });
   });
   
   $("a").click(function(){
   var t=$(this).attr("class");  
   $("#"+t).show();
   if(t=="add"){
   $("#depart").hide();
   $("#sy").hide();
    $("#mem").hide();
	$("#thi").hide();
	$("#brre").hide();
	$("#chsyy").hide();
   }
   else if(t=="depart"){
    $("#add").hide();
   $("#sy").hide();
   $("#mem").hide();
   $("#thi").hide();
   $("#brre").hide();
   $("#chsyy").hide();
   }
   else if(t=="sy"){
    $("#add").hide();
   $("#depart").hide();
   $("#mem").hide();
   $("#thi").hide();
   $("#brre").hide();
   $("#chsyy").hide();
   } 
   else if(t=="mem"){
   $("#add").hide();
   $("#depart").hide();
   $("#sy").hide();
   $("#thi").hide();
   $("#brre").hide();
   $("#chsyy").hide();
   }
    else if(t=="thi"){
    $("#add").hide();
   $("#sy").hide();
   $("#mem").hide();
   $("#depart").hide();
   $("#brre").hide();
   $("#chsyy").hide();
   }
    else if(t=="brre"){
    $("#add").hide();
   $("#sy").hide();
   $("#mem").hide();
   $("#depart").hide();
   $("#thi").hide();
   $("#chsyy").hide();
   }
   else if(t=="chsyy"){
    $("#add").hide();
   $("#sy").hide();
   $("#mem").hide();
   $("#depart").hide();
   $("#thi").hide();
    $("#brre").hide();
   }
   });
   
   
   $("#deg").change(function(){
  var l=$("#deg").val();
  $.post(
  "dyr.php",
  {wk:l},
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
  $("#msg").html(data);
     });
	 });
   
   
});
</script>
<style>
#add,#depart,#sy,#thi,#mem,#chsyy,#brre{
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
<div class="container-fluid col-sm-3" style="height:100%">
<nav class="navbar navbar-default" style="background-color:#336666">
<ul class="nav nav-stacked">
<li><a href="#" style="color:#9999CC"><strong><h3>UNIVERSITY</h3></strong></a></li>
<li><a href="#" class="add" style="color:#FFFFFF">ADD Degree</a></li>
<li><a href="#" class="brre" style="color:#FFFFFF">ADD SUBJECTS</a></li>
<li><a href="#" class="thi" style="color:#FFFFFF">ALL DEGREE</a></li>
<li><a href="#" class="depart" style="color:#FFFFFF">MEMBER</a></li>
<li><a href="#" class="mem" style="color:#FFFFFF">ADD MEMBER</a></li>
<li><a href="#" class="sy" style="color:#FFFFFF">ADD sylubs And BRANCH</a></li>
<li><a href="#" class="chsyy" style="color:#FFFFFF">Change Syllebus</a></li>
</ul>
</nav></div>
<div class="col-sm-5">
<div id="err=1">
<div class="w3-container w3-red">
  <h3>Danger!</h3>
  <p>Red often indicates a dangerous or potentially negative action.</p>
</div></div>
<div id="mem">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="mem.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="mname" class="form-control" id="cnm">
<option>Select name</option>
<?php
include("log.php");
$rs=mysql_query("select * from employ where dpt='degree' AND flag=1");
while($r=mysql_fetch_array($rs)){
?>
<option name="<?=$r[1]?>"><?=$r[1]?></option>
<?php
}
?>
</select></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<div id="msg"></div></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="password" class="form-control" name="pass" placeholder="enter the password" /></div></div><br />
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>


<?php
include("log.php");
$rs=mysql_query("select * from degree where flag=1");
?>
<div id="depart">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>MEMBER</h4></div>
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

<div id="add">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="sat.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" class="form-control" name="dname" placeholder="enter the degree name" /></div></div><br /><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" class="form-control" name="year" placeholder="enter the no.of year" /></div></div><br /><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="semmm" class="form-control" id="radio">
<option>Semester wise</option>
<option name="yes">yes</option>
<option name="no">no</option>
</select></div></div><br /><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<div id="show"></div></div></div>
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>




<div id="thi">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD DEGREE</h4></div>
<div class="panel-body">
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
include("log.php");
$rs=mysql_query("select * from degre where flag=1");
while($r=mysql_fetch_array($rs)){
?>	
<tr>
     <td><?=$r[0]?></td>
	 <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><?=$r[3]?></td>
	 <td><a href="dele.php?id=<?=$r[0]?>">Delete</a></td>
</tr>
<?php
}
?>
</table></div></div></div></div></div>


<div id="brre">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="br.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="degree" class="form-control" id="tin">
<option>Select Degree</option>
<?php
include("log.php");
$rs=mysql_query("select * from degre where flag=1");
while($r=mysql_fetch_array($rs)){
?>	
<option name="<?=$r[0]?>"><?=$r[0]?></option>
<?php
}
?>
</select></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<div id="showwe"></div></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="sub" id="lij" class="form-control">
<option>no. of subject</option>
<option name="1">1</option>
<option name="2">2</option>
<option name="3">3</option>
<option name="4">4</option>
<option name="5">5</option>
<option name="6">6</option>
<option name="7">7</option>
<option name="8">8</option>
<option name="9">9</option>
<option name="10">10</option>
<option name="11">11</option>
<option name="12">12</option>
<option name="13">13</option>
<option name="14">14</option>
<option name="15">15</option>
<option name="16">16</option>
<option name="17">17</option>
</select></div></div><br />
<div id="msgg"></div><br />
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>


<div id="sy">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD BRANCH AND SYLLUBAS</h4></div>
<div class="panel-body">
<form method="post" enctype="multipart/form-data" action="syy.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="degree" class="form-control" id="nice">
<option>Select Degree</option>
<?php
include("log.php");
$rs=mysql_query("select * from degre where flag=1");
while($r=mysql_fetch_array($rs)){
?>	
<option name="<?=$r[0]?>"><?=$r[0]?></option>
<?php
}
?>
</select></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" name="branch" class="form-control" placeholder="enter the branch name" /></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
 <input type="file" name="photo" class="form-control"></div></div><br /><br />
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>




<div id="chsyy">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="chsyy.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="degree" class="form-control" id="deg">
<option>Select degree</option>
<?php
include("log.php");
$rs=mysql_query("select * from degre");
while($r=mysql_fetch_array($rs)){
?>	
<option name="<?=$r[0]?>"><?=$r[0]?></option>
<?php
}
?>
</select></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<div id="syshow"></div></div></div><br />
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="file" name"pdf" class="form-control" placeholder="enter the syllbus" /></div></div><br />
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>


</div>

<?php
}
?>
</body>
</html>
