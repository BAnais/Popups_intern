<?php
$typeCategorie=$_POST['type'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="../src/script.js" charset="utf-8"></script>
<!--  <link rel="stylesheet" href="../src/style.css" />-->
  <title><?php echo $typeCategorie ;?></title>
</head>
<body>
  <div class="container">
    <form class="form-horizontal" action="/Popups_intern/index.html" method="post">

      <?php

      include ('../includes/php/'.$typeCategorie.'.php');
      ?>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-5 ">
            <input class="btn-primary" type="submit" name="btnSend" value="Ok">
        </div>
      </div>
    </form>
  </div>
</body>
</html>
