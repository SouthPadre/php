<?php
namespace Toys;

class ToyFactory
{
	public function createToy($name)
	{
		return new Toy($name, rand(1, 1000));
	}
}

class Toy
{
	public $name;
	public $price;

	public function __construct($tName, $tPrice)
	{
		$this->name = $tName;
		$this->price = $tPrice;
	}

	
}

$factory = new ToyFactory;
$toy1 = $factory->createToy('doll');
// var_dump($toy1);
$i = rand(1, 4);
while ($i) {
	$toys[] = $factory->createToy('monica');
	$toys[] = $factory->createToy('tank');
	$toys[] = $factory->createToy('plain');
	$toys[] = $factory->createToy('cat');
	$toys[] = $factory->createToy('lego');
	$i--;
}
$sum = 0;
foreach ($toys as $toy) {
	echo "<p>игрушка $toy->name стоит $toy->price долларов!</p>";
	$sum += $toy->price;
}
echo "стоимость всех игрушек в магазине $sum долларов";