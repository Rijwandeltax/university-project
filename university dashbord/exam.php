	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script type="text/javascript">
  $(document).ready(function(){
  $("#smm").change(function(){
  var k=$("#smm").val();
  $.post(
  "smm.php",
  {wk:k},
  function(data){
  $("#show").html(data);
     });
   });
   
   
   $("#tin").change(function(){
  var d=$("#tin").val();
  alert(d);
  $.post(
  "ti.php",
  {pk:d},
  function(data){
  $("#showw").html(data);
     });
   });
   
   $("a").click(function(){
   var t=$(this).attr("class");  
   $("#"+t).fadeIn(1000);
   if(t=="add"){
   $("#depart").hide();
   $("#sy").hide();
    $("#mem").hide();
	$("#res").hide();
   }
   else if(t=="depart"){
    $("#add").hide();
   $("#sy").hide();
   $("#mem").hide();
   $("#res").hide();
   }
   else if(t=="sy"){
    $("#add").hide();
   $("#depart").hide();
   $("#mem").hide();
   $("#res").hide();
   } 
   else if(t=="mem"){
   $("#add").hide();
   $("#depart").hide();
   $("#sy").hide();
   $("#res").hide();
   }
    else if(t=="res"){
   $("#add").hide();
   $("#depart").hide();
   $("#sy").hide();
   $("#mem").hide();
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
	 $("#datt").change(function(){
  var b=$("#datt").val();
  $.post(
  "dat.php",
  {nk:b},
  function(data){
  $("#datee").html(data);
     });
   });
   
   $("#t").change(function(){
  var x=$("#t").val();
  alert(x);
  $.post(
  "tii.php",
  {sj:x},
  function(data){
  $("#s").html(data);
    
	 });
	 	 
 });
  $("#y").change(function(){
  var z=$("#y").val();
  $.post(
  "yr.php",
  {df:z},
  function(data){
  $("#yrr").html(data);
    
	});
	 	 
 });
   
   
   
   $("#rr").keyup(function(){
  var b=$("#rr").val();
  $.post(
  "resh.php",
  {bn:b},
  function(data){
  $("#reshow").html(data);
     });
   });
   
     $("#no").click(function(){
  var z=$("#no").val();
  $.post(
  "noo.php",
  {kn:z},
  function(data){
  $("#noshow").html(data);
     });
   });
   
});
</script>
<style>
#add,#depart,#sy,#pitt,#mem,#res{
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
.leftmenu {
margin-left: 0px;
height: 100%;
}

.nav-tabs.nav-stacked {
border-bottom: 0 !important;
height: 100% !important;
}

.ender {
height: 100% !important;
}

.ender a {
height: 100% !important;
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

<div style="height: 100%;">
<div class="container-fluid col-sm-3" >
<nav class="navbar navbar-default" style="background-color:#336666; margin-top:10px; height:800px" >
<div class="span2 leftmenu">
<ul class="nav nav-tabs nav-stacked" style="margin-top:10px">
<li><a href="#" style="color:#9999CC"><strong><h3>UNIVERSITY</h3></strong></a></li>
<li><a href="#" class="add" ><em>ADD Time-Table</em></a></li>
<li><a href="#" class="res" ><em>ADD RESULT</em></a></li>
<li><a href="#" class="depart"><em>MEMBER</em></a></li>
<li><a href="#" class="mem"><em>ADD MEMBER</em></a></li>
<li><a href="#" class="sy"><em>ADD Calander</em></a></li>
<li><a href="#" class="pitt"><em>ADD EXAM CENTER</em></a></li>
</ul></div></div>
</nav></div>
<div class="col-sm-7">
<div class="container">
<nav class="navbar navbar-default" style="background-color:#4169E1; margin-bottom:10px; margin-left:-40px; margin-right:100px;" >
</nav></div>

<div id="mem">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="meme.php">
<label for="exampleInputName">Name</label>
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="mname" class="form-control" id="cnm">
<option>Select name</option>
<?php
include("log.php");
$rs=mysql_query("select * from employ where dpt='exam' AND flag=1");
while($r=mysql_fetch_array($rs)){
?>
<option name="<?=$r[1]?>"><?=$r[1]?></option>
<?php
}
?>
</select></div></div><br />
<label for="exampleInputEmail">Email</label>
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<div id="msg"></div></div></div><br />
<label for="exampleInputPassword">Password</label>
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="password" class="form-control" name="pass" placeholder="enter the password" /></div></div></<br />
<input type="submit" class="btn btn-success" />
</form></div></div></div></div>

<?php
include("log.php");
$rs=mysql_query("select * from exam where flag=1");
?>
<div id="depart">
<div class="w3-card-8 w3-gray" style="width:70%">
<div class="panel panel-success">
<div class="panel-heading"><h4>DEPARTMENT</h4></div>
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

<div id="res">
<div class="w3-card-8 w3-gray" style="width:70%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD RESULT</h4></div>
<div class="panel-body">
<form method="post" action="resu.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<input type="text" class="form-control" name="entrol" placeholder="enter the enroll no." id="rr" /><br />
<div id="reshow"></div><br />
<select name="sb" id="no" class="form-control">
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

</select><br />
<div id="noshow"></div><br />
<input type="text" name="total" class="form-control" placeholder="total marks" /><br />
<input type="text" name="per" class="form-control" placeholder="persentage %" /><br />
<input type="text" name="status" class="form-control" placeholder="pass or fail" /><br />
<input type="submit" class="btn btn-success" />
</form></div></div></div></div></div></div>





<div id="add">
<div class="w3-card-8 w3-gray" style="width:70%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD Time Table</h4></div>
<div class="panel-body">
<form method="post" enctype="multipart/form-data" action="satea.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="degree" class="form-control" id="tin">
<option>select degree</option>
<?php
include("log.php");
$rs=mysql_query("select * from degre");
while($r=mysql_fetch_array($rs)){
?>	
<option name="<?=$r[0]?>"><?=$r[0]?></option>
<?php
}
?>
</select><br /><br />
<div id="showw"></div><br />
<input type="text" name="sess" placeholder="session" class="form-control" required=""/><br />
 <input type="file" name="photo" class="form-control"><br />
<input type="submit" class="btn btn-success" />
</form></div></div></div></div></div></div>




<div id="sy">
<div class="w3-card-8 w3-gray" style="width:70%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD CALANDER</h4></div>
<div class="panel-body">
<form method="post" enctype="multipart/form-data" action="satcal.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="degree" class="form-control">
<option>select degree</option>
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
<input type="text" name="sess" placeholder="session" class="form-control" required=""/><br />
 <input type="file" name="photo" class="form-control"><br />
<input type="submit" class="btn btn-success" />
</form></div></div></div></div></div></div>


<div id="pitt">
<div class="w3-card-8 w3-gray" style="width:90%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD Exam Center</h4></div>
<div class="panel-body">
<form method="post" enctype="multipart/form-data" action="satcenter.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="degree" class="form-control" id="y">
<option>select degree</option>
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
<div id="yrr"></div><br />
<input type="text" name="sess" placeholder="session" class="form-control" required=""/><br />
 <input type="file" name="photo" class="form-control"><br />
<input type="submit" class="btn btn-success" />
</form></div></div></div></div></div></div>








</div>
<?php
}
?>
</body>
</html>
