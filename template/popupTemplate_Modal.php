<?php
$typeCategorie=$_POST['type'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../src/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../src/script.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
          <h4 id="titleCategorie"> <?php echo $typeCategorie ;?></h4>
        </div>
        <div class="modal-body" >
          <form class="form-horizontal ajax"  action="" >
            <div class="row">
              <div class="col-sm-3">
                <label>Association Ticket VE : </label>
              </div>

              <div class="col-xs-1">
                <input type="text" readonly name="VE" value="VE">
              </div>
              <div class="col-xs-5">
                <input type="text" name="assoVe" required >
              </div>
            </div>
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
        <div class="modal-footer">

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>
