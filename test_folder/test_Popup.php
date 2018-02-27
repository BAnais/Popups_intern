<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="./src/script.js" charset="utf-8"></script>
</head>
<body>
  <div class="container">

    <form class="form-horizontal" action="/Popups_intern/index.html" method="post">

      <div class="row" id="envGroupRow">
        <div class="col-sm-3 ">
          <label>Envoi Groupé : </label>
        </div>
        <div class="col-sm-6 ">
          <input type="radio" name="groupe" value="yes" id="EnvGroupYes" data-display="block" data-divId="nbColisRow" data-divname="contentEnvGroup">
          <label for="EnvGroupYes">Oui</label>
          <input type="radio" name="groupe" value="no" id="EnvGroupNo" data-display="none" data-divId="nbColisRow">
          <label for="EnvGroupNo">Non</label>
        </div>
      </div>

      <div id="nbColisRow">
        <div class="row" >
          <div class="col-sm-3" name="contentEnvGroup">
            <label>Nombre de colis :</label>
          </div>
          <div class="col-sm-6" name="contentEnvGroup">
            <input type="number" name="nbColis" placeholder="XXX" min="2" max="10">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3 " name="contentEnvGroup">
            <label>Prix Transporteur</label>
          </div>
          <div class="col-sm-6 " name="contentEnvGroup">
            <input type="text" name="prixTransporteur" placeholder="XXX €">
          </div>
        </div>

      </div>


      <div class="row">
        <div class="col-sm-3 ">
          <label>Déploiement : </label>
        </div>
        <div class="col-sm-6 ">
          <input type="radio" name="deploiement" value="Yes" id="deploiementYes" data-display="block" data-divId="numDevisRow" data-divname="contentNumDevis">
          <label for="deploiementYes">Oui</label>
          <input type="radio" name="deploiement" value="No" id="deploiementNo" data-display="none" data-divId="numDevisRow">
          <label for="deploiementNo">Non</label>
        </div>
      </div>

      <div class="row" id="numDevisRow">
        <div class="col-sm-3" name="contentNumDevis">
          <label>N° Devis : </label>
        </div>
        <div class="col-sm-6" name="contentNumDevis">
          <input type="text" name="numeroDevis" placeholder="123456">
        </div>
      </div>

      <div class="row">
          <div class="col-sm-3 ">
            <label>Configuré : </label>
          </div>
          <div class="col-sm-6 ">
              <input type="radio" name="Configuration" value="Yes" id="ConfigureYes" data-display="block" data-divId="pMatos" data-divname="contentpMatos">
            <label for="ConfigureYes">Oui</label>
            <input type="radio" name="Configuration" value="No" id="ConfigureNo" data-display="none"  data-divId="pMatos">
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

      <div class="row">
        <div class="col-sm-3 ">
          <label>Transporteur : </label>
        </div>
        <div class="col-sm-6 ">
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
        <div class="col-sm-3 ">
          <label>N° Suivi</label>
        </div>
        <div class="col-sm-6 ">
          <input type="text" name="numSuivi" placeholder="123456769">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3 ">
          <label>Date d'envoi</label>
        </div>
        <div class="col-sm-6 ">
          <input type="date" name="dateEnvoi" value="">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3 ">
          <label>Date livraison</label>
        </div>
        <div class="col-sm-6 ">
          <input type="date" name="dateLivraison">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3 ">
          <label>Horaire :</label>
        </div>
        <div class="col-sm-6 ">
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
        <div class="col-sm-3 ">
          <label>Raison d'envoi</label>
        </div>
        <div class="col-sm-6 ">
          <textarea name="raisonEnvoi" rows="5" cols="30" readonly="false" placeholder="Entrez la raison de l'envoi ici" ></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3 ">
          <label>Langue</label>
        </div>
        <div class="col-sm-6 ">
          <input type="radio" name="langue" value="FR" id="FR1">
          <label for="FR1">FR</label>
          <input type="radio"  name="langue" value="EN" id="EN1">
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
      <div class="row">
        <div class="col-sm-4 col-sm-offset-5 ">
          <input class="btn-primary" type="submit" name="btnSend" value="Ok">
        </div>
      </div>



    </form>
  </div>
</body>

</html>
