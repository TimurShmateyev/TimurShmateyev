<?php

$current_timestamp = time();
$start_timestamp = 1579243800;

$diff = $current_timestamp - $start_timestamp;

$years = ($diff/31536000) - ($diff%31536000)
$months = ($diff - ($years*31536000))/2592000 - ($diff - ($years*31536000))%2592000

$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    '<!-- posts -->'.str($years).' years and '.str($months).' months.'.'<!-- /posts -->',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);
?>
