<?php 
        echo "<pre>";
        var_dump($_FILES);
        echo "<pre>";

        var_dump(pathinfo($_FILES['antern']['tmp_name']));

        $path = STORAGE . '/' . $_FILES['antern']['name'];
        echo $path;
        move_uploaded_file($_FILES['antern']['tmp_name'], $path);

        header('Location: /');