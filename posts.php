<?php
date_default_timezone_set('GMT+5');
$curentTimestamp = time();
$startTimestamp = '1577836800';
settype($curentTimestamp, 'integer');
settype($startTimestamp, 'integer');
$diffense = $curentTimestamp - $startTimestamp;
settype($diffense, 'string');
$date = date('Y-m-d H:i', $diffense);
$content = $date;

// Overwrite the file
file_put_contents('README.md', $content);
?>
