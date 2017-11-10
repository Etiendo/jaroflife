<?php

require '../model/add.php';

if (isset($_POST["submit"])) {
    
    $nom = $_POST['nom'];
    $description = $_POST['descriptiontache'];
    $userid = $_POST['userid'];
    
    addTasks($nom, $description, $userid);
}

require '../view/add.php';