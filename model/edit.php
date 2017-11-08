<?php

//lien vers la base de données

require '../config.php';

// on définit la variable $id avec l'id récupérée dans view/browse.php
$id = $_GET["id"];

try
{
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
      echo 'Connexion échouée : ' . $e->getMessage();   
}

if (isset($_POST["submit"])) {
    
    $newnom = $_POST['newnom'];
    $newdescriptiontache = $_POST['newdescriptiontache'];
    
    try {
        $sql = "UPDATE Tache SET labeltache = '$newnom', description = '$newdescriptiontache' WHERE tacheid = '$id'";
        
        $statement = $pdo->prepare($sql) ;
                 if ($statement->execute() === TRUE) {
            echo "Modification effectuée !";
        } else {
            echo "Modification non effectuée";
        }
        }
        
        
    catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
    
}

