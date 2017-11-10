<?php

//lien vers la base de données

function addTasks($nom, $description, $userid) {

require '../config.php';

try
{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'Connexion échouée : ' . $e->getMessage();   
}
    
    try {
        $sql = 'INSERT INTO Tache (labeltache, description, user_id) VALUES (:nomtache, :dotache, :userid)';
        $statement = $pdo->prepare($sql);
        
        $statement->bindParam(':nomtache', $nom);
        $statement->bindParam(':dotache', $description);
        $statement->bindParam(':userid', $userid);
        
            if ($statement->execute() === TRUE) {  
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

