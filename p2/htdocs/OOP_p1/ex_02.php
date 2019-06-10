<?php

namespace Strange;

class HungryCat
{
	public $name;
	public $color;
	public $favoriteFood;

	public function __construct($petName, $petColor, $petFood)
	{
		$this->name = $petName;
		$this->color = $petColor;
		$this->favoriteFood = $petFood;
	}

	public function eat($food)
	{
		echo "<p>Голодный кот $this->name, особые приметы: цвет - $this->color, съел $food</p>";
		if ($food == $this->favoriteFood) {
			echo " и замурчал 'мррррр' от своей любимой еды";
		}

	}
}

$cat1 = new HungryCat('Thom', 'grey', 'kitcat');
$cat2 = new HungryCat('Rojer', 'orange', 'wiskas');

$cat1->eat('lemon');
$cat1->eat('chicken');
$cat1->eat('steak');
$cat1->eat('kitcat');
$cat1->eat('wiskas');
$cat2->eat('wiskas');
$cat2->eat('kitcat');
$cat2->eat('fish');
$cat2->eat("$cat1->name");
?>
