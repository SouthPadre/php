<?php
namespace Farm;

abstract class Animals
{
	abstract public function say();
	abstract public function move();
}

abstract class Hoofs extends Animals
{
	public function move()
	{
		$this->walk();
	}

	protected function walk()
	{
		echo '<p>топ топ</p>';
	}
}

abstract class Birds extends Animals
{
	public function move()
	{
		$this->tryToFly();
	}

	protected function tryToFly()
	{
		echo '<p>вжих вжих топ топ</p>';
	}
}

class Cow extends Hoofs
{
	public function say()
	{
		echo '<p>муууу</p>';
	}
}

class Pig extends Hoofs
{
	public function say()
	{
		echo '<p>хрю хрю</p>';
	}
}

class Chicken extends Birds
{
	public function say()
	{
		echo '<p>ко-ко-ко</p>';
	}
}

class Farm
{
	public $animals = [];

	public function addAnimal($animal)
	{
		$this->animals[] = $animal;
		$animal->move();
	}

	public function rollCall()
	{
		shuffle($this->animals);
		foreach ($this->animals as $animal) {
			$animal->say();			
		}
	}
}

// $cow = new Cow();
// // $chicken = new Chicken();
// $pig = new Pig();
// $newpig = new Pig();
// $farm = new Farm();
// $farm->addAnimal($cow);
// $farm->addAnimal($pig);
// // $farm->addAnimal($chicken);
// $farm->addAnimal($newpig);
// $farm->rollCall();

