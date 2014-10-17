<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Data Edit Page</title>
<style  type="text/css">
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
#apDiv1 {
	position:absolute;
	left:201px;
	top:185px;
	width:381px;
	height:141px;
	z-index:2;
}
.style5
{
	left:46px;
	top:13px;
	position:absolute;
	width: 309px;
	height: 117px;
	border:#0066CC
}

</style>
<script type="text/javascript">
function logout()
{
	window.location = "http://localhost/database/logout.php"
}
function view()
{
	window.location = "http://localhost/database/view.php"
}
function insert()
{
	window.location = "http://localhost/database/insert.php"
}
function edit()
{
	window.location = "http://localhost/database/edit.php"
}
function drive()
{
	window.location="drive.php"
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
	  	echo "<script language='javascript'>window.location = \"http://localhost/database/\";</script>";
	  }
?>
<div id="apDiv2">
<table width="1000" border="1" style="border-color:#0033FF">
<tr>
<td width="475" height="43" bgcolor="#FF6600"></td>
<td width="141" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="drive()" ><b>Drive access</b></label></span></td>
<td width="77" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="view()"><b>View</b></label></span></td>
<td width="87" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="insert()"><b>Insert</b></label></span></td>
<td width="78" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="edit()"><b>Edit</b></label></span></td>
<td width="102" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="logout()"><b>Log out</b></label></span></td>
</tr>
</table>
</div>
<form action="edit2.php" method="get">
<div id="apDiv1">
<table width="227" border="2" class="style5">
<tr>
<td ><b>Game Name</b></td>
<td><input type="text" name="txtgname" tabindex="1"  /></td>
<td><b>Owner Name</b></td>
<td><input type="text" name="txtoname" tabindex="2"  /></td>
</tr>
<tr>
<td><b>Borroar Name</b></td>
<td><input type="text" name="txtbname" tabindex="3" /></td>
<td><b>Borroar Date</b></td>
<td><input type="text" name="txtbdate" tabindex="4" /></td>
</tr>
<tr>
<td><b>Position</b></td>
<td><input type="text" name="txtposition" tabindex="5" /></td>
<td><input type="submit" value="Edit" /></td>
</tr>
</table>
</div>
</form>
</body>
</html>
