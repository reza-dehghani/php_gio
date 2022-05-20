<?php 
/* Directory Name of the files */
$dir = "./";
/* Scan the files in the directory */
$files = scandir ($dir);
/* Loop through the files, read content of the files and put then OutFilename.txt */
$outputFile = "OutFilename.php";
sort($files, SORT_NUMERIC);
var_dump($files);    
foreach ($files as $file) {
    if ($file !== "." OR $file != "..") {
        file_put_contents($outputFile, "\nFILENAME:". $file. "\n", FILE_APPEND);
        file_put_contents ($outputFile, file_get_contents ($dir."/".$file),  FILE_APPEND);
    }
}

?>