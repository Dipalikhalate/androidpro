<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<?php
		$n=141;
		$ncopy=$n;
		while($n>0):
		$r=$n%10;
		//echo "r=$r <br>";
		$sum=($sum*10)+$r;
		//echo "sum=$sum<br>";
		$n=$n/10;
		endwhile;
		if($ncopy==$sum)
		{
			echo "$sum=$ncopy <br> $sum is Palindrome";
		}
		else
		{
			echo "$sum!=$ncopy <br> $sum is not Palindrome";
		}
	?>
</body>
</html>
