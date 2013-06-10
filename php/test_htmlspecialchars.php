<?php
$str = '高考志愿<img src=1 onerror=alert(1)>';
echo htmlspecialchars($str) . PHP_EOL;
echo htmlspecialchars($str, ENT_COMPAT) . PHP_EOL;
echo htmlspecialchars($str, ENT_QUOTES) . PHP_EOL;
echo htmlspecialchars($str, ENT_NOQUOTES) . PHP_EOL;
