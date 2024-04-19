<?php
$content = preg_replace(
    '#TIME#s',
    'Some time',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);
?>
