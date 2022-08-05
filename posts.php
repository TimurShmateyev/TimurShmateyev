<?php
date_default_timezone_set('Asia/Aqtau');
$curentTimestamp = time();
$startTimestamp = '1614556800';
settype($curentTimestamp, 'integer');
settype($startTimestamp, 'integer');
$diffense = ($curentTimestamp - $startTimestamp);
$date = date('Y\Y m\m d\d H\h i\m\i\n', $diffense);
$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    '<!-- posts -->'.$date.'<!-- /posts -->',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);
?>
