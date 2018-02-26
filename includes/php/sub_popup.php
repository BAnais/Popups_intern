    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Transporteur : </label>
      </div>
      <div class="col-sm-6 contentRow">
        <input  type="radio" name="transporteur" value="Transporteur1" id="transporteurChoice1" data-display="block" data-divId="transporteurConditionYesRow" data-divname="contentTrCondYes">
        <label for="transporteurChoice1">Transporteur1</label>
        <input type="radio" name="transporteur" value="Transporteur3" id="transporteurChoice3" data-display="block" data-divId="transporteurConditionYesRow"  data-divname="contentTrCondYes" >
        <label for="transporteurChoice3">Transporteur3</label>
      </div>
    </div>

    <div class="row" id="transporteurConditionYesRow">
      <div class="col-sm-3" >
        <label id="bonTr">Bon Transporteur : </label>
      </div>
      <div class="col-sm-6" >
        <input type="radio" name="contentTrCondYes" value="Oui" id="bonOui">
        <label for="bonChoice1">Oui</label>
        <input type="radio" name="contentTrCondYes" value="Non" id="bonNon">
        <label for="bonChoice2">Non</label>
      </div>
    </div>

    <div class="row" >
      <div class="col-sm-3 contentRow">
        <label>N° Suivi</label>
      </div>
      <div class="col-sm-6 contentRow">
        <input type="text" name="numSuivi" placeholder="123456769">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Date d'envoi</label>
      </div>
      <div class="col-sm-6 contentRow">
        <input type="date" name="dateEnvoi" value="">
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Date livraison</label>
      </div>
      <div class="col-sm-6 contentRow">
        <input type="date" name="dateLivraison">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Horaire :</label>
      </div>
      <div class="col-sm-6 contentRow">
        <label>Entre :</label>
        <select name="Dheure">
          <option value="h">heure</option>
          <?php for ($Dheure = 00 ; $Dheure <= 23 ; $Dheure++):
            $Dhour = sprintf("%02d", $Dheure);
            ?>
            <option value="<?php echo $Dhour ?>"><?=$Dhour;?></option>
          <?php endfor; ?>
        </select>

        <select name="Dminutes">
          <option value="min">minutes</option>
          <?php for ($Dminutes = 00 ; $Dminutes <= 59 ; $Dminutes++):
            $Dmin = sprintf("%02d", $Dminutes);
            ?>
            <option value="<?=$Dmin ?>"><?=$Dmin;?></option>
          <?php endfor; ?>
        </select>
<label> Et : </label>
        <select name="Fheure">
          <option value="h">heure</option>
          <?php for ($Fheure = 00 ; $Fheure <= 23 ; $Fheure++):
            $Fhour = sprintf("%02d", $Fheure);
            ?>
            <option value="<?php echo $Fhour ?>"><?=$Fhour;?></option>
          <?php endfor; ?>
        </select>

        <select name="Fminutes">
          <option value="min">minutes</option>
          <?php for ($Fminutes = 00 ; $Fminutes <= 59 ; $Fminutes++):
            $Fmin = sprintf("%02d", $Fminutes);
            ?>
            <option value="<?=$Fmin ?>"><?=$Fmin;?></option>
          <?php endfor; ?>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Raison d'envoi</label>
      </div>
      <div class="col-sm-6 contentRow">
        <textarea name="raisonEnvoi" rows="5" cols="30" editable="true" placeholder="Entrez la raison de l'envoi ici" ></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Langue</label>
      </div>
      <div class="col-sm-6 contentRow">
        <input type="radio" name="langue" value="FR" id="FR1" data-btn="Envoyer">
        <label for="FR1">FR</label>
        <input type="radio"  name="langue" value="EN" id="EN1" data-btn="Send">
        <label for="EN1">EN</label>
      </div>
    </div>
    <div class="row">

      <div class="col-sm-3 contentRow">
        <label>Mail CC</label>
      </div>
      <div class="col-sm-6 contentRow">
        <input type="email" name="emailCC" placeholder="exemple@entreprise.fr">
      </div>
    </div>
