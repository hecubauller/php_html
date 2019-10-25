#!/usr/bin/php
<?php
if ($argc >= 2)
{
	$res = NULL;
	for ($i = 1; $i < $argc; ++$i)
    {
        if (!$argv[$i])
			$res = $res . " " . '0';
        else
            $res = $res . " " . $argv[$i];
	}
	$res = trim(preg_replace("/\s+/", " ", $res));
	$array = explode(" ", $res);
	sort($array);
	for ($i = 0; $i < ($argc - 1); ++$i)
		echo $array[$i]."\n";
}
?>