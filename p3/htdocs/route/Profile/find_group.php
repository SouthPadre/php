<pre>
<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/bd_connect1.php');
$connect = bd_connect();
$idUser = $_SESSION['autorize']['id'];
$result = mysqli_query($connect, "select * from group_user where id_user=$idUser");
while ($row = mysqli_fetch_assoc($result)) {
	$groupNumbers[] = $row['id_group']; 
}
$groupNumbers = array_unique($groupNumbers);
foreach ($groupNumbers as $idGroup) {
	$result1 = mysqli_query($connect, "select name from groups where id=$idGroup limit 1");
	$groupNames[] = mysqli_fetch_assoc($result1);
}
?>
</pre>