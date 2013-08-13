<?php
/*preg_match("/(\w+)\.php/", 'authbookinfo.php', $matches);
print_r($matches);*/

/*preg_match("/\w+/", 'aries', $matches);
var_dump($matches);*/

preg_match_all("/.*/", 'aries', $matches);
var_dump($matches);
