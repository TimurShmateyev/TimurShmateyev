<?php
// Generate the new content
$content = str_replace(
    '<!-- posts --><!-- /posts -->',
    '<!-- posts -->hi1<!-- /posts -->',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);