<?php

/*
 * Get the list of registrars.
 */
die('yes');
$registrars = json_decode(file_get_contents('../includes/registrars.json'));

if ($registrars === FALSE)
{

	header('HTTP/1.0 500 Internal Server Error');
	echo '500 Internal Server Error'
	exit();

}

print_r($registrars);
