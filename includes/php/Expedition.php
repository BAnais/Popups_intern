<?php
include ('../includes/html/sub_popup_Exp_Ret.html');
 ?>
<div class="row">
    <div class="col-lg-4">
      <label>Configuré : </label>
    </div>
    <div class="col-lg-8">
      <input type="radio" name="Configuration" value="Yes" id="ConfigureYes">
      <label for="ConfigureYes">Oui</label>
      <input type="radio" name="Configuration" value="No" id="ConfigureNo">
      <label for="ConfigureNo">Non</label>
    </div>
  </div>
<div class="row">
  <div class="col-lg-4">
    <label>Prix Matériel : </label>
  </div>
  <div class="col-lg-8">
    <input type="text" name="prix" placeholder=" affichage bdd">
  </div>
</div>
<?php
include ('sub_popup.php');

 ?>
