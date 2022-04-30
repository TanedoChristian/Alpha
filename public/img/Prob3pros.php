<!DOCTYPE html>
<html>
<body>
<?php
	if (isset($_POST['submit']))
	{	
		$num1= $_POST['number1'];
		$num2= $_POST['number2'];
		$num3= $_POST['number3'];
		$num4= $_POST['number4'];
		$num5= $_POST['number5'];
		
		$result= $_POST['gender'];
		if (isset($_POST['gender']))
		{
			$result= $_POST['gender'];
			switch ($result)
			{	
				case 'f':
					$a1= ($num1*0.732) + 8.987;
					$a2= $num2 / 3.140;
					$a3= $num3 * 0.157;
					$a4= $num4 * 0.249;
					$a5= $num5 * 0.434;
					$b= $a1 + $a2 - $a3 - $a4 + $a5;
					$bodyfat= $num1 - $b;
					$fatpercent= $bodyfat * 100 / $num1;
					echo "<br><br>Your body fat percentage is : ".$fatpercent;
					break;
				case 'm':
					$a1= ($num1 * 1.082) + 94.42;
					$a2= $num2 * 4.15;
					$b= $a1 - $a2;
					$bodyfat= $num1 - $b;
					$fatpercent= $bodyfat * 100 / $num1;
					echo "<br><br>Your body fat percentage is : ".$fatpercent;
					break;
				default:
					break;
			}
		}
		
	}
?>

</body>
</html>