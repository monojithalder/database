<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
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
<?php
$gname=$_GET['txtgname'];
$oname=$_GET['txtoname'];
$bname=$_GET['txtbname'];
$bdate=$_GET['txtbdate'];
$position=$_GET['txtposition'];
if($bname=="")
{
	$bname="N/A";
}
if($bdate=="")
{
	$bdate="N/A";
}
echo $gname,$oname,$bname;
$con = mysql_connect("localhost","root","123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("information", $con);

mysql_query("UPDATE info SET bdate = '$bdate'
WHERE gname = '$gname' AND oname = '$oname'");
mysql_query("UPDATE info SET bname = '$bname'
WHERE gname = '$gname' AND oname = '$oname'");
mysql_query("UPDATE info SET position = '$position'
WHERE gname = '$gname' AND oname = '$oname'");
mysql_close();
echo "<script language='javascript'>window.location = \"http://localhost/database/edit.php\";</script>";
?>
</body>
</html>
