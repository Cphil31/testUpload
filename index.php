<?php 
var_dump($_FILES);
    if(!empty($_FILES)){
        $file_name = $_FILES ['fichier']['name'];
        var_dump($file_name);
        $file_type = $_FILES ['fichier']['type'];
        var_dump($file_type);

        // taille du fichier en octet 
        $file_size= $_FILES ['fichier']['size'];
        var_dump($file_size);

        // afficher l'extention du fichier 
        $file_extention = strchr($file_name,".");
        var_dump($file_extention);

        // on crée un tableau pour l'authaurisation de l'extention 
        $extention_valid = array('.pdf','.PDF');

        // on vérifie si l'extention fait partie du tableau authorisé 
        if(in_array($file_extention,$extention_valid)){
            // on vas l'envoyer a la detination voulue 
            
        }
        else{
            echo 'seuls les fichier pdf sont autorisées';
        }

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
    <p>taille : <?= $file_size ?> octets</p>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichier"> <br>
        <input type="submit" value="envoyer le fichier">
    </form>
</body>
</html>