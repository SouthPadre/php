<pre>
<?php
// создание массива из терх элементов
$someArray = ['first', 'second', 'third'];
// вывод второго элемента
var_dump($someArray[1]);
// создание ассоциативного массива
$arrayWhithKeys = ['COUNTRY' => 'USA', 'CITY' => 'New York', 'PLACE' => 'McAuto'];
// вывод второго элемента
var_dump($arrayWhithKeys['CITY']);
// двумерный массив 3х3
$twiceArray = [
	[1, 2, 3],
	[10, 20, 30],
	[100, 200, 300]
];
// сумма элементов 1х2, 3х3, 3х1
var_dump($twiceArray[0][1] + $twiceArray[2][2] + $twiceArray[2][0]);
// создание многомерного массива
$result1 = [
	'AUTHOR' => ['LAST_NAME' => 'example last name', 'MAIL' => 'example@mail.ru'],
	'BOOK' => ['BOOK_NAME' => 'example name', 'AUTHOR_MAIL' => 'example@mail.ru']
];
// вывод массива
var_dump($result1);
// новый массив в котором много авторов и книг
$result2 = [
	'AUTHORS' => [
		['LAST_NAME' => 'Turgenev', 'MAIL' => 'turg@mail.ru'],
		['LAST_NAME' => 'Puwkin', 'MAIL' => 'puwkin@mail.ru'],
		['LAST_NAME' => 'Remark', 'MAIL' => 'rema@mail.ru']
	],
	'BOOKS' => [
		['BOOK_NAME' => 'Onegin', 'AUTHOR_MAIL' => 'puwkin@mail.ru'],
		['BOOK_NAME' => 'Mumu', 'AUTHOR_MAIL' => 'turg@mail.ru'],
		['BOOK_NAME' => 'Fathers and children', 'AUTHOR_MAIL' => 'turg@mail.ru'],
		['BOOK_NAME' => 'Black obelisk', 'AUTHOR_MAIL' => 'rema@mail.ru'],
		['BOOK_NAME' => 'three friends', 'AUTHOR_MAIL' => 'rema@mail.ru']
	]
];
var_dump($result2);
// создать новый массив где ключи mail
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
		['BOOK_NAME' => 'three friends', 'AUTHOR_MAIL' => 'rema@mail.ru']
	]
];
var_dump($result3);
// вывести фио автора второй книги
// создадим переменную в которой хранится почта автора второй книги
$mailOfAuthorSecondBook = $result3['BOOKS'][1]['AUTHOR_MAIL'];
var_dump($result3['AUTHORS'][$mailOfAuthorSecondBook]['LAST_NAME']);
?>
</pre>