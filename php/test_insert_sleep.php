<?php
$conn = mysql_connect('10.54.40.21', 'root', 'root007', 'true');
mysql_select_db('test', $conn);

$query = 'INSERT INTO test_table VALUES ()';
$result = mysql_query($query, $conn);

sleep(10);

/*$id1 = mysql_insert_id();
echo "mysql_insert_id : {$id1}\n";*/

$query = 'SELECT LAST_INSERT_ID()';
$result = mysql_query($query, $conn);
$row = mysql_fetch_assoc($result);
print_r($row);

mysql_close($conn);

