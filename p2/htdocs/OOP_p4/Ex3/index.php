<?php

namespace Ex3;

spl_autoload_register(function ($class) {
	$prefix = 'Ex3';
	$base_dir = __DIR__;
	$len = strlen($prefix);
	if (strncmp($prefix, $class, $len) !== 0) {

		return;
	}
	$relative_class = substr($class, $len);
	$file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
	if (file_exists($file)) {
		require $file;
	}
});

$strArr = ['last', 'pop', 'joker', 'onix', 'tail', 'magic', 'sci', 'house'];
$objArr = [new Fclass, new Sclass, new Tclass, new Aclass, new Eclass];

foreach ($strArr as $string) {
	foreach ($objArr as $formatter) {
		Display::show($formatter, $string);
	}
	echo '</br>';
}
