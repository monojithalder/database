<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inserting Page</title>
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
$gname=$_POST['txtgname'];
$gsize=$_POST['txtgsize'];
$oname=$_POST['txtoname'];
$status=$_POST['txtstatus'];
$position=$_POST['txtposition'];
$bname=$_POST['txtbname'];
$bdate=$_POST['txtbdate'];
$a="aaa";
if($bname=="")
{
	$bname="N/A";
}
if($bdate=="")
{
	$bdate="N/A";
}
$con=mysql_connect("localhost","root",123);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("information", $con);

mysql_query("INSERT INTO info (gname, gsize,oname,status,position,bname,bdate)
VALUES ('$gname', '$gsize','$oname','$status','$position','$bname','$bdate')");
mysql_close($con);
echo "<script language='javascript'>window.location = \"http://localhost/database/insert.php\";</script>";
?>
</body>
</html>
