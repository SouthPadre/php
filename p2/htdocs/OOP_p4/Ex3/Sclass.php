<?php
namespace Ex3;


class Sclass implements Renderable
{
	public function render($string)
	{
		echo 'second_render ' . $string . '</br>';
	}
}
