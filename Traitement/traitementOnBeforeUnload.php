<?php
$json = json_decode(stripslashes($_REQUEST['json_name']));
echo $json->STticket;
echo $json->customerId;
echo $json->escalade;
echo $json->userIdSelect;
echo $json->etat;
?>
