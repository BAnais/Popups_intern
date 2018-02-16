<html>
<head>
  <meta charset="utf-8">
  <script src="../js/popupS.js" charset="utf-8"></script>
  <script
  src="http://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">

    <div class="row">
      <div class="col-lg-4">
        <label>Envoi Groupé : </label>
      </div>
      <div class="col-lg-8">
      <input type="radio" name="yes" value="yes" id="EnvGroupYes">
      <label for="EnvGroupYes">Oui</label>
      <input type="radio" name="no" value="no" id="EnvGroupNo">
      <label for="EnvGroupNo">Non</label>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <label>Nombre de colis :</label>
      </div>
      <div class="col-lg-8">
        <input type="number" name="nbColis" placeholder="XXX" min="2" max="10">
      </div>
    </div>
  </div>
</body>
</html>
