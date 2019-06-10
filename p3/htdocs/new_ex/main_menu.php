<pre>
<?php
$i = 1;
$menuArr = [
	[	
		'title' => 'Main',
		'sort' => $i++,
		'path' => '/route/Main/'
	],
	[	
		'title' => 'Jobs',
		'sort' => $i++,
		'path' => '/route/Jobs/'
	],
	[	
		'title' => 'Contacts',
		'sort' => $i++,
		'path' => '/route/Contacts/'
	],
	[	
		'title' => 'News',
		'sort' => $i++,
		'path' => '/route/News/'
	],
	[	
		'title' => 'Catalog',
		'sort' => $i++,
		'path' => '/route/Catalog/'
	]
];
if (isset($_SESSION['autorize'])) {
	$menuArr[] = [
		'title' => 'Profile',
		'sort' => 0,
		'path' => '/route/Profile/'
	];
}
function arraySort(&$array, $sort = SORT_ASC, $key = 'sort')
{
	usort($array, function($a, $b) use ($key, $sort) {
	return ($sort == SORT_DESC) ? ($b[$key] <=> $a[$key]) : ($a[$key] <=> $b[$key]);
		}
	);
}
?>
</pre>