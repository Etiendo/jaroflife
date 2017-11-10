<?php

require '../model/edit.php';

// id récupéré de edit/view.php
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    
    $nom = $_POST['newnom'];
    $description = $_POST['newdescriptiontache'];

    editTasks($nom, $description, $id);
}


require '../view/edit.php';