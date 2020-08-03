<?php 
require_once 'include/upload.php';
require_once 'include/connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload de fichier pdf </title>
</head>
<body>
    <h1>Uploader un fichier pdf </h1>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichier"> <br>
        <input type="submit" value="envoyer le fichier">
    </form>

    <h1>Fichiers enregistrés </h1>
    <?php 
    $q = "SELECT * FROM files";
    $req = $db->prepare($q);
    $req->execute();
    var_dump($req->fetchAll());

    ?>
</body>
</html>