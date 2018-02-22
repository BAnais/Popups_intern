<?php
$typeCategorie=$_POST['type'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="../src/script.js" charset="utf-8"></script>
  <link rel="stylesheet" href="../src/style.css" />
  <title><?php echo $typeCategorie ;?></title>
</head>
<body>
  <div class="container-fluid">
    <form class="form-group" action="index.html" method="post">

      <?php

      include ('../includes/php/'.$typeCategorie.'.php');
      ?>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-5 ">
          <button class="btn-primary" type="button" name="btnSend">Ok</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
