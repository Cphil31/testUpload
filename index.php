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
        <input type="file" name="fichier">
        <input type="submit" value="envoyer le fichier">
    </form>
</body>
</html>