<?php
namespace Basket;

class Box
{
	public function putBall(Ball $ball)
	{
		echo 'в корзину добавлен мяч</br>';
	}
}

class Ball
{
	public static $count;

	public function __construct()
	{
		self::$count++;
	}
}

$box1 = new Box;
$i = rand(1, 100);
while ($i--) {
	$box1->putBall(new Ball);
}
echo '<h1>В корзине ' . Ball::$count . '</h1>';