<?php
namespace Ex3;

class Fclass implements Renderable, Formatter
{
	public function render($string)
	{
		echo 'render ' . $string . '</br>';
	}

	public function format($string) : string
	{
		return '...' . $string . '...';
	}
}