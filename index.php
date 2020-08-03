<?php 
var_dump($_FILES);
    if(!empty($_FILES)){
        $file_name = $_FILES ['fichier']['name'];
        var_dump($file_name);
        $file_type = $_FILES ['fichier']['type'];
        var_dump($file_type);
        // afficher l'extention du fichier 
        $file_extention = strchr($file_name,".");
        var_dump($file_extention);
    }
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
    <p>nom : <?= $file_name ?></p>
    <p>type : <?= $file_type ?></p>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichier"> <br>
        <input type="submit" value="envoyer le fichier">
    </form>
</body>
</html>