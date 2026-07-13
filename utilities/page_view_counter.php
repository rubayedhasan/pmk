<?php
$counter_file = "counter.txt";

// Check if the counter file exists. If not, create it with 0.
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, "0");
}

// Open the file for reading and writing ('r+')
$file = fopen($counter_file, "r+");

// Lock the file so multiple simultaneous visitors don't corrupt the data
if (flock($file, LOCK_EX)) {
    $count = intval(fread($file, filesize($counter_file))) + 1;

    // Truncate the file and rewrite the new count
    ftruncate($file, 0);
    rewind($file);
    fwrite($file, $count);

    // Release the lock
    flock($file, LOCK_UN);
} else {
    // If the file is locked by another process, just read the current value safely
    $count = intval(file_get_contents($counter_file));
}

fclose($file);
