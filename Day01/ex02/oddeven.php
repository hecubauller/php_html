#!/usr/bin/php
<?php
while(1)
{
	print("Enter a number: ");
	if (!($number = fgets(STDIN)) && print("\n"))
		exit;
	$number = trim($number);
	if (!is_numeric($number))
		print("'$number' is not a number\n");
	else
		print("The number $number is ".((($number % 2) == 0) ? "even" : "odd")."\n");
}
?>