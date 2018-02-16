    <div class="row">
      <div class="col-lg-4">
        <label>Transporteur : </label>
      </div>
      <div class="col-lg-8">
        <input  type="radio" name="transporteur" value="Transporteur1" id="transporteurChoice1">
        <label for="transporteurChoice1">Transporteur1</label>
        <input type="radio" name="transporteur" value="Transporteur2" id="transporteurChoice2">
        <label for="transporteurChoice2">Transporteur2</label>
      </div>
    </div>

    <div class="row" id="transporteurConditionYes">
      <div class="col-lg-4">
        <label>Bon T1 : </label>
      </div>
      <div class="col-lg-8">
        <input type="radio" name="bonT1" value="Oui" id="bonT1Choice1">
        <label for="bonUPSChoice1">Oui</label>
        <input type="radio" name="bonT2" value="Non" id="bonT2Choice2">
        <label for="bonUPSChoice2">Non</label>
      </div>
    </div>

    <div class="row" >
      <div class="col-lg-4">
        <label>N° Suivi</label>
      </div>
      <div class="col-lg-8">
        <input type="text" name="numSuivi" placeholder="123456789">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <label>Prix Transporteur</label>
      </div>
      <div class="col-lg-8">
        <input type="text" name="prixTransporteur" placeholder="XXX €">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <label>Date d'envoi</label>
      </div>
      <div class="col-lg-8">
        <input type="date" name="dateEnvoi" value="">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <label>Date livraison</label>
      </div>
      <div class="col-lg-2">
        <input type="date" name="dateLivraison">
      </div>
      <div class="col-lg-2">
        <label>Horaire (24h format)</label>
      </div>
      <div class="col-lg-4">
        <select name="heure">
          <option value="h">heure</option>
          <?php for ($heure = 00 ; $heure <= 23 ; $heure++):
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
      <div class="col-lg-4">
        <label>Raison d'envoi</label>
      </div>
      <div class="col-lg-8">
        <textarea name="raisonEnvoi" rows="5" cols="80" readonly="false" placeholder="Entrez la raison de l'envoi ici" ></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <label>Langue</label>
      </div>
      <div class="col-lg-8">
        <input type="radio" name="FR" value="FR" id="FR1">
        <label for="FR1">FR</label>
        <input type="radio" name="EN" value="EN" id="EN1">
        <label for="EN1">EN</label>
      </div>
    </div>
    <div class="row">

      <div class="col-lg-4">
        <label>Mail CC</label>
      </div>
      <div class="col-lg-8">
        <input type="email" name="emailCC" placeholder="exemple@entreprise.fr">
      </div>
    </div>
