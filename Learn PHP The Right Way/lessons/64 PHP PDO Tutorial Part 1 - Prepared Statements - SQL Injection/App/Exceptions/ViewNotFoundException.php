<?php

namespace App\Exception;

class ViewNotFoundException extends \Exception
{
    protected $message = 'View file not founded!'; 
}