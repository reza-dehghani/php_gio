<?php

//Error handling
//E_all show all error
error_reporting(E_ALL & E_WARNING);

trigger_error('ex error, E_user_eror)');

function errorHandler(int $size){}
error_log("You messed up!");