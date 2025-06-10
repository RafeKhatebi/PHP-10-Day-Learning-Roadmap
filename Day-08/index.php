<?php
//Opening a file
// $file = fopen("files/test.txt", "w");
// if ($file) {
//     echo "File opened successfully.<br>";

//     fclose($file);
// } else {
//     echo "Failed to open the file.<br>";
// }

//Reading a file
// $file    = fopen("files/test.txt", "r+");
// $content = fread($file, filesize("files/test.txt"));
// fclose($file);
// echo "File content: $content<br>";

//Writing to a file
$file = fopen("files/test.txt", "a");
fwrite($file, "Hello, world!");
fclose($file);
echo "File written successfully.<br> <br>";

//Reading the file again to see the changes char by char
$file = fopen("files/test.txt", "r");
if ($file) {
    while (($char = fgets($file)) !== false) {
        echo $char;
    }
    fclose($file);

} else {
    echo "Error opening the file.";
}

// Reading the file again to see the changes line by line
$file = fopen("files/test.txt", "r");
if ($file) {
    while (! feof($file)) {
        $line = fgets($file);
        echo $line;
    }
    fclose($file);
} else {
    echo "Error opening the file.";
}

//Working with CSV files
$data = [
    ["ID", "Name", "Age", "Email", "Phone"],
    ["S41001", "Ali", "20", "ali@example.com", "0728789987"],
    ["S41002", "Ahmed", "21", "ahmed@example.com", "0728789987"],
    ["S41003", "Mohamed", "22", "mohamed@example.com", "0728789987"],
    ["S41004", "Shams", "28", "hassan@example.com", "0728789"],
    ["S41005", "Hassan", "28", "hassan@example.com", "0728789"]];
$csvFile = fopen("files/data.csv", "w");
if ($csvFile === false) {
    die("Error opening the file.");
}
foreach ($data as $row) {
    fputcsv($csvFile, $row);
}
fclose($csvFile);
echo "CSV file created successfully.<br>";

// Reading the CSV file
$csvFile = fopen("files/data.csv", "r");
if ($csvFile === false) {
    die("Error opening the file.");
}
while (($row = fgetcsv
    ($csvFile)) !== false) {
    echo implode(", ", $row) . "<br>";
}

// High level file functions
$lines = file("files/data.csv", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
print_r($lines);

//using file_get_contents
$content = file_get_contents("files/data.csv");
echo $content;
echo "<br><br>";

$content_02 = file_get_contents("files/test.txt");
echo $content_02;
echo "<br><br>";
//using file_put_contents
file_put_contents("files/data.csv", "s412003,karim,34,karimi@gmail.com,078998789", FILE_APPEND);

//Checking if a file exists
if (file_exists("files/data.csv")) {
    echo "File exists.<br>";
} else {
    echo "File does not exist.<br>";
}
//is directory
$path = "file0s";
if (is_dir($path)) {
    echo "It is a directory.<br>";
} else {
    echo "It is not a directory.<br>";
}

//is file
$path = "files/data.csv";
if (is_file($path)) {
    echo "It is a file.<br>";
} else {
    echo "It is not a file.<br>";
}
//mkdir
$directory = "files/mydirectory";
if (mkdir($directory)) {
    echo "Directory created successfully.<br>";
} else {
    echo "Failed to create directory.<br>";
}

//rmdir
$directory = "files/mydirectory";
if (rmdir($directory)) {
    echo "Directory removed successfully.<br>";
} else {
    echo "Failed to remove directory.<br>";
}
