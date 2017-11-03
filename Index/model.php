<?php

function getTasks() {
$dsn = 'mysql:dbname=to_do_list;host=localhost';
$user = 'root';
$password = 'root';

try
{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'Connexion échouée : ' . $e->getMessage();   
}

        $sql = 'SELECT * FROM Tache';
        $statement = $pdo->prepare($sql);
        
        if ($statement->execute()) {
            return $to_do_list = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
}