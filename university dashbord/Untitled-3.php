<div id="btech">
<form method="post" action="bt.php">
<input type="text" name="degree" value="btec" class="form-control" />
<select name="branch" class="form-control">
 <?php
  $rs=mysql_query("select * from sylebus where degree='btec'");
  
   while($r=mysql_fetch_array($rs)){
  ?>
  <option name="<?=$r[1]?>"><?=$r[1]?></option>
  <?php
  }
  ?>
</select>
<select name="year" class="form-control" id="smm">
<option>select year</option>
<option name="1">1</option>
<option name="2">2</option>
<option name="3">3</option>
<option name="4">4</option>
</select><br />
<select name="sem" class="form-control">
<div id="show"></div><br />
</select>
<input type="date" class="form-control" name="sub1" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub2" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub3" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub4" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub5" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub6" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub7" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub8" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub9" placeholder="enter the date" /><br />
</form></div>


<div id="mtech">
<form method="post" action="mt.php">
<input type="text" name="degree" value="mtec" class="form-control" />
<select name="branch" class="form-control">
 <?php
 include("log.php");
  $rs=mysql_query("select * from sylebus where degree='mtec'");
  
   while($r=mysql_fetch_array($rs)){
  ?>
  <option name="<?=$r[1]?>"><?=$r[1]?></option>
  <?php
  }
  ?>
</select>
<select name="year" class="form-control" id="smm">
<option>select year</option>
<option name="1">1</option>
<option name="2">2</option>
</select><br />
<select name="sem" class="form-control">
<div id="show"></div><br />
</select>
<input type="date" class="form-control" name="sub1" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub2" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub3" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub4" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub5" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub6" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub7" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub8" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub9" placeholder="enter the date" /><br />
</form></div>

<div id="msc">
<form method="post" action="msc.php">
<input type="text" name="degree" value="mtec" class="form-control" />
<select name="branch" class="form-control">
 <?php
 include("log.php");
  $rs=mysql_query("select * from sylebus where degree='mtec'");
  
   while($r=mysql_fetch_array($rs)){
  ?>
  <option name="<?=$r[1]?>"><?=$r[1]?></option>
  <?php
  }
  ?>
</select>
<select name="year" class="form-control">
<option>select year</option>
<option name="1">1</option>
<option name="2">2</option>
</select>
<input type="date" class="form-control" name="sub1" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub2" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub3" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub4" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub5" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub6" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub7" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub8" placeholder="enter the date" /><br />
<input type="date" class="form-control" name="sub9" placeholder="enter the date" /><br />
<input type="submit" class="btn btn-primary btn-block" /><br />
</form></div>
<div id="other">
<select
