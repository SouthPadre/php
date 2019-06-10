<?php
if (!empty($_SESSION) && isset($_SESSION['autorize']) && isset($_COOKIE['login'])) {
    setcookie('login', $_COOKIE['login'], time() + 60 * 60 * 24 * 30, '/');
}
if (empty($_SESSION) && $_SERVER['SCRIPT_FILENAME'] != $_SERVER['DOCUMENT_ROOT'] . '/index.php') {
    header('Location: /?login=yes');

}
include_once ($_SERVER['DOCUMENT_ROOT'] . '/dirName.php');
?>
<!DOCTYPE html>
<html>
<body>
    <div class="header">
    	<div class="logo"><img src="<?='/'?>i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
        <form action="/?login=yes" method="POST">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php
                    require_once ($_SERVER['DOCUMENT_ROOT'] . '/ex03/logout.php');
                ?>
                <tr>
                    <td><input type="submit" value="<?=(isset($_SESSION['autorize']) ? 'Выйти' : 'Вход')?>" name="button"></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="clearfix">
        <?php 
        include_once ($_SERVER['DOCUMENT_ROOT'] . '/new_ex/main_menu.php');
        include_once ($_SERVER['DOCUMENT_ROOT'] . '/new_ex/put_menu.php');
        putMenu($menuArr, 'main-menu', 16); 
        ?>
    </div>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>

</head>
