<?php
function bd_connect()
{
	static $c = 0;
	if (!$c)
	{
		$host = 'newgrade.vpool';
		$datebase = 'takzhanova_test';
		$user = 'test';
		$pass = 'test';

		$connect = mysqli_connect($host, $user, $pass, $datebase);
	}
	return $connect;
}
?>
