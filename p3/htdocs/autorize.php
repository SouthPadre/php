<pre>
<?php
include_once ('bd_connect1.php');
$connect = bd_connect();
$result = mysqli_query($connect, "select * from users where email='$login' limit 1");
$row = mysqli_fetch_assoc($result);
if (isset($row) && password_verify($password, $row['pass'])) {
	$check = true;
			$_SESSION['autorize'] = $row;
			setcookie('login', $login, time() + 60 * 60 * 24 * 30, '/');
		    header('Location: /route/Main/');
}
?>
</pre>