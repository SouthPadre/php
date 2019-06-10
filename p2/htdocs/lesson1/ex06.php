<pre>
<?php
$studentCount = rand(0, 1000);
if ($studentCount % 100 > 10 && $studentCount % 100 < 15) {
	echo "на учебе $studentCount студентов";
} elseif ($studentCount % 10 == 1) {
	echo "на учебе $studentCount студент";
} elseif ($studentCount % 10 < 5 && $studentCount % 10 > 0) {
	echo "на учебе $studentCount студента";
} else {
	echo "на учебе $studentCount студентов";
}
?>
</pre>
