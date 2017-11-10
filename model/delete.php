<?php

//lien vers la base de données

function deleteTasks($nom) {

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
        $sql = "DELETE FROM Tache WHERE labeltache = '$nom'";
        $statement = $pdo->prepare($sql);
        if ($statement->execute()) {
            
            echo "Tâche supprimée !";
        } else {
            echo "Suppression échouée";
        }
        
        return $statement;
        
    }
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
}
