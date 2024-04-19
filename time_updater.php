<?php

$current_timestamp = time();
$start_timestamp = 1579243800;

$diff = $current_timestamp - $start_timestamp;

$datetime_diff = date('Y-m-d', $diff);

$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    '#<!-- posts -->'.$datetime_diff.'<!-- /posts -->#s',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);
?>
