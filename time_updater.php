<?php
$content = preg_replace(
    '#<!-- posts -->.*<!-- /posts -->#s',
    '#<!-- posts -->BRUH TIME<!-- /posts -->#s',
    file_get_contents('README.md')
);

// Overwrite the file
file_put_contents('README.md', $content);
?>
