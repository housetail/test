<?php
$path = $argv[1];

$ite = new RecursiveDirectoryIterator($path);
$bytestotal = 0;
$nbfiles = 0;
foreach (new RecursiveIteratorIterator($ite) as $filename=>$cur) {
    $filesize = $cur->getSize();
    $bytestotal += $filesize;
    $nbfiles++;
    echo "$filename => $filesize =>" .  $cur->getType() . "\n";
}
$bytestotal = number_format($bytestotal);
echo "Total: $nbfiles files, $bytestotal bytes\n";
