<?php
namespace Ex1;

spl_autoload_register(function ($class) {
	$prefix = 'Ex1';
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

function plus($nbr1, $nbr2)
{
	return $nbr1 + $nbr2;
}

$callbacks = [
	'Ex1\plus',
	'Ex1\ForMinus::minus',
	[new Slash, 'division'],
	function ($nbr1, $nbr2) {
	return $nbr1 * $nbr2;
	}
];
for ($i = 0; $i < 10; $i++) {
	$nbr1 = rand(1, 100);
	$nbr2 = rand(1, 100);
	echo 'duet ' . $nbr1 . ' ' . $nbr2 . '</br>';
	foreach ($callbacks as $callback) {
		echo Calc::calculate($nbr1, $nbr2, $callback) . '</br>';
	}
}
