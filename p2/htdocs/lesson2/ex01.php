<pre>
<?php
$someArr = ['1234567891123456789', 'qwertyuiopqwertyuio', 'asdfghjkl;asdfghjk', 'zxcvbnm,zxcvbnm,zxcvbnm', 'hello world', 'why not', 'wtf'];
function cutStr(&$str, $maxLen = 12)
{
	if (strlen($str) > $maxLen) {
		$str = substr($str, 0, $maxLen) . '...';
	}
}

foreach ($someArr as $string) {
	cutStr($string);
	echo $string . "\n";
}
?>
</pre>