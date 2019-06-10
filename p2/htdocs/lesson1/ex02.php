<pre>
<?php
$title = "GRIIIIIIIOO";
$red = (bool)rand(0, 1);
$result3 = [
	'AUTHORS' => [
		'turg@mail.ru' => [
			'LAST_NAME' => 'Turgenev',
			'MAIL' => 'turg@mail.ru',
			'BIRTH' => '1818'
		],
		'puwkin@mail.ru' => [
			'LAST_NAME' => 'Puwkin',
			'MAIL' => 'puwkin@mail.ru',
			'BIRTH' => '1799'
		],
		'rema@mail.ru' => [
			'LAST_NAME' => 'Remark',
			'MAIL' => 'rema@mail.ru',
			'BIRTH' => '1898'
		]
	],
	'BOOKS' => [
		['BOOK_NAME' => 'Onegin', 'AUTHOR_MAIL' => 'puwkin@mail.ru'],
		['BOOK_NAME' => 'Mumu', 'AUTHOR_MAIL' => 'turg@mail.ru'],
		['BOOK_NAME' => 'Fathers and children', 'AUTHOR_MAIL' => 'turg@mail.ru'],
		['BOOK_NAME' => 'Black obelisk', 'AUTHOR_MAIL' => 'rema@mail.ru'],
		['BOOK_NAME' => 'Three friends', 'AUTHOR_MAIL' => 'rema@mail.ru']
	]
];
$i = 0;
foreach ($result3['AUTHORS'] as $author) {
	$i++;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<h1<?=$red ? 'class="red"' : ''?>><?=$title?></h1>
<!-- Выведите реально количество авторов -->
<div>Всего авторов на портале <?=$i?></div>
<?php
foreach ($result3['BOOKS'] as $book) {
?>
<!-- Выведите все книги -->
<p><?="Книга '" . $book['BOOK_NAME'] . "', ее написал " . $result3['AUTHORS'][$book['AUTHOR_MAIL']]['LAST_NAME'] . ' ' . $result3['AUTHORS'][$book['AUTHOR_MAIL']]['BIRTH'] . ' года рождения (' . $book['AUTHOR_MAIL'] . ')' . "\n"?></p>
<?php } ?>
</body>
</html>
</pre>
