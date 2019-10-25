#!/usr/bin/php
<?php
if ($argc >= 2)
{
	$string = preg_replace("/\s+/", " ", $argv[1]);
	$string = trim($string, " ");
	if ($string)
	    print($string . "\n");
	else
	    exit;
}
?>