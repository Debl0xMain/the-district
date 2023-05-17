<?php
include_once('../../../src/sql/connect.php');
include_once('../../../src/sql/request.php');
$userid = 1;
$arr = [];


$arr[$selectpanier] = $value;

$selectpanier = 0;

do {

    foreach (cltpanier($selectpanier) as $panier);
    
    $prixcmd = $panier->prixcmd;

    array_push($arr,$prixcmd);

    $selectpanier++;

}while($selectpanier<cltpaniercount()); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../../../vendor/autoload.php';

$mail = new PHPMailer(true);

// On va utiliser le SMTP
$mail->isSMTP();

// On configure l'adresse du serveur SMTP
$mail->Host       = 'localhost';    

// On désactive l'authentification SMTP
$mail->SMTPAuth   = false;    

// On configure le port SMTP (MailHog)
$mail->Port       = 1025;                                   

// Expéditeur du mail - adresse mail + nom (facultatif)
$mail->setFrom('from@thedistrict.com', 'The District Company');

// Destinataire(s) - adresse et nom (facultatif)
$mail->addAddress("client1@example.com", "Mr Client1");
$mail->addAddress("client2@example.com"); 

//Adresse de reply (facultatif)
$mail->addReplyTo("reply@thedistrict.com", "Reply");

//CC & BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

// On précise si l'on veut envoyer un email sous format HTML 
$mail->isHTML(true);


// Sujet du mail
$mail->Subject = 'Panier';

// Corps du message
//send mail
$prixpaye = 'Vous avez paye ' .array_sum($arr). ' euro <br />';
$cmddetail = 'Votre commande : <br>';
$selectpanier = 0;
do {

    foreach (cltpanier($selectpanier) as $panier);
    
    $idcmdbdd = $panier->idcmd;
    $idplatcmd = $panier->idplat;
    $libellecmd = $panier->libelle; 
    $imagecmd = $panier->image;
    $prixcmd = $panier->prixcmd;
    $idusercmd = $panier->iduser;

    $cmddetailprint[] = $libellecmd.'  '. $prixcmd .' euro <br>';
    $selectpanier++;

}while($selectpanier<cltpaniercount());

$mail->Body = $prixpaye .$cmddetail. implode(" ", $cmddetailprint) ;


// On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if ($mail){
    try {
        $mail->send();
        echo 'Email envoyé avec succès';
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
        }
    }

    cmdvld($userid);
header("Location:/plats.php");
exit;

?>