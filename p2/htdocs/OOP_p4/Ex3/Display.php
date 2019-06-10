<?php
namespace Ex3;

class Display
{
	public static function show($formatter, $string)
	{
		if ($formatter instanceof Renderable) {
			$formatter->render($string);
		} elseif ($formatter instanceof Formatter) {
			echo $formatter->format($string) . '</br>';
		} elseif (method_exists($formatter, 'format')) {
			echo $formatter->format($string) . '</br>';
		} else {
			echo $string . '</br>';
		}
	}
}


