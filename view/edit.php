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
        <!-- on récupère l'id de la page view/browse.php-->
    <form action="../model/edit.php?id=<?php echo $_GET['id']; ?>" method="post">
        <p>Nouveau nom de tâche <input type="text" name="newnom" /></p>
        <p>Nouvelle description <input type="text" name="newdescriptiontache" /></p>
        <p><input type="submit" value="OK" name="submit"></p>
    </form>
    
     <a href="../index/browse.php">Retour à l'index</a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
