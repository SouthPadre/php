<pre>
<?php
// непустая строка	
$someString = 'No empty string';
var_dump($someString);
// переменная типа булиан
$varBool = true;
var_dump($varBool);
// переменная типа int
$varInt = 10;
var_dump($varInt);
// переменная float
$varFloat = 3.14;
var_dump($varFloat);
/* неверные названия переменных 
 $312dasf
 $@sdfdsa
 $.dsa
*/
// три строки и различные конкатенации
$firstString = 'tonus';
$secondString = ' in ';
$thirdString = 'you';
var_dump($firstString . $secondString . $thirdString);
var_dump($thirdString . $secondString . $firstString);
?>
</pre>
