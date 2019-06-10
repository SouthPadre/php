<pre>
<?php
$menuArr = [
	[	
		'title' => 'Главная',
		'sort' => 20,
		'path' => 'https://www.example.net/main_menu.php'
	],
	[	
		'title' => 'Настройки профиля',
		'sort' => 18,
		'path' => 'https://www.example.net/settings.php'
	],
	[	
		'title' => 'Товары',
		'sort' => 6,
		'path' => 'https://www.example.net/market.php'
	],
	[	
		'title' => 'Услуги',
		'sort' => 10,
		'path' => 'https://www.example.net/services.php'
	],
	[	
		'title' => 'Контакты',
		'sort' => 100,
		'path' => 'https://www.example.net/contacts.php'
	],
	[	
		'title' => 'Служба поддержки',
		'sort' => 33,
		'path' => 'https://www.example.net/support.php'
	],
	[	
		'title' => 'Выйти',
		'sort' => 6,
		'path' => 'https://www.example.net/exit.php'
	]
];
foreach ($menuArr as $elem) {
	foreach ($elem as $key => $value) {
		echo $key . ' => ' . $value . "\n";
	}
echo "\n";
}
$key = 'sort';
$sort = SORT_DESC;
usort($menuArr, function($a, $b) use ($key, $sort) {
	return ($sort == SORT_DESC) ? ($b[$key] <=> $a[$key]) : ($a[$key] <=> $b[$key]);
}
);
echo "\tМАССИВ ПОСЛЕ СОРТИРОВКИ\n\n";
foreach ($menuArr as $elem) {
	foreach ($elem as $key => $value) {
		echo $key . ' => ' . $value . "\n";
	}
echo "\n";
}

?>
</pre>