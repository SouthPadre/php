<?php
session_start();
require_once ('work.php');
require_once ('header.php');
?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
				
			
			</td>
            <td class="right-collum-index">
				
				<div class="project-folders-menu">
					<ul class="project-folders-v">
    					<li class="project-folders-v-active"><a href="#">Авторизация</a></li>
    					<li><a href="#">Регистрация</a></li>
    					<li><a href="#">Забыли пароль?</a></li>
					</ul>
				    <div class="clearfix"></div>
				</div>
					<?php
					if (!isset($_SESSION['autorize'])) :
					?>
                    <?php if (isset($_GET['login']) && $_GET['login'] == 'yes') : ?>
				<div class="index-auth">
                    <form action="/?login=yes" method="POST">
                    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="iat">
                                    <?php if (isset($check)) {
                                        require_once (($check) ? ($_SERVER['DOCUMENT_ROOT']. '/include/success.php') : ($_SERVER['DOCUMENT_ROOT']. '/include/error.php'));
                                    }
                                    ?>
                                    <?php if (!isset($_COOKIE['login'])) { ?>
                                    <label for="login_id">Ваш e-mail:</label>
                               		<?php
                               		} else {
                               			$login = $_COOKIE['login'];
                               		}
                               		?>
                                    <input <?=isset($_COOKIE['login']) ? 'type="hidden"' : ''?> id="login_id" value="<?=isset($login) ? $login : ''?>" size="30" name="login">
                                </td>
							</tr>
							<tr>
								<td class="iat">
                                    <label for="password_id">Ваш пароль:</label>
                                    <input id="password_id" value="<?=isset($password) ? $password : ''?>" size="30" name="password" type="password">
                                </td>
							</tr>
							<tr>
								<td><input type="submit" value="Войти"></td>
							</tr>
						</table>
                    </form>
				</div>
<?php
endif;
endif;
?>
			</td>
        </tr>
    </table>
    <?php
	require_once ('footer.php');
    ?>
