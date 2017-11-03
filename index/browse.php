<?php
//Inclusion php du fichier model.php
require '../model/browse.php';

$to_do_list = getTasks();

//Inclusion php du fichier view.php
require '../view/browse.php';