<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$n=153;
		$ncopy=$n;
		$sum=0;
		do{
		$r=$n%10;
		$sum=$sum+($r*$r*$r);
		$n=$n/10;
		}
		while($n>0);
		if($ncopy==$sum)
		{
			echo "$sum=$ncopy <br> $sum is armstrong";
		}
		else
		{
			echo "$sum!=$ncopy <br> $sum is not armstrong";
		}
	?>
</body>
</html>
