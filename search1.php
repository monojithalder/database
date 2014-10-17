<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function back1()
{
	window.location= "http://localhost/database/view.php"
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
<?php
//$search=$_POST['txtsearch'];
$gname=$_POST['txtsearch'];
$i=0;
$j=0;
$k=0;
$con=mysql_connect("localhost","root",123);
if(!con)
{
	die("Donot connect".mysql_error());
}
mysql_select_db("information",$con);
//$query = sprintf("SELECT  gsize, oname, status, position, bname, bdate FROM info WHERE gname='$search'",
    $query="SELECT * FROM info";
	//mysql_real_escape_string($gname));
	$result = mysql_query($query);
	$num=mysql_num_rows($result);
//while ($row = mysql_fetch_assoc($result)) {
   
   
  // $oname=$row['oname'];
   //$gsize=$row['gsize'];
   //$status=$row['status'];
   //$position=$row['position'];
   //$bname=$row['bname'];
   //$bdate=$row['bdate'];
   //echo "<table width=691 border=1 style=border-color:#0000CC>";
   //echo "<tr>";
   //echo "<td>$search</td>";
   //echo "<td>$oname</td>";
   //echo "<td>$gsize</td>";
   //echo "<td>$status</td>";
   //echo "<td>$position</td>";
   //echo "<td>$bname</td>";
   //echo "<td>$bdate</td>";
   //echo "</tr>";
  // echo "</table>";
//}
//echo $num;
while($i<$num)
{
	$f1=mysql_result($result,$i,"gname");
	$f2=mysql_result($result,$i,"gsize");
	$f3=mysql_result($result,$i,"status");
	$f4=mysql_result($result,$i,"position");
	$f5=mysql_result($result,$i,"bname");
	$f6=mysql_result($result,$i,"bdate");
	$f7=mysql_result($result,$i,"oname");
	$len=strlen($f1);
	$l=$len-1;
	$c=substr($f1,-$len,-$l);
	$n=explode(" ",$f1);
	$c2=strtolower($c);
	$pos1 =strpos($gname,$c2);
	$c1=strtoupper($c);
	$pos = strpos($gname,$c1);
	$pos2=strpos($f1,$gname);
	$glen=strlen($gname);
	$glen1=$len-$glen;
	$e=substr($f1,-$len,-$glen1);
	$e1=strtoupper($e);
	$e2=strtolower($e);
	//echo $e;
	if($gname == $n[0])
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
	}
	/*else if($pos != false)
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
	}
	elseif ($pos1 != false)
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
	}*/
	/*elseif ($pos2 != false)
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
	}*/
	elseif ($c1==$gname)
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
	}
	elseif ($c2==$gname)
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
	}
	elseif ($e1==$gname)
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
	}
	elseif ($e2==$gname)
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
	}
	elseif ($gname == $f1)
	{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";

	}
	//echo $gname;
	//echo $f1;
	/*if($pos2 == false)
	{
	}
	else
	{
		echo $pos;
		//$j++;
		//while($k < $j)
		//{
			echo "<table width=691 border=1 style=border-color:#0000CC>";
   			echo "<tr>";
   			echo "<td>$f1</td>";
   			echo "<td>$f7</td>";
   			echo "<td>$f2</td>";
   			echo "<td>$f3</td>";
   			echo "<td>$f4</td>";
   			echo "<td>$f5</td>";
   			echo "<td>$f6</td>";
   			echo "</tr>";
   			echo "</table>";
			//$k++;
			//echo $k;
		//}
		//echo $j;
	}*/
	//echo $i;
	$i++;
}
?>
<input type="button" name="back" onclick="back1()" value="Back" />
</body>
</html>
