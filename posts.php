<?php
date_default_timezone_set('GMT+5');
$curentTimestamp = time();
$startTimestamp = '1614556800';
settype($curentTimestamp, 'integer');
settype($startTimestamp, 'integer');
$diffense = ($curentTimestamp - $startTimestamp);
settype($diffense, 'string');
$date = date('Y\Y m\m d\d H\h i\m\i\n', $diffense);
$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    '<!-- posts -->'.$date.'<!-- /posts -->',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);
?>
