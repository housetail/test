<?php
$datetime = '2013-02-04' . ' ' . '20:00';
$s_time_s = date('H:i', strtotime($datetime));
$first_book_time = date("Y-m-d H:i", time() + 60 * 60);//最小购票时间
var_dump($datetime);
var_dump($first_book_time);
var_dump(($datetime >= $first_book_time));
