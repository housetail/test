<?php
$arr = array(
    array(
        array('a', 'b', 'c'),
    ),
    array(
        array(
            array('d', 'e'),
        ),
    ),
);

$iter = new RecursiveArrayIterator($arr);
$reIter = new RecursiveIteratorIterator($iter);
foreach ($reIter as $value) {
    echo $value . PHP_EOL;
}
