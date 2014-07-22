<?php
$value = 65535;
$result = pack('n', $value);
for ($i = 0; $i < strlen($result); $i++) {
	echo ord($result[$i]) . PHP_EOL;
}