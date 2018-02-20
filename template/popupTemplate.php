<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="../src/script.js" charset="utf-8"></script>
  <script
    src="http://code.jquery.com/jquery-3.3.1.js”></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
