<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$myFile = "C:WINDOWS\NewFolder\ testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Bobby Bopper";
fwrite($fh, $stringData);
//$stringData = "Tracy Tanner\n";
//fwrite($fh, $stringData);
fclose($fh);
$myFile = "C:WINDOWS\NewFolder\ testFile.txt";
$fm = fopen($myFile, 'r');
$theData = fread($fm, 10);
fclose($fm);
echo $theData;
?>
</body>
</html>
