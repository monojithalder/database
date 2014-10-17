<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Password chacking page</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:292px;
	top:155px;
	width:360px;
	height:255px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:295px;
	top:133px;
	width:232px;
	height:20px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:289px;
	top:416px;
	width:254px;
	height:33px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:224px;
	top:14px;
	width:488px;
	height:83px;
	z-index:3;
}
-->
</style>
</head>

<body>
<div id="apDiv1">
<img src="fingerprint.gif" width="122" height="65" /></div>
<div id="apDiv2"><b>Scaning Password............
</b></div>
<?php
$user=$_POST['txtuser'];
$pass=$_POST['txtpass'];
$i=0;
$j=0;
$k=0;
$l=0;
$num=0;
$a=$_SERVER['HTTP_HOST'];
$b=$_SERVER['SERVER_NAME'];
$con=mysql_connect("localhost","root",123);
if(!con)
{
	die("Donot connect".mysql_error());
}
mysql_select_db("user",$con);
$quary="SELECT * FROM pass";
$result=mysql_query($quary);
$num=mysql_num_rows($result);
mysql_close();
while($i<$num)
{
	$f1=mysql_result($result,$i,"username");
	if($f1==$user)
	{
		$j++;
		$display=$f1;
	}
	$i++;
}
//$con=mysql_connect("localhost","root","123");
$con=mysql_connect("localhost","root",123);
if(!con)
{
	die("Donot connect".mysql_error());
}
mysql_select_db("user",$con);
$quary="SELECT * FROM pass";
$result=mysql_query($quary);
$num=mysql_num_rows($result);
mysql_close();
while($l<$num)
{
	$f2=mysql_result($result,$l,"password");
	if($f2==$pass)
	{
		$k++;
	}
	$l++;
}
if($j==1 && $k>=1)
{
	session_start();
	if(!isset($_SESSION['name']))
	{
		$_SESSION['name']=$display;
		$myFile = "C:WINDOWS\ testFile.txt";
		$fh = fopen($myFile, 'w') or die("can't open file");
		$stringData = $dispaly;
		fwrite($fh, $stringData);
		fclose($fh);
		echo "<div id=apDiv1><img src=400_F_5086925_ZoCfdSgyCddtcD6v94llP2obiR8puTOK.jpg /></div>";
		echo "<div id=apDiv2>Access Granted</div>";
		echo "<div id=apDiv4>Redircting the page now........</div>";
		header("Refresh: 5;url=http://localhost/database/myaccount.php"); 
	}
	else
	{
		echo "You have already login";
		header("Refresh: 5;url=http://localhost/database/myaccount.php");
		$myFile = "C:WINDOWS\ testFile.txt";
		$fm = fopen($myFile, 'r');
		$theData = fread($fm, 10);
		fclose($fm);
		$name="monojit";
		if($name==$thedata)
		{
			echo "You have already login";
			header("Refresh: 5;url=http://localhost/database/myaccount.php");
		}
	}
}
else
{
		echo "<div id=apDiv1><img src=Stop.jpg /></div>";
		echo "<div id=apDiv2>Access Deicline</div>";
		header("Refresh: 5;url=http://localhost/database"); 
}
?>

</body>
</html>
