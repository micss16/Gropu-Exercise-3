<?php
$filename = 'test.txt';

if (file_exists($filename)) {
    echo "File exists. Reading the file...\n";
    
    $content = file_get_contents($filename);
    echo "File Content:\n";
    echo $content;

    $lines = file($filename);
    echo "\nFile Content as an Array:\n";
    print_r($lines);
} else {
    echo "File does not exist. Creating the file...\n";

    $content = "testing testing";

    file_put_contents($filename, $content);
    echo "File created and content written successfully.\n";
}
?>