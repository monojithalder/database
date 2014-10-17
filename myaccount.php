<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Account</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:1px;
	top:72px;
	width:100%;
	height:142px;
	z-index:1;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
	cursor:pointer;
}
-->
</style>
<script  type="text/javascript">
function logout()
{
	window.location = "http://localhost/database/logout.php"
}
function view()
{
	window.location = "view.php"
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

<body >
<?php
session_start();
?>
<?php
	if (session_is_registered("name"))
	  {
		$name=$_SESSION['name'];
		echo "Welcome Mr $name";    
	  }
	  else
	  {
	  	echo "<script language='javascript'>window.location = \"http://localhost/database/\";</script>";
	  }
?>
<div id="apDiv1">
<table width="100%" border="1" style="border-color:#0033FF">
<tr>
<td width="479" height="43" bgcolor="#FF6600"></td>
<td width="142" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="drive()" ><b>Drive access</b></label></span></td>
<td width="78" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="view()" ><b>View</b></label></span></td>
<td width="81" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="insert()"><b>Insert</b></label></span></td>
<td width="71" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="edit()"><b>Edit</b></label></span></td>
<td width="109" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="logout()"><b>Log out</b></label></span></td>
</tr>
</table>
</div>
</body>
</html>
