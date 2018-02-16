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
      <div class="col-sm-4">
        <label>Transporteur : </label>
      </div>
      <div class="col-sm-8">
        <input  type="radio" name="transporteur" value="Transporteur1" id="transporteurChoice1">
        <label for="transporteurChoice1">Transporteur1</label>
        <input type="radio" name="transporteur" value="Transporteur2" id="transporteurChoice2">
        <label for="transporteurChoice2">Transporteur2</label>
      </div>
    </div>

    <div class="row" id="transporteurConditionYes">
      <div class="col-sm-4">
        <label>Bon T1 : </label>
      </div>
      <div class="col-sm-8">
        <input type="radio" name="bonT1" value="Oui" id="bonT1Choice1">
        <label for="bonUPSChoice1">Oui</label>
        <input type="radio" name="bonT2" value="Non" id="bonT2Choice2">
        <label for="bonUPSChoice2">Non</label>
      </div>
    </div>

    <div class="row" >
      <div class="col-sm-4">
        <label>N° Suivi</label>
      </div>
      <div class="col-sm-8">
        <input type="text" name="numSuivi" placeholder="123456789">
      </div>
    </div>
  </div>
</body>
</html>
<?php

?>
