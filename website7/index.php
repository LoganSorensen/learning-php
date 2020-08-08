<?php
    $path = '/dir1/myfile.php';
    $file = 'file1.txt';

    // Return filename
    // echo basename($path);    // myfile.php

    // Return filename without extension
    // echo basename($path, '.php');    // myfile

    // Return the directory name from the apth
    // echo dirname($path);     // /dir1

    // Check if file/folder exists, returns a 1 if true
    // echo file_exists($file);

    // Get absolute path
    // echo realpath($file);   // C:\xampp\htdocs\learning-php\website7\file1.txt

    // Checks to see if file exists
    // echo is_file($file);

    // Check if a file is writable
    // echo is_writable($file);

    // Check if a file is readable
    // echo is_readable($file);

    // Get the file size in bytes
    // echo filesize($file);

    // Create a directory
    // mkdir('testing');

    // Delete a directory if empty
    // rmdir('testing');

    // Copy file
    // echo copy('file1.txt', 'file2.txt');

    // Rename file
    // rename('file2.txt', 'myfile.txt');

    // Delete file
    // unlink('myfile.txt');

    // Write from file to string
    // echo file_get_contents($file);

    // Write string to file, returns file's new size
    // echo file_put_contents($file, 'Goodbye World');

    // Append string to file
    // $current = file_get_contents(($file));
    // $current .= ' Goodbye World';
    // file_put_contents($file, $current);

    // Open File For Reading
    // $handle = fopen($file, 'r');
    // $data = fread($handle, filesize($file));
    // echo $data;
    // fclose($handle);

    // Open file for writing
    $handle = fopen('file2.txt', 'w');
    $txt = "John Doe\n";
    fwrite($handle, $txt);
    $txt = "Steve Smith\n";
    fwrite($handle, $txt);
    fclose($handle);
?>