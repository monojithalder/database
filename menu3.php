<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function big(lyr)
{
document.all[lyr].style.height='40px';
}

/*small() makes selected layer shorter (height property)*/

function small(lyr)
{

document.all[lyr].style.height='18px';

}

/* start() makes all layers short to start with (height property)*/

function start()
{
document.all.Layer1.style.height='18px';
document.all.Layer2.style.height='18px';
document.all.Layer3.style.height='18px';
}
</script>
</head>

<body onload="start()">
<div id="Layer1" style="position:absolute; width:250px; height:32px; z-index:1; left: 10px; top: 38px; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000; overflow: hidden" onMouseOver="big('Layer1')"; onMouseOut="small('Layer1')">
<div align="center">
<font face="Verdana, Arial, Helvetica, sans-serif" size = "2">
<label>Menu</label>
<br>
| <a href="link1.html">Link 1</a>
| <a href="link2.html">Link 2</a>
| <a href="link3.html">Link 3</a>
| <a href="link4.html">Link 4</a> |
</font>
</div>
</body>
</html>
