
<div class="row">
  <div class="col-lg-2 contentRow">
    <label>Expédition : </label>
  </div>
  <div class="col-lg-8 contentRow">
    <input type="radio" name="expedition" value="oui" id="expYes" data-display="block" data-divId="savExpYesRow">
    <label for="expYes">Oui</label>
    <input type="radio" name="expedition" value="non" id="expNo" data-display="none" data-divId="savExpYesRow">
    <label for="expNo">Non</label>
  </div>
</div>
<div class="subpopup" id="savExpYesRow">
  <?php
include 'sub_popup.php';
 ?>
</div>
