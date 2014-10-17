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
	width:1019px;
	height:54px;
	z-index:1;
}
.style1 {
	font-size: 24px;
	font-weight: bold;
	cursor:pointer;
}
#apDiv2 {
	position:absolute;
	left:15px;
	top:158px;
	width:100%;
	height:46px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:16px;
	top:207px;
	width:702px;
	height:391px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:724px;
	top:157px;
	width:277px;
	height:41px;
	z-index:4;
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

<div id="apDiv1">
<table width="100%" border="1" style="border-color:#0033FF">
<tr>
<td width="463" height="43" bgcolor="#FF6600"></td>
<td width="141" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="drive()" ><b>Drive access</b></label></span></td>
<td width="74" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="view()"><b>View</b></label></span></td>
<td width="81" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="insert()"><b>Insert</b></label></span></td>
<td width="85" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="edit()"><b>Edit</b></label></span></td>
<td width="116" bgcolor="#FF6600"><span class="style1">&nbsp;
  <label onclick="logout()"><b>Log out</b></label></span></td>
</tr>
</table>
</div>
<div id="apDiv2">
<table width="691" height="40" border="1" style="border-color:#0000CC">
<tr>
<td width="140" height="34"><b>Games Name</b></td>
<td width="140" height="34"><b>Games Sze</b></td>
<td width="140"><b>Owner Name</b></td>
<td width="140"><b>Media Type</b></td>
<td width="140"><b>Status</b></td>
<td width="140"><b>Boroar Name</b></td>
<td width="140"><b>Boroar Date</b></td>
</tr>
</table>
</div>
<div id="apDiv3">
<?php
$con=mysql_connect("localhost","root",123);
if(!con)
{
	die("Donot connect".mysql_error());
}
mysql_select_db("information",$con);
$quary="SELECT * FROM info";
$result=mysql_query($quary);
$rnum=mysql_num_rows($result);
mysql_close();
//echo $rnum;
$g=$rnum;
$l=0;
while($l<$rnum)
{
$gname=mysql_result($result,$l,"gname");
$gsize=mysql_result($result,$l,"gsize");
$oname=mysql_result($result,$l,"oname");
$status=mysql_result($result,$l,"status");
$position=mysql_result($result,$l,"position");
$bname=mysql_result($result,$l,"bname");
$bdate=mysql_result($result,$l,"bdate");
$i=0;
$j=0;
$k=0;
echo "<table width=691 border=1 style=border-color:#0000CC>";
while($i<1)
{
	echo "<tr>";
	while($j < 7)
	{
		if($k==0)
		{
			echo "<td width=140>$gname</td>";
			$k++;
		}
		elseif($k==1)
		{
			echo "<td width=140>$gsize</td>";
			$k++;
		}
		elseif($k==2)
		{
			echo "<td width=140>$oname</td>";
			$k++;
		}
		elseif($k==3)
		{
			echo "<td width=140>$status</td>";
			$k++;
		}
		elseif($k==4)
		{
			echo "<td width=140>$position</td>";
			$k++;
		}
		elseif($k==5)
		{
			echo "<td width=140>$bname</td>";
			$k++;
		}
		elseif($k==6)
		{
			echo "<td width=140>$bdate</td>";
			$k++;
		}
	$j++;
	}
echo "</tr>";
$i++;
$j=0;
$k=0;
}
$l++;
}
echo "</table>";
?>
</div>
<form name="search" action="search.php" method="post">
<div id="apDiv4">
<table border="2" style="border-color:#0099FF">
<tr>
<td><b>Enter Games Name</b></td>
<td><input type="text" name="txtsearch" tabindex="1" /></td>
</tr>
<tr>
<td><input type="submit" value="Search" /></td>
</tr>
</table>
</div>
</form>
</body>
</html>
