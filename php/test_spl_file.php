<?php
$file = new SplFileObject(__FILE__);
foreach ($file as $line_num => $line) {
    echo "Line $line_num is $line";
}
?>
