<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <title>To do-list</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>

<body>

    <h1>Ma to-do list</h1>

    <table>
        <tr>
            <th>N°</th>
            <th>Tâche</th>
            <th>Description</th>
        </tr>
        <?php        
        foreach ($to_do_list as $row) {
            ?>
            <tr>
                <td>
                    <?php echo $row['tacheid']; ?>
                </td>
                <td>
                    <?php echo $row['labeltache']; ?>
                </td>
                <td>
                    <?php echo $row['description']; ?>
                </td>
                <td>
                    <a href="../Edit/edit.html.php">Modifier</a>
                </td>
                <td>
                    <a href="../Delete/delete.html.php">Supprimer</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>

    <a href="../Add/add.html.php">Ajouter une tâche</a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
