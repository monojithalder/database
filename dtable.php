<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a="sdaddasaasd";
$d="kkkkkkkk";
$e="ssssss";
$c=0;
$b=0;
$i=0;
echo"
<table  width='100%' border=1 style=border-color:#0033FF>";
while($c<3)
{
echo "<tr>";
while($b<3)
{
if($i==0)
{
echo "
<td>&nbsp;$a</td>";
	$i++;
}
elseif($i==1)
{
	echo"<td>&nbsp;$d</td>";
	$i++;
}
elseif($i==2)
{
	echo"<td>&nbsp;$e</td>";
	$i++;
}
$b++;
}
echo "</tr>";
$c++;
$b=0;
$i=0;
}
//echo "</tr>";
echo "</table>";
?>
</body>
</html>
