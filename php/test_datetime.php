<?php
$datetime = DateTime::createFromFormat('YmdH', '2013071701');
echo $datetime->format('Y-m-d');
