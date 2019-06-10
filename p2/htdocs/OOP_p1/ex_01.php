<?php
namespace Animals;

class Cat
{
	public $name;
	public function __construct($petName)
	{
		$this->name = $petName;
	}
}

class Dog
{
	public $name = "noname";
	public function __construct($petName)
	{
		$this->name = $petName;
	}
}

class Fish
{
	public $name = 'noname';
	public function __construct($petName)
	{
		$this->name = $petName;
	}
}

$cat1 = new Cat('Пушок');
$cat2 = new Cat('Барсик');
$cat3 = new Cat('Томас');
$dog1 = new Dog('Дружок');
$dog2 = new Dog('Зевс');
$dog3 = new Dog('Шарик');
$dog4 = new Dog('Чаппи');
$dog5 = new Dog('Дез');
$fish1 = new Fish('Орео');

var_dump($cat1);