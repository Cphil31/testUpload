<?php
require_once 'connexion.php';
if(!empty($_FILES)){
    $file_name = $_FILES ['fichier']['name'];
   
    
    $file_type = $_FILES ['fichier']['type'];
    
    
    
    //destination du fichier qu'on envoie
    $file_tmp_name = $_FILES ['fichier']['tmp_name'];
    
    // taille du fichier en octet 
    $file_size= $_FILES ['fichier']['size'];
    
    // afficher l'extention du fichier 
    $file_extention = strchr($file_name,".");
    
    

    //repertoire de destination
    $file_dest = 'files/'.$file_name;
    
    // on crée un tableau pour l'authaurisation de l'extention 
    $extention_valid = array('.pdf','.PDF','.jpg','.jpeg','.jfif');
    
    // on vérifie si l'extention fait partie du tableau authorisé 
    if(in_array($file_extention,$extention_valid)){
        var_dump("Temp name = ".$file_tmp_name);
        var_dump($file_extention);
        // il faut vérifier si le fichier existe.
        //si le nom existe déja , proposer de le remplacer.

        $file_name = $_FILES ['fichier']['name'];

        if (isset($file_name)){
            var_dump("existe");
        }
        
            // on vas vérifier le fichier de destination du fichier qu'on envoie . 
            // on vas l'envoyer dans le dossier files .
            if(move_uploaded_file($file_tmp_name,$file_dest)){
                //requete pour envoyer a la base de données 
                $q = "INSERT INTO files (Null,name,file_url) VALUES(?,?,?)";
                $req = $db->prepare($q);
                $req->execute(array(Null,$file_name,$file_dest));
                echo 'fichier envoyé avec succes';
            }
            else{
                echo "le fichier n'as pas été envoyé";
            }
        
    }
    else{
        echo 'seuls les fichier pdf sont autorisées';
    }

}