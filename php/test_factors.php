<?php
$num = intval($argv[1]);

$x = intval(ceil(sqrt($num)));
while ($x < $num)  {
    echo $x . PHP_EOL;
    $w = $x * $x - $num;
    $y = intval(sqrt($w));
    if ($w == $y * $y) {
        echo "{$x}  {$y}  {$num}";
        break;
    }
    $x++;
}
