<?php

//lien vers la base de données

$dsn = 'mysql:dbname=to_do_list;host=localhost';
$user = 'root';
$password = 'root';

// on définit la variable $id depuis l'"id" récupérée sur la page mode/edit.php
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

