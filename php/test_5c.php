<?php
$db = mysql_connect('10.210.136.100', 'root' ,'root007');
mysql_select_db("test");
$a = "\x91\x5c";//"�\"��gbk����, ���ֽ�Ϊ5c, Ҳ����ascii�е�"\"

var_dump(addslashes($a));

var_dump(mysql_real_escape_string($a, $db));

mysql_query("set names gbk");
var_dump(mysql_real_escape_string($a, $db));

mysql_set_charset("gbk");
var_dump(mysql_real_escape_string($a, $db));
        
