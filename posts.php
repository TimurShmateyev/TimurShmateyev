<?php
date_default_timezone_set('GMT+5');
$curentTimestamp = time();
$startTimestamp = '1577836800';
settype($curentTimestamp, 'integer');
settype($startTimestamp, 'integer');
$diffense = $curentTimestamp - $startTimestamp;
settype($diffense, 'string');
$date = date('Y-m-d H:i', $diffense);
$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    $date,
    file_get_contents('README.md')
);

// Overwrite the file
//file_put_contents('README.md', $content);
?>
