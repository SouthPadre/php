<?php
namespace Ex3;

class Tclass implements Formatter
{
	public function format($string) : string
	{
		return 'this string ' . $string;
	}
}
