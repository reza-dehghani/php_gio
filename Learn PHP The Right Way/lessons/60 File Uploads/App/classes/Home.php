<?php

namespace App\Classes;
define("STORAGE", __DIR__ . "/../upload");

class Home
{
    public function index(): string
    { 
        return 'Home<br/>' . '<form method="post" enctype="multipart/form-data" action="/upload"><input name="antern" type="file" ><button type="submit">سابمیت</button></form>';
    } 
    public function upload()
    {
        echo "<pre>";
        var_dump($_FILES);
        echo "<pre>";

        var_dump(pathinfo($_FILES['antern']['tmp_name']));

        $path = STORAGE . '/' . $_FILES['antern']['name'];
        echo $path;
        move_uploaded_file($_FILES['antern']['tmp_name'], $path);
    }
}