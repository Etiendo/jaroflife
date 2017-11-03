<?php

function getTasks() { // On définie une fonction qui sera égal à la variable $to_do_list dans le index.php
$dsn = 'mysql:dbname=to_do_list;host=localhost';
$user = 'root';
$password = 'root';
// Définition des paramètres de la BDD

try
{ //Création d'une instance PDO sous forme de fonction try
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'Connexion échouée : ' . $e->getMessage();   
}
        //Requête SQL avec un retour si bien effectué
        $sql = 'SELECT * FROM Tache';
        $statement = $pdo->prepare($sql);
        
        if ($statement->execute()) {
            return $to_do_list = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
}