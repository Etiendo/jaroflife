<?php

//lien vers la base de données

function editTasks($nom, $description, $id) {

    require '../config.php';

    try
    {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();   
    }

    try {

        $sql = "UPDATE Tache SET labeltache = '$nom', description = '$description' WHERE tacheid = '$id'";

        $statement = $pdo->prepare($sql) ;
        if ($statement->execute() === TRUE) {

            echo "Modification effectuée !";
        } else {
            echo "Modification non effectuée";
        }

        return $statement;
    }


    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

}

