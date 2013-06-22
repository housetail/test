<?php

$list = array (
       array('a,aa', 'bbb', 'ccc', 'dddd'),
        array('123', '456', '789'),
         array('"aa,a"', '"bbb"')
      );

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

