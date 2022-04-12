<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
 	$n=3;
	$ncopy=$n;
	$sum=0;
	while($n>0):
	$sum=$sum+$n;
	$n--;
	endwhile;
	echo "$ncopy sum is $sum";
?>
</body>
</html>
