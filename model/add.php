<?php

//lien vers la base de données

require '../config.php';

try
{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'Connexion échouée : ' . $e->getMessage();   
}

if (isset($_POST["submit"])) {
    
    try {
        $sql = 'INSERT INTO Tache (labeltache, description, user_id) VALUES (:nomtache, :dotache, :userid)';
        $statement = $pdo->prepare($sql);
        
        $statement->bindParam(':nomtache', $_POST['nom']);
        $statement->bindParam(':dotache', $_POST['descriptiontache']);
        $statement->bindParam(':userid', $_POST['userid']);
        
            if ($statement->execute() === TRUE) {
            echo "Tâche ajoutée !";
        } else {
            echo "Ajout non effectué";
        }
        
    }
        
        
        
        
        
        
 catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
     
}

}

