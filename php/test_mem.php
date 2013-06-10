<?php
ini_set('memory_limit', '1K');
$file = 'test_mem.log';
$fp = fopen($file, 'a+');
$str = "0123456789\n";
for ($i = 0; $i < 1024*1024; $i++) {
	fwrite($fp, $str);
}
fclose($fp);
