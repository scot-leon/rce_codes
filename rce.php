<?php
// Ensure the script is executed with proper permissions
$file = '/etc/passwd';

// Check if the file exists
if (file_exists($file)) {
    // Read and display the contents of the file
    echo nl2br(file_get_contents($file));
} else {
    echo "File not found.";
}
?>
