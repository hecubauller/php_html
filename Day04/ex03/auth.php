<?php
function auth($login, $passwd){
	$hash = hash('whirlpool', $passwd);
	if (!$login || !$passwd)
		return (false);
	$usr = unserialize(file_get_contents('../private/passwd'));
	foreach ($usr as $key => $value)
		if ($value['login'] == $login && $value['passwd'] == $hash)
			return (true);
}
return (false);
?>