<?php

require '../model/add.php';

if (isset($_POST["submit"])) {
    
    session_start();
    
    $nom = $_POST['nom'];
    $description = $_POST['descriptiontache'];
    $user_id = $_SESSION['userid'];
    
    addTasks($nom, $description, $user_id);
}

require '../view/add.php';