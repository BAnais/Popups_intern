<?php
include ('../includes/html/sub_popup_Exp_Ret.html');
?>
<div class="row">
  <div class="col-xs-3 ">
    <label>Configuré : </label>
  </div>
  <div class="col-xs-6 ">
    <input type="radio" name="Configuration" value="yes" id="ConfigureYes"  required>
    <label for="ConfigureYes">Oui</label>
    <input type="radio" name="Configuration" value="no" id="ConfigureNo"   required>
    <label for="ConfigureNo">Non</label>
  </div>
</div>
<!--
data-display="block" data-divId="pMatos"
data-display="none"  data-divId="pMatos"
<div class="row" id="pMatos">
<div class="col-xs-3" >
<label>Prix Matériel : </label>
</div>
<div class="col-xs-6">
<input type="text"  placeholder=" affichage bdd">
</div>
</div>-->
<?php
include ('sub_popup.php');

?>
