<?php

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {                
        try
        {
        $db = new PDO(
            'mysql:host=' .$_ENV['DB_HOST'] . ';dbname='
            . $_ENV['DB_DATABASE'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS'],[
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    }      catch (\PDOException $e){
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

        $email = 'reza1@gmail2.com';
        $name = 'reza Doe';
        $amount = 22;

    try {
        $db->beginTransaction();

        $newUserStmt = $db->prepare(
            'INSERT INTO users (email, full_name, is_active, created_at)
            VAlUES (?, ?, 1, now()'
        );
                  
        $newInvoiceStmt = $db->prepare(
            'INSERT INTO invoices (amount, user_id)
            VALUES (?, ?)');
     
            $newUserStmt->execute([$email, $name]);

            $userId = (int)$db->lastInsertId();

            // throw new \Exception('test');
            $newInvoiceStmt->execute([$amount, $userId]);
            
            $db->commit();
        }   catch(\Throwable $e)    {
            if($db->inTransaction())    {
            $db->rollBack();
            }
        }
        $fetchStmt = $db->prepare(
            'SELECT invoices.id AS invoice_id, amount, user_id,
            full_name
            FROM invoices
            INNER JOIN users ON user_id = users.id
            WHERE email = ?'
        );

        $fetchStmt->execute([$email]);

        return View::make('index', ['foo' => 'bar']);
}
}