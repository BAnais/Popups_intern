<?php
$typeCategorie=$_GET['troublesCode2'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./modal/src/style.css" />
  <link rel="stylesheet" href="./modal/src/libs/bootstrap/bootstrap_lib.css">
  <link href="./modal/src/libs/jquery/jquery_ui.css" rel="stylesheet" type="text/css" />
  <script src="./modal/src/libs/jquery/jquery_lib.js"></script>
  <script src="./modal/src/libs/jquery/jquery_ui.js"></script>
  <script src="./modal/src/libs/bootstrap/bootstrap_lib.js"></script>
  <script src="./modal/src/script.js" charset="utf-8"></script>
  <title><?php echo $typeCategorie ;?></title>
</head>
<body>

<div class="container">
  <h2 ><?php echo $typeCategorie ;?></h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Open</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="titleCategorie"><?php echo $typeCategorie ;?></h4>
        </div>
        <div class="modal-body" >
          <form class="form-horizontal ajax"  action="" >
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
            include ('./modal/includes/php/'.$typeCategorie.'.php');
            ?>
            <div class="row">
              <div class="col-xs-4 col-xs-offset-5 ">
                  <input class="btn-primary" type="submit" name="btnSend" value="Ok">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
