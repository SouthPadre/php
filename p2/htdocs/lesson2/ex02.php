<pre>
<?php
$i = 1;
$menuArr = [
	[	
		'title' => 'Главная',
		'sort' => $i++,
		'path' => 'https://www.example.net/main_menu.php'
	],
	[	
		'title' => 'О нас',
		'sort' => $i++,
		'path' => 'https://www.example.net/settings.php'
	],
	[	
		'title' => 'Контакты',
		'sort' => $i++,
		'path' => 'https://www.example.net/market.php'
	],
	[	
		'title' => 'Новости',
		'sort' => $i++,
		'path' => 'https://www.example.net/services.php'
	],
	[	
		'title' => 'Каталог',
		'sort' => $i++,
		'path' => 'https://www.example.net/contacts.php'
	]
];
//var_dump($menuArr);
function arraySort($array, $key = 'sort', $sort = SORT_ASC)
{
	if ($sort != SORT_DESC) {
		$sort = SORT_ASC;
	}
	$key = array_column($array, $key);
	array_multisort($key, $sort, $array, $sort);
	var_dump($array);
}
arraySort($menuArr);
arraySort($menuArr, 'sort', SORT_DESC);
?>
</pre>