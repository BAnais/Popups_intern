<div class="row">
  <div class="col-sm-3 ">
    <label>Transporteur : </label>
  </div>
  <div class="col-sm-6 ">
    <input class="isRequired" type="radio" name="transporteur" value="Transporteur1" id="transporteurChoice1" data-display="block" data-divId="transporteurConditionYesRow" data-divname="contentTrCondYes" required>
    <label for="transporteurChoice1">Transporteur1</label>
    <input class="isRequired" type="radio" name="transporteur" value="Transporteur3" id="transporteurChoice3" data-display="block" data-divId="transporteurConditionYesRow"  data-divname="contentTrCondYes" required >
    <label for="transporteurChoice3">Transporteur3</label>
  </div>
</div>

<div class="row" id="transporteurConditionYesRow">
  <div class="col-sm-3" >
    <label id="bonTr">Bon Transporteur : </label>
  </div>
  <div class="col-sm-6" >
    <input class="isRequired" type="radio" name="contentTrCondYes" value="yes" id="bonOui" required>
    <label for="bonChoice1">Oui</label>
    <input class="isRequired" type="radio" name="contentTrCondYes" value="no" id="bonNon" required>
    <label for="bonChoice2">Non</label>
  </div>
</div>

<div class="row">
  <div class="col-sm-3 " >
    <label>Prix Transporteur</label>
  </div>
  <div class="col-sm-6 " >
    <input class="isRequired" type="number" name="prixTransporteur" min="0" placeholder="XXX €" required >
  </div>
</div>


<div class="row" >
  <div class="col-sm-3 ">
    <label>N° Suivi</label>
  </div>
  <div class="col-sm-6 ">
    <input class="isRequired" type="text" name="numSuivi" placeholder="123456769" required>
  </div>
</div>

<div class="row">
  <div class="col-sm-3 ">
    <label>Date d'envoi</label>
  </div>
  <div class="col-sm-6 ">
    <input class="isRequired" type="text" name="dateEnvoi" required>
  </div>
</div>

<div class="row">
  <div class="col-sm-3 ">
    <label>Date livraison</label>
  </div>
  <div class="col-sm-6 ">
    <input class="isRequired" type="text" name="dateLivraison" disabled required>
  </div>
</div>
<div class="row">
  <div class="col-sm-3 ">
    <label>Horaire :</label>
  </div>
  <div class="col-sm-6   ">
    <label>  Entre :  </label>
    <select class="isRequired" name="Dheure" required>
      <option disabled selected value="">Heure</option>
      <?php for ($Dheure = 00 ; $Dheure <= 23 ; $Dheure++):
        $Dhour = sprintf("%02d", $Dheure);
        ?>
        <option value="<?php echo $Dhour ?>"><?=$Dhour;?></option>
      <?php endfor; ?>
    </select>
    <label>  :  </label>
    <select class="isRequired" name="Dminutes" required disabled>
      <option disabled selected value="">Minutes</option>
      <?php for ($Dminutes = 00 ; $Dminutes <= 59 ; $Dminutes++):
        $Dmin = sprintf("%02d", $Dminutes);
        ?>
        <option value="<?=$Dmin ?>"><?=$Dmin;?></option>
      <?php endfor; ?>
    </select>
    <label>  Et : </label>
    <select  class="isRequired" name="Fheure" required disabled>
      <option disabled selected value="">Heure</option>
      <?php for ($Fheure = 00 ; $Fheure <= 23 ; $Fheure++):
        $Fhour = sprintf("%02d", $Fheure);
        ?>
        <option value="<?php echo $Fhour ?>"><?=$Fhour;?></option>
      <?php endfor; ?>
    </select>
    <label>  :  </label>
    <select class="isRequired" name="Fminutes" required disabled>
      <option disabled selected value="">Minutes</option>
      <?php for ($Fminutes = 00 ; $Fminutes <= 59 ; $Fminutes++):
        $Fmin = sprintf("%02d", $Fminutes);
        ?>
        <option value="<?=$Fmin ?>"><?=$Fmin;?></option>
      <?php endfor; ?>
    </select>
  </div>
</div>

<div class="row">
  <div class="col-sm-3 ">
    <label>Raison d'envoi</label>
  </div>
  <div class="col-sm-6 ">
    <textarea class="isRequired" style="resize: none; overflow: vertical;" name="raisonEnvoi" rows="5" cols="30" editable="true" placeholder="Entrez la raison de l'envoi ici" required></textarea>
  </div>
</div>

<div class="row">
  <div class="col-sm-3 ">
    <label>Langue</label>
  </div>
  <div class="col-sm-6 ">
    <input class="isRequired" type="radio" name="langue" value="FR" id="FR1" data-btn="Envoyer" required>
    <label for="FR1">FR</label>
    <input class="isRequired" type="radio"  name="langue" value="EN" id="EN1" data-btn="Send" required>
    <label for="EN1">EN</label>
  </div>
</div>
<div class="row">

  <div class="col-sm-3 ">
    <label>Mail CC</label>
  </div>
  <div class="col-sm-6 ">
    <input type="email" name="emailCC" placeholder="exemple@entreprise.fr">
  </div>
</div>
