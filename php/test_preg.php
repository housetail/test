<?php
/*preg_match("/[\d\.]{7,15}/", $argv[1], $onlineipmatches);
var_dump($onlineipmatches);*/

$content = '{1}';
preg_match("/(\{1\})/", $content, $match);
var_dump($match);
