<?php

//lien vers la base de données

require '../config.php';

try
{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
      echo 'Connexion échouée : ' . $e->getMessage();   
}


if (isset($_POST["submit"])) {
    
    $nom = $_POST['nom'];
    
    try {
        $sql = "DELETE FROM Tache WHERE labeltache = '$nom'";
        
         $statement = $pdo->prepare($sql) ;
        if ($statement->execute() === TRUE) {
            echo "Tâche supprimée !";
        } else {
            echo "Suppression échouée";
        }
        
    }
        
        
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
}

