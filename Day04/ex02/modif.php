<?php
if($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] === 'OK'
	&& $_POST['oldpw'] !== $_POST['newpw'] && file_exists('../private/passwd'))
{
	$hash = hash('whirlpool', $_POST['oldpw']);
	$new_hash = hash('whirlpool', $_POST['newpw']);
	$arr = unserialize(file_get_contents('../private/passwd'));
	foreach ($arr as $key => $usr)
	{
		if ($usr['login'] === $_POST['login'] && $usr['passwd'] === $hash)
		{
			$arr[$key]['passwd'] = $new_hash;
			file_put_contents('../private/passwd', serialize($arr));
			exit("OK\n");
		}
		else
			exit("ERROR\n");
	}
}
else
	echo ("ERROR\n");
?>