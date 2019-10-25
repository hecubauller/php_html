#!/usr/bin/php
<?php
function ft_split($string)
{
    if (!$string)
        exit;
	$string = preg_replace("/\s+/", " ", $string);
	$string = trim($string, " ");
	if (!$string)
	    return array();
    $array = explode(" ", $string);
    sort($array);
	return($array);
}
?>