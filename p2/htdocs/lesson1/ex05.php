<pre>
<?php
$city1 = rand(0, 1000);
$city2 = rand(0, 1000);
$city1Radius = rand(10, 100);
$city2Radius = rand(10, 100);
$startCity1 = ($city1 - $city1Radius > 0)?$city1 - $city1Radius:0;
$startCity2 = ($city2 - $city2Radius > 0)?$city2 - $city2Radius:0;
$endCity1 = $city1 + $city1Radius;
$endCity2 = $city2 + $city1Radius;
echo "	Москва на $city1 км, радиусом $city1Radius км.\n";
echo "	Воронеж на $city2 км, радиусом $city2Radius км.\n";

for ($i = 1; $i < 11; $i++) {
	$carKm = rand(0, 1000);
	if ($carKm >= $startCity1 && $carKm <= $endCity1) {
		$palace = "по городу Москва";
		$speed = rand(1,70);
	} elseif ($carKm >= $startCity2 && $carKm <= $endCity2) {
		$palace = "по городу Воронеж";
		$speed = rand(1, 70);
	} else {
		$palace = "по трассе";
		$speed = rand(1, 90);
	}
	echo "Машина $i едет $palace на $carKm км, со скоростью $speed км\ч \n";
}
?>
</pre>
