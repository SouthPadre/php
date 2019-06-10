<?php
namespace Ex2;

class UserFormValidator
{
	public function validate($postArr)
	{
		if (!($postArr['Age'] > 17)) {
			throw new \Exception('Возрастные ограничения', 1);
		}
		if ($postArr['Name'] == '') {
			throw new \Exception('Вы не ввели имя', 2);
		}
		if (!(filter_var($postArr['Email'], FILTER_VALIDATE_EMAIL))) {
			throw new \Exception('Неверный адрес электронной почты', 3);
		}
		return true;
	}
}