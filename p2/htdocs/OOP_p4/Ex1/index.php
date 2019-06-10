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

$manager = new Manager();

$manager->place(new Books());
$manager->place(new Screwdriver());
$manager->place('asort');
$manager->place(new Books());
$manager->place(666);
$manager->place(new Garbage);

