<?php

require '../model/edit.php';

// id récupéré de edit/view.php. A déclarer avant le if car contrairement aux autres fonctions, if accepte les variables définies en dehors de ses accolades
$id = $_GET["id"]; // équivalent à $id = $_GET[<?php echo $row['tacheid']]

if (isset($_POST["submit"])) {
    $nom = $_POST['newnom'];
    $description = $_POST['newdescriptiontache'];

    editTasks($nom, $description, $id);
}


require '../view/edit.php';
