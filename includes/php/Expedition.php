<?php
include ('../includes/html/sub_popup_Exp_Ret.html');
 ?>
<div class="row">
    <div class="col-sm-3 ">
      <label>Configuré : </label>
    </div>
    <div class="col-sm-6 ">
        <input type="radio" name="Configuration" value="yes" id="ConfigureYes" data-display="block" data-divId="pMatos" required>
      <label for="ConfigureYes">Oui</label>
      <input type="radio" name="Configuration" value="no" id="ConfigureNo" data-display="none"  data-divId="pMatos" required>
      <label for="ConfigureNo">Non</label>
    </div>
  </div>
<div class="row" id="pMatos">
  <div class="col-sm-3" >
    <label>Prix Matériel : </label>
  </div>
  <div class="col-sm-6">
    <input type="text"  placeholder=" affichage bdd">
  </div>
</div>
<?php
include ('sub_popup.php');

 ?>
