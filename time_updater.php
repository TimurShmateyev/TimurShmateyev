<?php

$current_timestamp = time();
$start_timestamp = 1579243800;

$seconds = $current_timestamp - $start_timestamp;
$year = 365*24*3600; // Seconds in a year
$month = 30*24*3600; // Seconds in a month

$years = floor($seconds / $year);
$months = floor(($seconds % $year) / $month);

$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    '<!-- posts -->'.strval($years).' years and '.strval($months).' months.'.'<!-- /posts -->',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);
?>
