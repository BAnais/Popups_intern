<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="../src/script.js" charset="utf-8"></script>
  <title>Popup</title>
</head>
<body>
  <div class="container">
    <?php
    $typeCategorie=$_POST['type'];
    include ('../includes/php/'.$typeCategorie.'.php');
     ?>
  </div>
</body>
</html>
