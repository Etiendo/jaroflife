<?php

//lien vers la base de données

function addTasks($nom, $description, $user_id) {

    require '../config.php';

    try
    {
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage(); 
    }

    try {
        $sql = 'INSERT INTO Tache (labeltache, description, user_id) VALUES (:nomtache, :dotache, :user_id)';
        $statement = $pdo->prepare($sql);

        $statement->bindParam(':nomtache', $nom);
        $statement->bindParam(':dotache', $description);
        $statement->bindParam(':user_id', $user_id);

        if ($statement->execute()) {  
            echo "Tâche ajoutée !";
        } else {
            echo "Ajout non effectué";
        }

        return $statement;

    }      

    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();

    }

}

