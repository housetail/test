<?php
$a = 0.6; // 不中奖的概率
$ret = pow($a, 7);
$ret = $ret * (pow($a, 3) + 10 * (1 - $a) * pow($a, 2) + 10 * 9 / 2 * pow(1 - $a, 2) * $a);
echo $ret;// 中将次数小于3的概率
