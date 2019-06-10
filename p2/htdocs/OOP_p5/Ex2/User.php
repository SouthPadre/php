<?php
namespace Ex2;

class User
{
	public function load($id)
	{
		if (!($id < 20 && $id > 10)) {
			throw new \Exception("Пользователя не существует", 0);
		}
		return true;
	}

	public function save($data)
	{
		if (rand(0, 1)) {
			throw new \Exception("Ошибка записи в базу", 4);
		}
		return true;
	}
}