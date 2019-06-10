<pre>
<?php
$month = rand(1, 12);
$dayOfWeek = rand(1, 7);
switch ($dayOfWeek) {
	case 1:
		echo "Monday";
		break;
	case 2:
		echo "Tuesday";
		break;
	case 3:
		echo "Wednesday";
		break;
	case 4:
		echo "Thursday";
		break;
	case 5:
		echo "Friday";
		break;
	case 6:
		echo "Saturday";
		break;
	case 7:
		echo "Sunday";
		break;
}
echo " ";
switch ($month) {
	case 1:
		echo "January";
		break;
	case 2:
		echo "Febrary";
		break;
	case 3:
		echo "March";
		break;
	case 4:
		echo "April";
		break;
	case 5:
		echo "May";
		break;
	case 6:
		echo "June";
		break;
	case 7:
		echo "July";
		break;
	case 8:
		echo "August";
		break;
	case 9:
		echo "September";
		break;
	case 10:
		echo "October";
		break;
	case 11:
		echo "November";
		break;
	case 12:
		echo "December";
		break;
}
?>
</pre>