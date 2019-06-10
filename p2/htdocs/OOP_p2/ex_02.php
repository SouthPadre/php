<?php

namespace Farm2;
include ('ex_01.php');
use \Farm as Farm1;
class Goose extends Farm1\Birds
{
	public function say()
	{
		echo '<p>га-га-га</p>';
	}
}

class Turkey extends Farm1\Birds
{
	public function say()
	{
		echo '<p>индюк говорит</p>';
	}
}

class Hourse extends Farm1\Hoofs
{
	public function say()
	{
		echo '<p>игого</p>';
	}
}

class BirdFarm extends Farm1\Farm
{
	public function addAnimal($animal)
	{
		parent::addAnimal($animal);
		$this->showAnimalsCount();
	}

	public function showAnimalsCount()
	{
		echo '<h2>Птиц на ферме: ' . count($this->animals) . '</h2>';
	}
}

class Farmer
{
	public function addAnimal(Farm1\Farm $farm, Farm1\Animals $animal)
	{
		$farm->addAnimal($animal);
	}
	public function rollCall(Farm1\Farm $farm)
	{
		echo '<h1>Перекличка на ферме: </h1>';
		$farm->rollCall();
	}

}

$farmer = new Farmer;
$farm = new Farm1\Farm;
$birdFarm = new BirdFarm;
$cow = new Farm1\Cow;
$pig1 = new Farm1\Pig;
$pig2 = new Farm1\Pig;
$chicken = new Farm1\Chicken;
$turkey1 = new Turkey;
$turkey2 = new Turkey;
$turkey3 = new Turkey;
$hourse1 = new Hourse;
$hourse2 = new Hourse;
$goose = new Goose;

$farmer->addAnimal($farm, $cow);
$farmer->addAnimal($farm, $pig1);
$farmer->addAnimal($farm, $pig2);
$farmer->addAnimal($birdFarm, $chicken);
$farmer->addAnimal($birdFarm, $turkey1);
$farmer->addAnimal($birdFarm, $turkey2);
$farmer->addAnimal($birdFarm, $turkey3);
$farmer->addAnimal($farm, $hourse1);
$farmer->addAnimal($farm, $hourse2);
$farmer->addAnimal($birdFarm, $goose);
$farmer->rollCall($farm);
$farmer->rollCall($birdFarm);

