<?php
function hit($range, $count) {
	$seedarray = microtime();
	$seedstr = explode(" ", $seedarray, 5);
	$seed = $seedstr[0] * 1000000;
	srand($seed);
	$random = rand(0, $range);
	$unit = intval($range/$count);
	return ($random % $unit == 0);
}

function hit_v2($probability) {
	$probability = floatval($probability);
	if ($probability >= 1) {
		return true;
	}
	$range = pow(10, strlen($probability) - 2);
	$count = $probability * $range;
	$seedarray = microtime();
	$seedstr = explode(" ", $seedarray, 5);
	$seed = $seedstr[0] * 1000000;
	srand($seed);
	$random = rand(0, $range);
	return $random < $count;
}



/*$range = 1000;
$count = 10;

$total = 0;
$hit = 0;
while($total++ < 10000) {
	$hit += hit($range, $count);
}
echo $hit/$total;*/

$total = 0;
$hit = 0;
while($total++ < 100000) {
	$hit += hit_v2($argv[1]);
}
echo $hit/$total;


