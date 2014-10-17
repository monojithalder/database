<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LogIn Page  </title>


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
<div style="padding: 100px 0 0 250px;">


<div id="login-box">

<H2>Login</H2>

<br />
<br />

<div id="login-box-name" style="margin-top:20px;">Username:</div><div id="login-box-field" style="margin-top:20px;"><input name="txtuser" type="text" class="form-login" title="Username" value="" size="30" maxlength="2048" /></div>
<div id="login-box-name">Password:</div><div id="login-box-field"><input name="txtpass" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" /></div>
<br />
<span class="login-box-options"></span>
<br />
<br />
<input  type="image" src="images/login-btn.png" width="103" height="42" style="margin-left:90px;" />
</div>
</div>
</form>
</body>
</html>
