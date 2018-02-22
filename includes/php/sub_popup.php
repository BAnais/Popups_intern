    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Transporteur : </label>
      </div>
      <div class="col-sm-6 contentRow">
        <input  type="radio" name="transporteur" value="Transporteur1" id="transporteurChoice1" data-display="block" data-divId="transporteurConditionYesRow" data-divname="contentTrCondYes">
        <label for="transporteurChoice1">Transporteur1</label>
        <input type="radio" name="transporteur" value="Transporteur3" id="transporteurChoice3"data-display="none" data-divId="transporteurConditionYesRow" >
        <label for="transporteurChoice3">Transporteur3</label>
      </div>
    </div>

    <div class="row" id="transporteurConditionYesRow">
      <div class="col-sm-3" name="contentTrCondYes">
        <label>Bon T1 : </label>
      </div>
      <div class="col-sm-6"  name="contentTrCondYes">
        <input type="radio" name="contentTrCondYes" value="Oui" id="bonT1Choice1">
        <label for="bonUPSChoice1">Oui</label>
        <input type="radio" name="contentTrCondYes" value="Non" id="bonT3Choice3">
        <label for="bonUPSChoice3">Non</label>
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
        <select name="heure">
          <option value="h">heure</option>
          <?php for ($heure = 00 ; $heure <= 24 ; $heure++):
            $hour = sprintf("%02d", $heure);
            ?>
            <option value="<?php echo $hour ?>"><?=$hour;?></option>
          <?php endfor; ?>
        </select>

        <select name="minutes">
          <option value="min">minutes</option>
          <?php for ($minutes = 00 ; $minutes <= 59 ; $minutes++):
            $min = sprintf("%02d", $minutes);
            ?>
            <option value="<?=$min ?>"><?=$min;?></option>
          <?php endfor; ?>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Raison d'envoi</label>
      </div>
      <div class="col-sm-6 contentRow">
        <textarea name="raisonEnvoi" rows="5" cols="30" readonly="false" placeholder="Entrez la raison de l'envoi ici" ></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-3 contentRow">
        <label>Langue</label>
      </div>
      <div class="col-sm-6 contentRow">
        <input type="radio" name="langue" value="FR" id="FR1">
        <label for="FR1">FR</label>
        <input type="radio"  name="langue" value="EN" id="EN1">
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
