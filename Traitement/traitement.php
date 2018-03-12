<?php
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try {
  $bdd = new PDO($dsn, $username, $password, $options);
} catch (Exception $e) {
  die('Erreur : '.$e->getMessage());
}


foreach ($_POST as $key => $value) {

  echo $key;
  echo "  :  ";
  echo $value;
  echo "      ";
  $_POST[$key]=filter_var($_POST[$key], FILTER_SANITIZE_STRING);
  //echo 'apres sanitize : '.$_POST[$key];
}
$prixConfig="0";
$StockSN1="22222222";
$CustomerId= "fr300000013";
$stockId = "3000";
$operator="anais";

if($_POST['BonTransporteur']=="yes"){
  $isBonTransporteur ="1";
}else if ($_POST['BonTransporteur']=="no"){
  $isBonTransporteur ="0";
}

switch ($_POST['TypeTraitement']) {
  case 'Expedition':
  $typeTraitement="1";
  if($_POST['Configure']=="yes"){
    $prixConfig = "20"; //requete dans la table associée
  }else if($_POST['Configure']=="no"){
    $prixConfig = "0";
  }
    break;
  case 'Retour':
    $typeTraitement="2";
    if(($_POST['Connu'] == "yes")){
      $numSerie = $StockSN1; //recupère numSerie bdd
    }else if ($_POST['Connu']=="no"){
      $numSerie = $_POST['NumSerie']; //recupère inconnu dans le html
    }
    break;
    case 'SAV':
      $typeTraitement="3";
      break;

  default:
    break;
}


$req= $bdd->prepare('INSERT INTO packagemanagement(
  VEticket,
  nbColis,
  prixTransporteur,
  numDevis,
  nameTransporteur,
  isBonTransporteur,
  numSuivi,
  dateEnvoi,
  dateLivraison,
  horaireDebut,
  horaireFin,
  raison,
  langue,
  mailCC,
  etat,
  fkTypeTraitement,
  fkSTticket,
  fkStockId,
  fkprixConfiguration,
  fkStockSN1,
  fkCustomerId,
  fkOperator
)

VALUES(
  :VEticket,
  :nbColis,
  :prixTransporteur,
  :numDevis,
  :nameTransporteur,
  :isBonTransporteur,
  :numSuivi,
  :dateEnvoi,
  :dateLivraison,
  :horaireDebut,
  :horaireFin,
  :raison,
  :langue,
  :mailCC,
  :etat,
  :fkTypeTraitement,
  :fkSTticket,
  :fkStockId,
  :fkprixConfiguration,
  :fkStockSN1,
  :fkCustomerId,
  :fkOperator)'
);


//$req = $bdd->prepare('INSERT INTO packagemanagement(VEticket) VALUES (:VEticket)');
$req->execute(array(
  ':VEticket' => $_POST['VeNum'], // numero ticket stock
  ':nbColis' =>  $_POST['NbColis'],
  ':prixTransporteur' => $_POST['PrixTransporteur'],
  ':numDevis' => $_POST['NumDevis'], //numero de devis associé au deploiement
  ':nameTransporteur' =>  $_POST['TransporteurName'],
  ':isBonTransporteur' =>  $isBonTransporteur,
  ':numSuivi' => $_POST['NumSuivi'],
  ':dateEnvoi' =>  $_POST['DateEnvoi'],
  ':dateLivraison' =>  $_POST['DateLivraison'],
  ':horaireDebut' =>  $_POST['HoraireDeb'],
  ':horaireFin' => $_POST['HoraireFin'],
  ':raison' => $_POST['Raison'],
  ':langue' => $_POST['Langue'],
  ':mailCC' => $_POST['MailCC'],
  ':etat' => '1';
  ':fkTypeTraitement' => $typeTraitement,//id type traitement
  ':fkSTticket' => $_POST['STticket'], //numero ticket stock
  ':fkStockId' =>  $stockId, //id stock du matos
  ':fkprixConfiguration' => $prixConfig, //prix de configuration du matos
  ':fkStockSN1' => $numSerie,//numero de serie
  ':fkCustomerId' => $CustomerId, // id du customer
  ':fkOperator' => $operator//nom operteur*/
));


?>
