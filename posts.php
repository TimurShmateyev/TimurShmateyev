<?php
date_default_timezone_set('GMT+5');
$curentTimestamp = strtotime('-1 month');
$startTimestamp = '1614556800';
settype($curentTimestamp, 'integer');
settype($startTimestamp, 'integer');
$diffense = ($curentTimestamp - $startTimestamp);
settype($diffense, 'string');
$date = date('m-d H:i', $diffense);
$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    '<bold><!-- posts -->'.$date.'<!-- /posts --></bold>',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);
?>
