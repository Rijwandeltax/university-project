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
$email=$_COOKIE["user"];
?>
<div class="container-fluid col-sm-3">
<nav class="navbar navbar-default" style="background-color:#336666">
<ul class="nav nav-stacked">
<li><a href="#" style="color:#9999CC"><strong><h3>UNIVERSITY</h3></strong></a></li>
<li><a href="#" class="add" style="color:#FFFFFF">ADD NEWS</a></li>
<li><a href="#" class="sy" style="color:#FFFFFF">ALL NEWS</a></li>
<li><a href="#" class="depart" style="color:#FFFFFF">MEMBER</a></li>
<li><a href="#" class="mem" style="color:#FFFFFF">ADD MEMBER</a></li>
<li><a herf="logout.php?id=<?=$email?>" style="color:#FFFFFF">LogOut</a></li>
</ul>
</nav></div>
<div class="col-sm-6">
<div id="mem">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<form method="post" action="newmem.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="mname" class="form-control" id="cnm">
<option>Select name</option>
<?php
include("log.php");
$rs=mysql_query("select * from employ where dpt='news' AND flag=1");
while($r=mysql_fetch_array($rs)){
?>
<option name="<?=$r[1]?>"><?=$r[1]?></option>
<?php
}
?>
</select><br />
<div id="msg"></div><br />
<input type="password" class="form-control" name="pass" placeholder="enter the password" /></div></div><br />
<input type="submit" class="btn btn-success" style="float:right" />
</form></div></div></div></div>
<?php
include("log.php");
$rs=mysql_query("select * from library where flag=1");
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
	 <td><a href="newdelete.php?id=<?=$r[1]?>"><img src="image.jpg" /></a></td>
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
<form method="post"  action="newspost.php">
<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
<select name="newss" class="form-control">
<option>Type Of News</option>
<option name="Notification">Notification</option>
<option name="latest">latest</option>
<option name="Notification">Notification</option>
</select><br />
<textarea name="ne" cols="90" rows="5" class="form-control">News....</textarea></div></div><br /><br />
<input type="submit" class="btn btn-success" style="float:right"/>
</form></div></div></div></div>

<?php
include("log.php");
$rs=mysql_query("select * from newsss where flag=1");
?>
<div id="sy">
<div class="w3-card-8 w3-gray" style="width:60%">
<div class="panel panel-success">
<div class="panel-heading"><h4>ADD MEMBER</h4></div>
<div class="panel-body">
<div class="table-responsive">
<table class="table">
<tr>
	<th>Sn </th>
	<th>Type Of News</th>
	<th>News</th>
	<th>Delete</th>
</tr>
<?php
while($r=mysql_fetch_array($rs)){
?>	
<tr>
     <td><?=$r[0]?></td>
	 <td><?=$r[1]?></td>
	 <td><?=$r[2]?></td>
	 <td><a href="newsdelete.php?id=<?=$r[0]?>"><img src="image.jpg" /></a></td>
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