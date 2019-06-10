<pre>
<?php
function returnTwice()
{
	$str = 'first string';
	$str1 = 'never';

	return ($str);
	return ($str1); 
}

function whithoutElse()
{
	if (func_get_args()) {
		echo 'if ';
	}
	return ('??');
}
echo returnTwice() . "\n";
echo whithoutElse(20);
?>
</pre>