<?php
include('../../sql/connect.php');
include('../../sql/request.php');
$idimg = id_useradd();
echo $idimg;

if (isset($_POST['fristname']) && $_POST['fristname'] != "") {
        $fristname = $_POST['fristname'];
    }
    else ($fristname = NULL);

    if (isset($_POST['surname']) && $_POST['surname'] != "") {
        $surname= $_POST['surname'];
        $name = $fristname . ' ' . $surname;
        $nameimg = strtolower($fristname . '_' . $surname .'_'.$idimg);
        echo $name;
    }
    else ($surname = NULL);

    if (isset($_POST['imail']) && $_POST['imail'] != "") {
        $imail = $_POST['imail'];
    }
    else ($imail = NULL);

    if (isset($_POST['password']) && $_POST['password'] != "") {
        $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
    }
    else ($password = NULL);

    //si valeur null = envoi echec
    

    if ($name == Null || $imail == Null || $password == Null) {
        echo "erreur variable".'<br>' ;
        echo $name .'<br>'. $imail.'<br>'.  $password;
        exit;
    }

    //Gestion Image 

    $imgupload = $nameimg.".jpeg"; // definition du nom dans la BDD
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_FILES["picture"]) && $_FILES["picture"]["error"] == 0){
            $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
            $filename = $_FILES["picture"]["name"];
            $filetype = $_FILES["picture"]["type"];
            $filesize = $_FILES["picture"]["size"];
    
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");
    
            $maxsize = 5 * 1024 * 1024;
            if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");
    
            if(in_array($filetype, $allowed)){
    
                    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../img/imgprofils/" . $imgupload);
                    echo "Votre fichier a été téléchargé avec succès.";
            } 
            else{
                echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
            }
        } 
        else{
            echo "Error: " . $_FILES["picture"]["error"];
        }
    }
    inscription($name,$imail,$password,$imgupload);

    // si valeur envoye redirection vers l'index
    header("Location:/index.php");
    exit;
?>