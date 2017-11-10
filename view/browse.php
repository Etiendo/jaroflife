<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <title>To do-list</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-9">
                <h1 class="espace_perso">Ma to-do list</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-3"> </div>
            <div class="col-2">
                <p>Tâche</p>
            </div>
            <div class="col-2">
                <p>Description</p>
            </div>
            <div class="col-5"> </div>
        </div>
        <?php    
        // on affiche toutes la valeurs de $to_do_list (variable égale à la requête SELECT * FROM Tache dans la bdd) avec une boucle
        foreach ($to_do_list as $row) {
            ?>
        <div class="row">
            <div class="col-3"> </div>

            <div class="col-2">
                <p>
                    <?php echo $row['labeltache']; ?>
                </p>
            </div>
            <div class="col-4">
                <p>
                    <?php echo $row['description']; ?>
                </p>
            </div>
            <div class="col-1">
                <p>
                    <!-- on récupère l'id de la tâche à modifier spécifiée plus haut-->
                    <a href="../controleur/edit.php?id=<?php echo $row['tacheid']; ?>">Modifier</a>
                </p>
            </div>
            <div class="col-1">
                <p>
                    <a href="../controleur/delete.php">Supprimer</a>
                </p>
            </div>
            <div class="col-1"></div>
        </div>
        <?php 
        }
        ?>
        <div class="row">
            <div class="col-3"> </div>
            <div class="col-2">
                <p>
                    <a href="../controleur/add.php">Ajouter une tâche</a>
                </p>
            </div>
            <div class="col-7"> </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
