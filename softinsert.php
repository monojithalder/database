<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert Page</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:340px;
	top:158px;
	width:255px;
	height:235px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:1px;
	top:72px;
	width:1019px;
	height:55px;
	z-index:1;
}
-->
.style1 {
	font-size: 24px;
	font-weight: bold;
	cursor:pointer;
}
</style>
<script  type="text/javascript">
function logout()
{
	window.location = "http://10.10.0.66/database/logout.php"
}
function view()
{
	window.location = "http://10.10.0.66/database/view.php"
}
function insert()
{
	window.location = "http://10.10.0.66/database/insert.php"
}
function edit()
{
	window.location = "http://10.10.0.66/database/edit.php"
}
</script>
</head>

<body>
<?php
session_start();
?>
<?php
	if (session_is_registered("name"))
	  {
	  $name=$_SESSION['name'];
		echo $name;    
	  }
	  else
	  {
	  	echo "<script language='javascript'>window.location = \"http://10.10.0.66/database/\";</script>";
	  }
?>
<div id="apDiv2">
<table width="1000" border="1" style="border-color:#0033FF">
<tr>
<td width="610" height="43" bgcolor="#FF6600"></td>
<td width="101" bgcolor="#FF6600"><span class="style1">&nbsp;<label onclick="view()"><b>View</b></label></span></td>
<td width="84" bgcolor="#FF6600"><span class="style1">&nbsp;<label onclick="insert()"><b>Insert</b></label></span></td>
<td width="83" bgcolor="#FF6600"><span class="style1">&nbsp;<label onclick="edit()"><b>Edit</b></label></span></td>
<td width="88" bgcolor="#FF6600"><span class="style1">&nbsp;<label onclick="logout()"><b>Log out</b></label></span></td>
</tr>
</table>
</div>
<form action="softinsert1.php" method="post">
<div id="apDiv1">
<table border="2" style="border-color:#0033CC">
<tr>
<td><b>Software Disk Name</b></td>
<td><input type="text" name="txtdname" tabindex="1"  /></td>
</tr>
<tr>
<td><b>Name of Softwares</b></td>
<td><textarea name="txtsname" rows="3" cols="13" tabindex="3"> </textarea></td>
</tr>
<tr>
<td><b>Owner Name</b></td>
<td><input type="text" name="txtoname" tabindex="3" /></td>
</tr>
<tr>
<td><b>Status</b></td>
<td><input type="text" name="txtstatus" tabindex="4" /></td>
</tr>
<tr>
<td><b>Position</b></td>
<td><input type="text" name="txtposition" tabindex="5" /></td>
</tr>
<tr>
<td><b>Borrow Name</b></td>
<td><input type="text" tabindex="6" name="txtbname" /></td>
</tr>
<tr>
<td><b>Borrow Date</b></td>
<td><input type="text" name="txtbdate" tabindex="7" /></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Insert" /></td>
</tr>
</table>
</div>
</form>
</body>
</html>
