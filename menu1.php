<HTML>
<HEAD>
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
</HEAD>
<BODY onLoad = "start()">
<div id="Layer1" style="position:absolute; width:250px; height:32px; z-index:1; left: 10px; top: 38px; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000; overflow: hidden" onMouseOver="big('Layer1')"; onMouseOut="small('Layer1')">
<div align="center">
<font face="Verdana, Arial, Helvetica, sans-serif" size = "2">
<a href="menu1.html">Menu 1</a>
<br>
| <a href="link1.html">Link 1</a>
| <a href="link2.html">Link 2</a>
| <a href="link3.html">Link 3</a>
| <a href="link4.html">Link 4</a> |
</font>
</div>
</div>

<div id="Layer2" style="position:absolute; width:250px; height:32px; z-index:1; left: 270px; top: 38px; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000; overflow: hidden" onMouseOver="big('Layer2')"; onMouseOut="small('Layer2')">
<div align="center">
<font face="Verdana, Arial, Helvetica, sans-serif" size = "2">
<a href="menu2.html">Menu 2</a>
<br>
| <a href="link5.html">Link 5</a>
| <a href="link6.html">Link 6</a>
| <a href="link7.html">Link 7</a>
| <a href="link8.html">Link 8</a> |
</font>
</div>

</div>
<div id="Layer3" style="position:absolute; width:250px; height:32px; z-index:1; left: 530px; top: 38px; background-color: #FFFFCC; layer-background-color: #FFFFCC; border: 1px none #000000; overflow: hidden" onMouseOver="big('Layer3')"; onMouseOut="small('Layer3')">
<div align="center">
<font face="Verdana, Arial, Helvetica, sans-serif" size = "2">
<a href="menu3.html">Menu 3</a>
<br>
| <a href="link9.html">Link 9</a>
| <a href="link10.html">Link 10</a>
| <a href="link11.html">Link 11</a>
| <a href="link12.html">Link 12</a> |
</font>
</div>
</div>
</BODY>
</HTML>