<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogIn Page</title>
<link href="login-box.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:122px;
	top:37px;
	width:671px;
	height:256px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:237px;
	top:52px;
	width:634px;
	height:503px;
	z-index:1;
}
#apDiv3 {
	position:absolute;
	left:384px;
	top:392px;
	width:80px;
	height:19px;
	z-index:2;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
#apDiv4 {
	position:absolute;
	left:382px;
	top:427px;
	width:83px;
	height:21px;
	z-index:3;
}
.style2 {
	font-size: 14px
}
#apDiv5 {
	position:absolute;
	left:488px;
	top:389px;
	width:145px;
	height:25px;
	z-index:4;
}
#apDiv6 {
	position:absolute;
	left:488px;
	top:424px;
	width:151px;
	height:21px;
	z-index:5;
}
#apDiv7 {
	position:absolute;
	left:487px;
	top:458px;
	width:85px;
	height:26px;
	z-index:6;
}
-->
</style>
</head>

<body>
<?php
session_start();
?>
<form name="database" action="vari.php" method="post">
<div id="apDiv2">
<table width="529" height="483">
<tr>
<td width="521" height="34" background="doboz_02.gif"></td>
</tr>
<tr>
<td height="200"><img src="400_F_767877_YDgeWHeX4fu9XZfdN64WHA29FdsP9t.jpg" width="517" height="274" /></td>
</tr>
<tr>
<td height="126"></td>
</tr>
<tr>
<td height="35" background="doboz_02.gif"></td>
</tr>
</table>
</div>
<div class="style1 style2" id="apDiv3"><b>User Name</b></div>
<div id="apDiv4"><b>Password</b></div>
<div id="apDiv5">
<input type="text" name="txtuser" tabindex="1" maxlength="10"  /></div>
<div id="apDiv6">
<input type="password" tabindex="2" maxlength="10" name="txtpass" /></div>
<div id="apDiv7">
<input type="image" src="arrow/Right_green_arrow.jpg"  width="24px" height="24px" /></div>
</div>
</form>
</body>
</html>
