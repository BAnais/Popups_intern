<?php
$STticket='ST111111100000';
$typeCategorie=$_REQUEST['type'];
$customerId='fr31300003';
$operatorTicket='stagiaire';//pb de recupération var vide
$stockId='3366';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../src/style.css" />
  <link rel="stylesheet" href="../src/libs/bootstrap/bootstrap_lib.css">
  <link href="../src/libs/jquery/jquery_ui.css" rel="stylesheet" type="text/css" />
  <script src="../src/libs/jquery/jquery_lib.js"></script>
  <script src="../src/libs/jquery/jquery_ui.js"></script>
  <script src="../src/libs/bootstrap/bootstrap_lib.js"></script>
  <script src="../src/script.js" charset="utf-8"></script>
  <title><?php echo $typeCategorie ;?></title>
</head>
<body>

  <div class="container">
    <h2 ><?php echo $typeCategorie ;?></h2>
    <form class="form-horizontal send"  action="../Traitement/traitement.php" method="POST" >
      <div class="hidden">
        <input type="hidden" name="STticket" value="<?php echo $STticket ?>">
        <input type="hidden" name="customerId" value="<?php echo $customerId ?>">
        <input type="hidden" name="userId" value="<?php echo $operatorTicket ?>">
        <input type="hidden" name="stockId" value="<?php echo $stockId ?>">
        <input type="hidden" name="TypeTraitement" value="<?php echo $typeCategorie ?>">
      </div>
      <div class="row">
        <div class="col-xs-3">
          <label>Association Ticket VE : </label>
        </div>

        <div class="col-xs-1">
          <input type="text" readonly name="VE" value="VE">
        </div>
        <div class="col-xs-6">
          <input type="text" name="assoVe" required >
        </div>
      </div>
      <?php
      include ('../includes/php/'.$typeCategorie.'.php');
      ?>
      <div class="row">
        <div class="col-xs-4 col-xs-offset-5 ">
          <input class="btn-primary" type="submit" name="btnSend" value="Ok">
        </div>
      </div>
    </form>
  </div>
</body>
</html>
