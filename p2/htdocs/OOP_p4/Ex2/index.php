<?php
namespace Ex2;

spl_autoload_register(function ($class) {
	$prefix = 'Ex2';
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

$someArr = ['First', 'bang', 'kol', 'Second', 'asd', 'third', 'fourth', 'qwerty', 'asdf', 'zxc', 'pop', 'Sixth', 'fiveth'];

foreach ($someArr as $className) {
	(Creator::create($className))->show();
}
