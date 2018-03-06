
<div class="row">
  <div class="col-sm-3 ">
    <label>Expédition : </label>
  </div>
  <div class="col-sm-6 ">
    <input type="radio" name="expedition" value="yes" id="expYes" data-display="block" data-divId="savExpYesRow">
    <label for="expYes"required>Oui</label>
    <input type="radio" name="expedition" value="no" id="expNo" data-display="none" data-divId="savExpYesRow">
    <label for="expNo" vrequired>Non</label>
  </div>
</div>
<div class="subpopup" id="savExpYesRow">
  <?php
include 'sub_popup.php';
 ?>
</div>
