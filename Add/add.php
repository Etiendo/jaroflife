<?php

//lien vers la base de données

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

if (isset($_POST["submit"])) {
    
    try {
        $sql = 'INSERT INTO Tache (tacheid, labeltache, description) VALUES (:numtache, :nomtache, :dotache)';
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':numtache', $_POST['id']);
        $statement->bindParam(':nomtache', $_POST['nom']);
        $statement->bindParam(':dotache', $_POST['descriptiontache']);
        
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
?>

