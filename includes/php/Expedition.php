<?php
include ('../includes/html/sub_popup_Exp_Ret.html');
 ?>
<div class="row">
    <div class="col-sm-3">
      <label>Configuré : </label>
    </div>
    <div class="col-sm-6">
        <input type="radio" name="Configuration" value="Yes" id="ConfigureYes" data-display="block" data-divId="pMatos" data-divname="contentpMatos">
      <label for="ConfigureYes">Oui</label>
      <input type="radio" name="Configuration" value="No" id="ConfigureNo" data-display="none"  data-divId="pMatos" data-divname="contentpMatos">
      <label for="ConfigureNo">Non</label>
    </div>
  </div>
<div class="row" id="pMatos">
  <div class="col-sm-3" name="contentpMatos">
    <label>Prix Matériel : </label>
  </div>
  <div class="col-sm-6" name="contentpMatos">
    <input type="text"  placeholder=" affichage bdd">
  </div>
</div>
<?php
include ('sub_popup.php');

 ?>
