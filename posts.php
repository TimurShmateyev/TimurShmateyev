<?php

// Load Composer's autoload
require_once '/vendor/autoload.php';


// Generate the new content
$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    '<!-- posts -->hi1<!-- /posts -->',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);