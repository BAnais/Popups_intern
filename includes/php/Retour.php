<?php
include ('../includes/html/sub_popup_Exp_Ret.html');
 ?>

<div class="row">
  <div class="col-sm-3 contentRow">
    <label>Matériel Connu:</label>
  </div>
  <div class="col-sm-6 contentRow">
    <input type="radio" name="Connu" value="yes" id="ConnuYes" data-display="block" data-divId="numSerieRow" data-divname="contentNumSerie">
    <label for="ConnuYes"required>Oui</label>
    <input type="radio" name="Connu" value="no" id="ConnuNo" data-display="none" data-divId="numSerieRow">
    <label for="ConnuNo"required>No</label>
  </div>
</div>
<div class="row" id="numSerieRow">
  <div class="col-sm-3">
    <label>Numéro de série : </label>
  </div>
  <div class="col-sm-6" >
    <input type="text" name="numSerie" placeholder="affichage bdd"> <!-- si inconnu dans bdd alors afficher "inconnu"-->
  </div>
</div>
<?php
include 'sub_popup.php';
 ?>
