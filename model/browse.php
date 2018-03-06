<?php

session_start();

function getTasks()
{ // On définie une fonction qui sera égale à la variable $to_do_list dans le browse.php

    require '../config.php';

    // Définition des paramètres de la BDD

    try { //Création d'une instance PDO sous forme de fonction try
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    //Requête SQL
    $sql = 'SELECT * FROM Tache WHERE user_id = ?';
    $statement = $pdo->prepare($sql);

    if ($statement->execute(array($_SESSION['userid']))) {
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
