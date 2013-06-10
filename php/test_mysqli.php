<?php
$memory = array();
$memory[0] = memory_get_peak_usage()/1024/1024;

$limit = intval($argv[1]) ? intval($argv[1]) : 1000;
$sql = "SELECT * FROM unidb_CollegeMajorScore_1 limit {$limit}";
$mysqli = new mysqli('10.210.136.100', 'root', 'root007', 'examedu');
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset('latin1');
$result = $mysqli->query($sql, MYSQLI_USE_RESULT);

//while ($data = $result->fetch_assoc());
$data = array();
while ($data[] = $result->fetch_assoc());

$result->close();
$mysqli->close();

$memory[1] = memory_get_peak_usage()/1024/1024;

$file = 'data.txt';
$cmd = "mysql -h 10.210.136.100 -P 3306 -u root -proot007 -D examedu -e '{$sql}' > {$file}";
system($cmd);
clearstatcache();
$filesize = filesize($file);
$memory[2] = $filesize/1024/1024;
$memory[3] = ($memory[1] - $memory[0])/$memory[2];

var_dump($memory);
