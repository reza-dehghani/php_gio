<?php

require 'file.php'; //stop script if removed 

ob_start();

include 'file.php';

$nav = ob_get_clean();

// $nav = str_replace() change a word in string and so on!

echo $nav;