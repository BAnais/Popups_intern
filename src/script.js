document.addEventListener("DOMContentLoaded", function(event){
  $(function () {
    var isIE = window.ActiveXObject || "ActiveXObject" in window;
    if (isIE) {
      $('.modal').removeClass('fade');
    }
  });

  /*
  function openPopup(){
  document.window.open('', '_blank', 'width=200,height=700,scollbars=1,resizable=0');
};
*/
//doc pret
$(document).ready(function(){

  switch (document.title) {
    case "Expedition":
    // expedition.php
    $('#pMatos').css('display','none');
    //sub_popup_Exp_Ret
    $('#nbColisRow').css('display','none');
    $('#numDevisRow').css('display','none');
    break;

    case "Retour":
    //Retour
    $('#numSerieRow').css('display','none');
    //sub_popup_Exp_Ret
    $('#nbColisRow').css('display','none');
    $('#numDevisRow').css('display','none');
    break;

    case "SAV":
    //sav
    $('#savExpYesRow').css('display','none');
    break;

    default:
    break;
  }

  $( "[name=dateEnvoi]" ).datepicker({ minDate: -0,
    showOtherMonths: true,
    selectOtherMonths: true,
    dateFormat: "dd-mm-yy"
  });

  $('[name=dateLivraison]').datepicker({
    showOtherMonths: true,
    selectOtherMonths: true,
    dateFormat: "dd-mm-yy"
  });
  //ouverture modal
  $("#myBtn").on('click',function(){
    console.log("click click modal");
    $("#myModal").modal();
  });
});

$('[name=dateEnvoi]').on('change', function(){

  $('[name=dateLivraison]').removeAttr('disabled');
  var dateSelected = new Date($.datepicker.parseDate("dd-mm-yy", $(this).val()));
  dateSelected.setDate(dateSelected.getDate() + 2);

  $('[name=dateLivraison]').datepicker("option", "minDate", dateSelected);

});


//detecte un clic bouton radio et réagis dynamiquement en fonction de ce dernier
$('input[type="radio"]').on('click',function(){
  //récupère l'id de la div row correspondante dans data-divId puis change le style display
  //selon l'instruction displaydivrow
  $('#'+$(this).attr('data-divId')).css('display',$(this).data('display'));
  //si data('display')="block" alors on passe divname concernées required à true
  //sinon si = none alors on passe required à false
  if($(this).data('display') == "block"){
    if($(this).prop('id')=='ConnuYes'){
      $('[name=numSerie]').val('');
    }
    $('[name='+$(this).data('divname')+']').attr('required','true');

  }else if($(this).data('display') == "none"){

    $('[name='+$(this).data('divname')+']').removeAttr('required');
    $('[name='+$(this).data('divname')+']').val('');

    if($(this).prop('id')=='ConnuNo'){
      $('[name=numSerie]').val('inconnu');
    }

  }
  //si l'id du bouton est expYes alors on met a required tous les champs de la classe isRequired à required
  if($(this).prop('id')=='expYes'){
    $('.isRequired').attr('required', 'true');
  }else if($(this).prop('id')=='expNo'){
    $('.isRequired').prop('checked', false).val('');
    $('.isRequired').removeAttr('required');
  }
  //quand un click sur btn radio transporteur on récupère sa value pour l'ajouter
  // au nom du bon (ligne suivante) et uncheck les radio bonTr au clic du Tr
  if($(this).attr('name')=='transporteur' && $(this).prop("checked") ){
    console.log('changement valeur label');
    $('#bonTr').html("Bon "+$(this).attr('value')+ ":");
    $('[name="contentTrCondYes"]').prop('checked', false);
  }
  //popupTemplate changement de la valeur du bouton en fct de la langue selectionnée
  if($(this).attr('name')=='langue' && $(this).prop("checked")){
    $('[name=btnSend]').val($(this).data('btn'));
  }

});
//au changement de l'input date d'envoi on modifie le tag min de date de livraison min a +2
$('[name=dateEnvoi]').on('change', function(){
  console.log("test date"+$('[name=dateEnvoi]').val());
  var recupDate = $('[name=dateEnvoi]').val();
  var date = recupDate.split("-");
  var year = date[0];
  var month = date[1];
  var jour = date[2]
  var jourReceive = jour +2
  $('[name=dateLivraison]').min= jourReceive+"-"+month+"-"+year;

});
//au changement de l'heure de debut on enabled l'heure de fin
//puis on empehche la selection des heures avant cette derniere
$('[name=Dheure]').on('change',function(){
  $('[name=Dminutes]').removeAttr('disabled');
  var heure = $(this).val();
  //disabled toutes les options <à la valeur choisie
  for(var i=0; i<23; i++){
    if(i<heure){
      //disabled toutes les options de Fheure inférieures à la valeur choisie dans Dheure
      $('[name=Fheure] option').filter(function() {
        return ($(this).text() == i);
      }).prop('disabled', true);
    }else if (i>=heure){
      //enabled toutes les options de Fheure supérieures à la valeur choisie dans Dheure
      $('[name=Fheure] option').filter(function() {
        return ($(this).text() == i);
      }).removeAttr('disabled');
    }
  }
  //disabled les minutes de Fin si au changement de Dheure, Dheure == Fheure
  var minutes = $('[name=Dminutes]').val();
  if($('[name=Dheure]').val()==$('[name=Fheure]').val()){
    for(var i=0; i<=minutes; i++){
      $('[name=Fminutes] option').filter(function() {
        return ($(this).text() == i);
      }).prop('disabled', true);
    }}
    //si les heures sont différentes entre D et F alors enable toutes les Minutes fin
    if($('[name=Dheure]').val()!==$('[name=Fheure]').val()){
      var j =23;
      while (j>=0) {
        $('[name=Fminutes] option').filter(function() {
          return ($(this).text() == j);
        }).removeAttr('disabled');
        j--;
      }
    }

  });

  $('[name=Dminutes]').on('change', function(){
    $('[name=Fheure]').removeAttr('disabled');
    var minutes = $(this).val();
    for(var i=0; i<23; i++){
      if(i<minutes){
        //idem dans on change Dheure sauf que les changements se font sur Fminutes
        $('[name=Fminutes] option').filter(function() {
          return ($(this).text() == i);
        }).prop('disabled', true);
      }else if (i>=minutes){
        $('[name=Fminutes] option').filter(function() {
          return ($(this).text() == i);
        }).removeAttr('disabled');
      }
    }
  });
  //si on change d'abourd heure debut et heure fin avant minutes debut
  $('[name=Fheure]').on('change',function(){
    $('[name=Fminutes]').removeAttr('disabled');
    var minutes = $('[name=Dminutes]').val();
    if($('[name=Dheure]').val()==$('[name=Fheure]').val()){
      for(var i=0; i<=minutes; i++){
        $('[name=Fminutes] option').filter(function() {
          return ($(this).text() == i);
        }).prop('disabled', true);
      }
    }else{
      var j =23;
      while (j>=0) {
        $('[name=Fminutes] option').filter(function() {
          return ($(this).text() == j);
        }).removeAttr('disabled');
        j--;
      }
    }
  });


  $('.send').submit(function(event){
    event.preventDefault();
    if(horaireD!="" && horaireF!=""  && horaireD > horaireF){
      alert("L'horaire de livraison ne peut être égale ou inférieure à l'horaire d'envoi ! ");
    }
  });

  $(window).bind('beforeunload', function () {

    var http = new XMLHttpRequest();
    var url = "../Traitement/traitementOnBeforeUnload.php";

    var content = "json_name=" + JSON.stringify({
      STticket:"test",
      customerId:"onreadystatechange",
      escalade:"eee",
      userIdSelect:"grf",
      etat:"grge"
    })

    http.onreadystatechange = function() {
      if (http.readyState == XMLHttpRequest.DONE) {
        alert(http.responseText);
      }
    }
    http.open('POST', url, true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(content);



  });
});
