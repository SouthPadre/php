<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/bd_connect1.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/header.php');
?>
<h1><?=dirNameU(__DIR__)?></h1>
	<body>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1>Имя</h1>
				<p><?=$_SESSION['autorize']['first_name']?></p>
				<h1>Фамилия</h1>
				<p><?=$_SESSION['autorize']['last_name']?></p>
				<h1>Отчество</h1>
				<p><?=$_SESSION['autorize']['second_name']?></p>
			</td>
            <td class="right-collum-index">
					<h1>Номер телефона</h1>
						<p><?=$_SESSION['autorize']['phone_number']?></p>
					<h1>Почта</h1>
						<p><?=$_SESSION['autorize']['email']?></p>
					<h1>Группы</h1>

	<?php 
	include ($_SERVER['DOCUMENT_ROOT'] . '/route/Profile/find_group.php');
	foreach ($groupNames as $gName) :
	?>
<p>
	<?=$gName['name']?>
</p>
<?php endforeach ?>
			</td>
        </tr>
    </table>
</body>
</html>
<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/footer.php');
?>
