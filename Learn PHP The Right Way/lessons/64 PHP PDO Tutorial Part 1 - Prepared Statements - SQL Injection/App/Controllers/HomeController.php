<?php

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        // phpinfo();
        
        try
        {
        $db = new PDO('mysql:host=localhost;dbname=my_db', 'root', '', [
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        // var_dump($db);
        $email = 'Jiza234@Doe.com';
        $name = 'Jiza Doe';
        $isActive = 1;
        $createdAt = date('Y-m-d H:m:i' ,strtotime('07/11/2022 2:05AM'));
        $updatedAt = date('Y-m-d H:m:i' ,strtotime('07/27/2022 6:05PM'));
        $query = 'INSERT INTO USERS (email, full_name, is_active, created_at, updated_at)
                  VAlUES (:email, :name, :active, :date1, :date2)';
                  
        $stmt = $db->prepare($query);

        // $stmt->execute(
        //     [
        //         'name' => $name,
        //         'email' => $email,
        //         'active' => $isActive,
        //         'date' => $createdAt,
        //     ]
        //     );
            
            //USING bind value

            $stmt->bindValue('name', $name);
            $stmt->bindValue('email', $email);
            $stmt->bindParam('active', $isActive, PDO::PARAM_BOOL);
            $stmt->bindValue('date1', $createdAt);
            $stmt->bindValue('date2', $updatedAt);

            $isActive = 0;
            $name = 'foo bar';

            $stmt->execute();

            $id = (int) $db->lastInsertId();

            $user = $db->query('SELECT * FROM users WHERE id = ' . $id)->fetch();
            echo '<pre>';
            var_dump($user);
            echo '</pre>';
        }
        catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), $e->getCode());
        }

        return View::make('index', ['foo' => 'bar']);
    }
}