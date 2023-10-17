<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    // public function index(): View
    // {
    //     // we put it in try catch, and show error without info like user password
    //     try {
    //         // host = db - is the name of our docker container
    //         $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root');
    //         // $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root', [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);

    //         $query = 'SELECT * from users';

    //         // foreach($db->query($query)->fetchAll(PDO::FETCH_OBJ) as $user) {
    //         foreach($db->query($query) as $user) {
    //             echo '<pre>';
    //             var_dump($user);
    //             echo '</pre>';
    //         }

    //     } catch (\PDOException $e) {
    //         throw new \PDOException($e->getMessage(), $e->getCode());
    //     }

    //     return View::make('index', ['foo' => 'bar']);
    // }

    public function index(): View
    {
        // we put it in try catch, and show error without info like user password
        try {
            // host = db - is the name of our docker container
            $db = new PDO('mysql:host=db;dbname=my_db', 'root', 'root');


            $email = $_GET['email'];

            // this string is vulnerable for SQL injections.
            // $query = 'SELECT * from users where email ="' . $email . '"';

            // We can use placeholders
            // $query = 'SELECT * from users where email= ?';
            
            // but better to use named parameters
            $query = 'SELECT * from users where email= :email';  
                  
            $stmt = $db->prepare($query);
            // $stmt->execute();

            // this way:
            // $stmt->execute([':email'=>$email]);
            
            // or we can bind parameters:
            $stmt->bindValue(':email',$email);

            // bindParam take variable by reference, if we change $email before execute it will use updated value. And we can't hardcode value.
            // $stmt->bindParam(':email',$email);

            // $stmt->bindValue('isActive',$isActive, PDO::PARAM_BOOL);
            $stmt->execute();

            foreach($stmt->fetchAll() as $user) {
                echo '<pre>';
                var_dump($user);
                echo '</pre>';
            }

        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        return View::make('index', ['foo' => 'bar']);
    }


    public function upload()
    {
        // echo '<pre>';  var_dump($_FILES);  echo '</pre>';

        $filePath = STORAGE_PATH . DIRECTORY_SEPARATOR . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /');
        exit;

    }
}
