<?php

require '../model/delete.php';

if (isset($_POST['submit'])) {
    
    $nom = $_POST['nom']; 

    deleteTasks($nom);
}

require '../view/delete.php';