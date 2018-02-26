<?php
$typeCategorie=$_POST['type'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../src/script.js" charset="utf-8"></script>
  <link rel="stylesheet" href="../src/style.css" />
    <title><?php echo $typeCategorie ;?></title>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
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
          <form class="form-horizontal" action="/Popups_intern/index.html" method="post">
            <?php
            include ('../includes/php/'.$typeCategorie.'.php');
            ?>
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
