<?php

//A number x is a Fibonacci number only if (5 * x * x + 4) or (5 * x * x – 4) is a perfect square
//A number x is a Perfect Square if it is a product of two equal intergers


$x = $_POST['x'];

$result = isFibonacci($x);

echo $result;

function isPerfectSquare($x)
{
	//get the square root of $x and convert it into an integer to get rid fo the decimal point(if any)
	$i = (int)(sqrt($x));
	//returns true if the condition below is met
	return ($x == ($i * $i));
}

function isFibonacci($x)
{
	//returns true if one or both of the below conditions are met
	return isPerfectSquare(5 * $x * $x + 4) || isPerfectSquare(5 * $x * $x - 4);
	
}

?>