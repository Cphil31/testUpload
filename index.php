<?php 
require_once 'include/header.php';
?>
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
    $q= $req->fetchAll();
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nom</th>
                            <th scope="col">editer</th>
                            <th scope="col">supprimer</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
        $nbr=0;
         foreach($q as $d) { 
             $nbr +=1;
             var_dump($d[0]);
             ?>
                        <tr>
                            <th scope="row"><?=$nbr?></th>
                            <td><?=$d[1]?></td>
                            <td><img src="img/ico_edit.svg" onclick="modifier(event,<?=$d[0]?>)"></td>
                            <td><img src="img/ico_cancel.svg" onclick="supprimer(event,<?=$d[0]?>)" ></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"
        integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous">
    </script>
</body>

</html>