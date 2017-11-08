<?php
// Inclusion php du fichier model.php
require '../model/browse.php';

$to_do_list = getTasks();

// Inclusion de la page membre lorsque l'on se connecte
require '../model/page_membre.php';

// Inclusion php du fichier view.php
require '../view/browse.php';