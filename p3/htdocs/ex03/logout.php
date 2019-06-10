<?php
if (isset($_POST['button']) && isset($_SESSION['autorize'])) {
session_destroy();
session_start();

}
?>