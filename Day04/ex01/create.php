<?php
if($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === 'OK')
{
	$acc_arr['login'] = $_POST['login'];
	$acc_arr['passwd'] = hash('whirlpool', $_POST['passwd']);
	if (!file_exists('../private'))
		mkdir("../private");
	if (file_exists('../private/passwd'))
	{
		$arr = unserialize(file_get_contents('../private/passwd'));
		foreach ($arr as $key => $usr)
			if ($usr['login'] === $_POST['login'])
				exit("ERROR\n");
	}
	$arr[] = $acc_arr;
	file_put_contents('../private/passwd', serialize($arr));
	echo "OK\n";
}
else
	echo ("ERROR\n");
?>