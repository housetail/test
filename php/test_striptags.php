<?php
$url = 'http://news.sina.com.cn/c/2013-06-09/132327361362.shtml';
$url = 'http://news.sina.com.cn/c/2013-06-08/212327355737.shtml';
$html = file_get_contents($url);
$content = strip_tags($html);
echo $content;
