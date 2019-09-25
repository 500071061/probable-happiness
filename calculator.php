<?php
//ini_set('display_errors',0);

if(isset($_POST['submit']))
{
	$num1=$_POST['number1'];
    $num2=$_POST['number2'];

	if(is_numeric['$num1'] && is_numeric['$num2'])
	{
		if(isset($_POST['operation']))
		{
			$op=$_POST['operation'];
			
			switch($op)
			{
				case '+': $result=$num1+$num2;
				          break;
				case '-': $result=$num1-$num2;
				          break;
				case '*': $result=$num1*$num2;
				          break;
				case '/': $result=$num1/$num2;
				          break;
			}
			
		}
		else
		{
			echo "select operator";
		}
		
	}
	else
	{
		echo "enter numeric values";
	}
	
	
}

?>

<!DOCTYPE html>
<head><title>CALCULATOR</title>
<style>
h1{color:black;
   font-family:verdana;
   font-size:100%;
  //text-align:center;
</style>
<h1>CALCULATOR</h1><br><br>
</head>
<body>
<form method="post" action="calculator.php">
enter first number :<br>
<input type="text" name="number1"><br><br>
enter second number :<br>
<input type="text" name="number2"><br><br>
choose operation:<br>
<input type="radio" name="operation" value="+">+<br>
<input type="radio" name="operation" value="-">-<br>
<input type="radio" name="operation" value="*">*<br>
<input type="radio" name="operation" value="/">/<br><br>
<input type="submit" value="submit"><br><br>
<h1>RESULT:<?php echo $result; ?> </h1>

</body>
</html>
