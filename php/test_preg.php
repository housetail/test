<?php
/*preg_match("/[\d\.]{7,15}/", $argv[1], $onlineipmatches);
var_dump($onlineipmatches);*/

if (0) {
$content = '{1}';
preg_match("/(\{1\})/", $content, $match);
var_dump($match);
}

if (0) {
$txt = <<<TXT
dfhuisd://
http://djodfijsdo
http://djodfijsdo
https://
sdfuifdsdf://
res://dsjfiods
TXT;
$pattern = "/^(?!(http|https|res))(.*)/m";
preg_match_all($pattern, $txt, $matches);
var_dump($matches);
}

$imageFile = 'abcd.hfudf';
$newImageFile = preg_replace("/\.(\w+)$/", '_thumb.${1}', $imageFile);
echo $newImageFile;
exit();
    

