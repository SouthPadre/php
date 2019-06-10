<?php
namespace Domna;

class Forge
{
	public function burn($object)
	{
		$flame = $object->burn();
		echo $flame->render((string)$object) . "</br>";
	}
}

class BlueFlame
{
	public function render($name)
	{
		return $name . " Пылает голубым огнем";
	}
}

class RedFlame
{
	public function render($name)
	{
		return $name . " Горит красным пламенем";
	}	
}

class Smoke
{
	public function render($name)
	{
		return $name . " Создал непроглядный дым";
	}	
}

class Leaf
{
	public function burn()
	{
		return new Smoke;
	}

	public function __toString()
	{
		return 'Лист';
	}
}

class House
{
	public function burn()
	{
		return new RedFlame;
	}

	public function __toString()
	{
		return 'Дом';
	}
}

class Road
{
	public function burn()
	{
		return new BlueFlame;
	}

	public function __toString()
	{
		return 'Дорога';
	}
}

class Human
{
	public function burn()
	{
		return new Smoke;
	}

	public function __toString()
	{
		return 'Человек';
	}
}

class Plane
{
	public function burn()
	{
		return new BlueFlame;
	}

	public function __toString()
	{
		return 'Самолет';
	}
}

class Car
{
	public function burn()
	{
		return new RedFlame;
	}

	public function __toString()
	{
		return 'Машина';
	}
}

$forge = new Forge;
$first = new Leaf;
$darkHouse = new House;
$plane = new Plane;
$human = new Human;
$road = new Road;
$car = new Car;

$forge->burn($first);
$forge->burn($darkHouse);
$forge->burn($plane);
$forge->burn($human);
$forge->burn($road);
$forge->burn($car);
