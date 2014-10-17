<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
function drive()
{
	window.location="drive.php"
}
</script>
<style type="text/css">
#apDiv2 {
	position:absolute;
	left:1px;
	top:72px;
	width:1019px;
	height:55px;
	z-index:1;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
	cursor:pointer;
}
#apDiv1 {
	position:absolute;
	left:5px;
	top:158px;
	width:353px;
	height:219px;
	z-index:2;
}
</style>
</head>

<body>
<div id="apDiv2">
<table width="1028" border="1" style="border-color:#0033FF">
<tr>
<td width="481" height="45" bgcolor="#FF6600"></td>
<td width="149" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="drive()" ><b>Drive access</b></label></span></td>
<td width="96" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="view()"><b>View</b></label></span></td>
<td width="84" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="insert()"><b>Insert</b></label></span></td>
<td width="67" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="edit()"><b>Edit</b></label></span></td>
<td width="111" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="logout()"><b>Log out</b></label></span></td>
</tr>
</table>
</div>

<div id="apDiv1">
<a href="\\10.10.0.66\D$">Software</a>
</div>
</body>
</html>
