#!/usr/bin/php
<?php
if ($argc != 2)
{
	echo ("Incorrect Parameters\n");
	exit;
}
		$string = $argv[1];
		$string = str_replace("+", " + ", $string);
		$string = str_replace("-", " - ", $string);
		$string = str_replace("*", " * ", $string);
		$string = str_replace("/", " / ", $string);
		$string = str_replace("%", " % ", $string);
		$string = trim(preg_replace("/\s+/", " ", $string));
		$arr = explode(" ", $string);
		$fir = trim(preg_replace("/\s+/", "", $arr[0]));
		$sign = trim(preg_replace("/\s+/", "", $arr[1]));
		$sec= trim(preg_replace("/\s+/", "", $arr[2]));
if (is_numeric($fir) && is_numeric($sec) && ($sign == "-" || $sign == "+" || $sign == "/" || $sign == "%" ||
		$sign == "*"))
	{
		if ($sign == "+")
			echo ($fir + $sec."\n");
		else if ($sign == "-")
			echo ($fir - $sec."\n");
		else if ($sign == "/")
			echo ($fir / $sec."\n");
		else if ($sign == "%")
			echo ($fir % $sec."\n");
		else if ($sign == "*")
			echo ($fir * $sec."\n");
	}
else
	echo ("Syntax Error\n");
?>