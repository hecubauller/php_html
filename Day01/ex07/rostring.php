#!/usr/bin/php
<?php
if ($argc < 2)
	exit;
$argv[1] = trim(preg_replace("/\s+/", " ", $argv[1]));
$array = explode(" ", $argv[1]);
if ($array[1])
{
	for ($i = 1; $array[$i]; ++$i)
		echo $array[$i]." ";
	echo $array[0]."\n";
}
else if ($array[0])
	echo $array[0]."\n";
?>