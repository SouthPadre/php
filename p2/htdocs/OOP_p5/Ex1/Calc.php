<?php
namespace Ex1;

class Calc
{
	public static function calculate($number1, $number2, callable $callback)
	{
		return call_user_func($callback, $number1, $number2);
	}
}
