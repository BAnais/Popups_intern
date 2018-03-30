<?php

include("/home/wwwtest/www/secuspace/accesssql.inc");

//affichage de debug des posts
foreach ($_POST as $key => $value) {

  echo $key;
  echo "  :  ";
  echo $value;
  echo "     ; ";
  $_POST[$key]=filter_var($_POST[$key], FILTER_SANITIZE_STRING);
  //echo 'apres sanitize : '.$_POST[$key];
}

//mise en format US des dates soit YYY-MM-DD
$dateEnvoiD          = $_POST['dateEnvoi'];
$jourD               = substr($dateEnvoiD,0,2);
$moisD               = substr($dateEnvoiD,3,2);
$anneeD              = substr($dateEnvoiD,6,4);
$dateLivraisonF      = $_POST['dateLivraison'];
$jourF               = substr($dateLivraisonF,0,2);
$moisF               = substr($dateLivraisonF,3,2);
$anneeF              = substr($dateLivraisonF,6,4);
$HeureD              = $_POST['Dheure'];
$MinutesD            = $_POST['Dminutes'];
$Fheure              = $_POST['Fheure'];
$Fminutes            = $_POST['Fminutes'];
//recupération des posts
$AssoVe              = $_POST['assoVe'];
$ticketVE            = 'VE'.$AssoVe;
$nbColis             = $_POST['NbColis'];
$prixTransp          = $_POST['prixTransporteur'];
$numDevis            = $_POST['contentNumDevis'];
$TransName           = $_POST['transporteur'];
// $isBonTransporteur
$numSuivi            = $_POST['numSuivi'];
$dateD               = $anneeD.'-'.$moisD.'-'.$jourD;
$dateF               = $anneeF.'-'.$moisF.'-'.$jourF;
$horaireD            = $HeureD.':'.$MinutesD;
$horaireF            = $Fheure.':'.$Fminutes;
$raison              = $_POST['raisonEnvoi'];
$langue              = $_POST['langue'];
$mail                = $_POST['emailCC'];
$etat                = '1';
//$typeTraitement
$STticket            = $_POST['STticket'];
$stockId             = $_POST['stockId'];
$prixConfig          = "0";//req
//numSerie
$customerId          = $_POST['customerId'];
$operator            = $_POST['userId'];
//traduction en boolean de isBonTransporteur
if($_POST['isBonTransporteur']=="yes"){
  $isBonTransporteur =1;
}else if ($_POST['isBonTransporteur']=="no"){
  $isBonTransporteur =0;
}
//attribution des var propres a chaque type de traitement
//en fonction de ce dernier
switch ($_POST['TypeTraitement']) {
  case 'Expedition':
  $typeTraitement="1";
  $Configure        = $_POST['Configuration'];
  if($Configure=="yes"){
    $reqPrix = mysql_fetch_assoc(mysql_db_query("$database", "SELECT PrixHt FROM prixConfigStock p, ".$customerId."_stocks c, stockNMM s WHERE  '".$stockId."'= c.stockId AND s.stockNMMId = c.stockNMMId AND s.fkPrixConfigStock = p.id"));

    $prixConfig = $reqPrix['PrixHt']; //requete dans la table associée
  }else if($Configure=="no"){
    $prixConfig = "0";
  }
  break;

  case 'Retour':
  $typeTraitement="2";
  $numSerie        = $_POST['numSerie'];
  if($Connu == "yes"){
    $ReqStockSN1 = mysql_fetch_assoc(mysql_db_query("$database", "SELECT stockSN1 FROM ".$customerId."_stocks AS a INNER JOIN ".$customerId."tickets_stocks AS b ON a.".$stockId." = b.".$stockId));
    $numSerie = $ReqStockSN1; //recupère numSerie bdd
  }else if ($Connu=="no"){
    $numSerie = $numSerie; //recupère inconnu dans le html
  }
  break;

  case 'SAV':
  $typeTraitement="3";
  $reqPrix = mysql_fetch_assoc(mysql_db_query("$database", "SELECT PrixHt FROM prixConfigStock WHERE Description ='SAV'"));
  $prixConfig = $reqPrix['PrixHt'] ; // prix donné pour la config de tous matos SAV
  $SavExp    = $_POST['expedition'];
  break;

  default:
  break;
}

$req = mysql_fetch_assoc(mysql_db_query("$database","INSERT INTO packagemanagement (VEticket, nbColis, prixTransporteur, numDevis, nameTransporteur, isBonTransporteur, numSuivi, dateEnvoi, dateLivraison, horaireDebut, horaireFin, raison, langue, mailCC, etat, fkTypeTraitement, fkSTticket, fkStockId, fkprixConfiguration, fkStockSN1, fkCustomerId, fkOperator) VALUES ('".$ticketVE."', '".$nbColis."', '".$prixTransp."', '".$numDevis."', '".$TransName."', '".$isBonTransporteur."', '".$numSuivi."', '".$dateD."','".$dateF."', '".$horaireD."', '".$horaireF."', '".$raison."', '".$langue."', '".$mail."', '".$etat."', '".$typeTraitement."', '".$STticket."', '".$stockId."', '".$prixConfig."', '".$numSerie."', '".$customerId."', '".$operator."')"));


//echo json_encode('result '. $isBonTransporteur. "typeTrait " . $reqPrix);
?>
