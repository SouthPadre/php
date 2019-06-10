<?php
namespace AnimalWorld;

abstract class Animals
{
	abstract function move();
}

abstract class Wild extends Animals
{
	abstract function meet();
}

class Fish extends Wild
{
	public function move()
	{
		echo 'бульк';
	}

	public function meet()
	{
		echo 'вцепилась в палец';
	}
}

class Bear
{
	public function move()
	{
		echo 'ТОП_ТОП - ТОП_ТОП';
	}

	public function meet()
	{
		echo 'Вы не успели убежать';
	}	
}

class Tiger
{
	public function move()
	{
		echo 'а он бесшумен';
	}

	public function meet()
	{
		echo 'Вы не успели убежать';
	}		
}

class Snake
{
	public function move()
	{
		echo 'шшшшшш-шшшш';
	}

	public function meet()
	{
		echo 'успеете добежать до антивируса?';
	}		
}

class Camel
{
	public function move()
	{
		echo 'тыгидык-тыгидык';
	}

	public function meet()
	{
		echo 'тьфу';
	}	
}

class Moose
{
	public function move()
	{
		echo 'топ-тыгидык-топ';
	}

	public function meet()
	{
		echo '....';
	}	
}

class Chicken
{
	public function move()
	{
		echo 'вжих-вжих-топ-топ';
	}

	public function meet()
	{
		echo 'ты не уйдешь с яйцом';
	}	
}

class Elephant
{
	public function move()
	{
		echo 'ТОП_ТОП-ТОП';
	}

	public function meet()
	{
		echo 'Освежись';
	}	
}

class Delphin
{
	public function move()
	{
		echo 'бульк бульк';
	}

	public function meet()
	{
		echo 'Ф_Ф_Ф_Ф';
	}	
	
}

$delphin = new Delphin;
echo $delphin->move() . '</br>';
echo $delphin->meet() . '</br>';	
$bear = new Bear;
echo $bear->move() . '</br>';
echo $bear->meet();	


?>
