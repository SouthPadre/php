<pre>
<?php
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
foreach ($result3['BOOKS'] as $book) {
	$bookName = $book['BOOK_NAME'];
	$authorMail = $book['AUTHOR_MAIL'];
	$authorName = $result3['AUTHORS'][$authorMail]['LAST_NAME'];
	$yearOfBirth = $result3['AUTHORS'][$authorMail]['BIRTH'];
	echo "Книга '" . $bookName . "', ее написал " . $authorName;
	echo ' ' . $yearOfBirth . ' года рождения (' . $authorMail . ')' . "\n";
}
echo "\n";
shuffle($result3['BOOKS']);
foreach ($result3['BOOKS'] as $book) {
	echo "Книга '" . $book['BOOK_NAME'] . "', ее написал " . $result3['AUTHORS'][$book['AUTHOR_MAIL']]['LAST_NAME'] . ' ' . $result3['AUTHORS'][$book['AUTHOR_MAIL']]['BIRTH'] . ' года рождения (' . $book['AUTHOR_MAIL'] . ')' . "\n";
}
?>
</pre>
