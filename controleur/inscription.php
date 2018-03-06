<?php

require '../model/inscription.php';

if (isset($_POST["submit"])) {
    
    $username = $_POST['pseudo'];
    $userpwd = $_POST['motdepasse'];
    
    inscriptionTasks($username, $userpwd);
}

require '../view/inscription.php';