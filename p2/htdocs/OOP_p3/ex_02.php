<?php
namespace CatFabric;

class Cat
{
	public $name;
	public $color;
	public $age;

	public function __construct($name, $color, $age)
	{
		$this->name = $name;
		$this->color = $color;
		$this->age = $age;
	}
}

class CatFactory
{
	public static function createRed2YearsOldCat($name)
	{
		return new Cat($name, 'red', 2);
	}

	public static function createBlack5YearsOldCat($name)
	{
		return new Cat($name, 'black', 5);
	}

	public static function createPink1YearsOldCat($name)
	{
		return new Cat($name, 'pink', 1);
	}

	public static function createGrey10YearsOldCat($name)
	{
		return new Cat($name, 'grey', 10);
	}

	public static function createWhite6YearsOldCat($name)
	{
		return new Cat($name, 'white', 6);
	}

	public static function createLeopardCat($name, $age)
	{
		return new Cat($name, 'leopard', $age);
	}

	public static function createDolmatin7YearsOldCat($name)
	{
		return new Cat($name, 'dolmatin', 7);
	}

	public static function createDolmatinCat($name, $age)
	{
		return new Cat($name, 'dolmatin', $age);
	}
}

$catArr[] = CatFactory::createRed2YearsOldCat('Рыжик');
$catArr[] = CatFactory::createBlack5YearsOldCat('Нига');
$catArr[] = CatFactory::createPink1YearsOldCat('Единорожка');
$catArr[] = CatFactory::createGrey10YearsOldCat('Волчара');
$catArr[] = CatFactory::createWhite6YearsOldCat('Пушок');
$catArr[] = CatFactory::createLeopardCat('Тони', 20);
$catArr[] = CatFactory::createDolmatin7YearsOldCat('101');
$catArr[] = CatFactory::createDolmatinCat('Ло-Ло', 150);

foreach ($catArr as $Cat) {
	print_r("<p>$Cat->name | цвет $Cat->color | годиков $Cat->age</p>");
}