#!/usr/bin/php
<?php
if ($argc != 4)
	echo ("Incorrect Parameters\n");
$first = trim(preg_replace("/\t+/", " ", $argv[1]));
$sign = trim(preg_replace("/\t+/", " ", $argv[2]));
$second = trim(preg_replace("/\t+/", " ", $argv[3]));
if ($sign == "+")
	echo ($first + $second."\n");
else if ($sign == "-")
	echo ($first - $second."\n");
else if ($sign == "/")
	echo ($first / $second."\n");
else if ($sign == "%")
	echo ($first % $second."\n");
else if ($sign == "*")
	echo ($first * $second."\n");
?>