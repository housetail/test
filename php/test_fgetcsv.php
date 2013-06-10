<?php
$fp = fopen('test.csv', 'r');
while($values = fgetcsv($fp, null, ',', '"')) {
	var_dump(array_filter($values));
}
fclose($fp);
