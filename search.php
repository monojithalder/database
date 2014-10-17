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
$ser=$_POST['txtsearch'];
$sercaps=strtoupper($ser);
$sersmall=strtolower($ser);
//echo $sercaps;
$de=explode(" ",$ser);
$serlen=strlen($ser);
$k=-1;
$j=-1;
$il=0;
for($ch=0;$ch<$serlen;$ch++)
{
	$dev=$de[$ch];
	if($dev!="")
	{
		$k++;
	}
}
echo $k;
if($k>0)
{
	for($l=0;$l<$k;$l++)
	{
		$e[$l]=$de[$l];
	}
}
$con=mysql_connect("localhost","root",123);
if(!$con)
{
	die("can not connect".mysql_error());
}
mysql_select_db("information",$con);
$query="SELECT * FROM info";
$result=mysql_query($query);
$rownum=mysql_num_rows($result);
for($i=0;$i<$rownum;$i++)
{
	$gname=mysql_result($result,$i,"gname");
	$gsize=mysql_result($result,$i,"gsize");
	$status=mysql_result($result,$i,"status");
	$position=mysql_result($result,$i,"position");
	$bname=mysql_result($result,$i,"bname");
	$bdate=mysql_result($result,$i,"bdate");
	$oname=mysql_result($result,$i,"oname");
	$gnamelen=strlen($gname);
	$gnamex=explode(" ",$gname);
	$smallgname=strtolower($gname);
	//echo $smallgname;
	$gnamexsamll=explode(" ",$smallgname);
	for($w=0;$w<$gnamelen;$w++)
	{
		$gcheck=$gnamex[$w];
		if($gcheck!="")
		{
			$j++;
		}
		
	}
		//echo $j;
		
	if($k==0)
	{
		//echo "il////$il";
		//for($il=0;$il<$j;$il++)
		$il=0;
		//$j=3;
		while($il<=$j)
		{
			//echo "come";
			$chcaps=strpos($gnamex[$il],$sercaps);
			$chsmall=strpos($gnamex[$il],$sersmall);
			$chnor=strpos($gnamex[$il],$ser);
			$challsmall=strpos($gnamexsamll[$il],$sersmall);
			$datalen=strlen($gnamex[$il]);
			$datalen2=datalen-1;
			$rawdata=substr($gnamex[$il],-$datalen,-$datalen2);
			$temp .=strtolower($gnamex[$il]);
			$chtemp=strpos($temp,$sersmall);
			//$capsdata=strtoupper($rawdata);
			//$smalldata=strtolower($rawdata);
				/*echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td></td>";
   				echo "<td>$temp</td>";
   				echo "</tr>";
   				echo "</table>";*/
			if($sercaps==$gnamex[$il])
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$foname</td>";
				echo "<td>1st</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($sersmall==$gnamex[$il])
			{
				
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$foname</td>";
				echo "<td>2nd</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($chcaps != "")
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>3rd</td>";
   				echo "</tr>";
   				echo "</table>";
			
			}
			elseif($chsmall != "")
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>4th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($sersmall==$rawdata)
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$foname</td>";
				echo "<td>5th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($sercaps==$rawdata)
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$foname</td>";
				echo "<td>6th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($chcaps === 0)
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>3rd</td>";
   				echo "</tr>";
   				echo "</table>";
			
			}
			elseif($chsmall === 0)
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>4th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($chnor === 0)
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>45th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($chnor != "")
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>6th</td>";
   				echo "</tr>";
   				echo "</table>";
				
			}
			elseif($challsmall !="")
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>7th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($challsmall === 0)
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>8th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($chtemp != "")
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>9th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($chtemp === 0)
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>10th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			elseif($chtemp == $sersmall)
			{
				echo "<table width=691 border=1 style=border-color:#0000CC>";
   				echo "<tr>";
   				echo "<td>$gname</td>";
   				echo "<td>$gsize</td>";
   				echo "<td>$status</td>";
   				echo "<td>$position</td>";
   				echo "<td>$bname</td>";
   				echo "<td>$bdate</td>";
   				echo "<td>$oname</td>";
				echo "<td>11th</td>";
   				echo "</tr>";
   				echo "</table>";
			}
			$chtemp="";
			$temp="";
			$il++;
		}
		$j=-1;
	}
}
?>
<input type="button" name="back" onclick="back1()" value="Back" />
</body>
</html>
