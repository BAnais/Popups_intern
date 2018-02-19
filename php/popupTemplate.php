<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script src="../js/popupS.js" charset="utf-8"></script>
  <script
  src="http://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Popup</title>
</head>
<body>
  <div class="container">
    <?php
    $typeCategorie=$POST['type'];
    include ('./'.$typeCategorie.'.php');
     ?>
  </div>
</body>
</html>
