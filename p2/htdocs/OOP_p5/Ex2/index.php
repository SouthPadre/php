<?php include('validation.php') ?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Ввод данных</title>
 </head>
 <body>
  <form method="POST">
   <p <?=(isset($error)) ? 'style="color:red;"' : 'style="color:green;"'?>><?=$error ?? 'Success'?></p>
  	 <p>Введите id:</p>
   <p><input name="id"></p>

       <p>Введите возраст:</p>
   <p><input name="Age"></p>
      <p>Введите Имя:</p>
   <p><input name="Name" ></p>
      <p>Введите почту:</p>
   <p><input name="Email"></p>
      <p><input type="submit" value="Отправить"></p>
  </form>
 </body>
</html>

