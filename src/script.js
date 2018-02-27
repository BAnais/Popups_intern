document.addEventListener("DOMContentLoaded", function(event){
  /*
  function openPopup(){
  document.window.open('', '_blank', 'width=200,height=700,scollbars=1,resizable=0');
};
*/
//doc pret
$(document).ready(function(){
  console.log("Document chargé");
  //ouverture modal
  $("#myBtn").on('click',function(){
    $("#myModal").modal();
  });
});

$('#myModal').on('show.bs.modal',function(){
  console.log($('#titleCategorie').text());
  //sub_popup
  $('#transporteurConditionYesRow').css('display','none');

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
$('[type=date]').datepicker();
});

//detecte un clic bouton radio et réagis dynamiquement en fonction de ce dernier
$('input[type="radio"]').on('click',function(){
  //récupère l'id de la div row correspondante dans data-divId puis change le style display
  //selon l'instruction displaydivrow
  $('#'+$(this).attr('data-divId')).css('display',$(this).data('display'));
  //si data('display')="block" alors on passe divname concernées required à true
  //sinon si = none alors on passe required à false
  if($(this).data('display') == "block"){
    if($('[name=contentEnvGroup]')){
      $('[name=NbColis]').attr('required','true');
      $('[name=prixTransporteur]').attr('required','true');
    }else{
      $('[name='+$(this).data('divname')+']').attr('required','true');
    }
  }else if($(this).data('display') == "none"){
    if($('[name=contentEnvGroup]')){
      $('[name=NbColis]').removeAttr('required');
      $('[name=prixTransporteur]').removeAttr('required');
    }
    $('[name='+$(this).data('divname')+']').removeAttr('required');
  }
  //récupère le name des divs correspondantes dans data
//  $('[name='+$(this).data('divname')+']').css('display','inline-'+$(this).data('display'));

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

  //test console log
  console.log($(this).attr('data-divId'));
  console.log($(this).data('divname'));
  console.log($(this).data('display'));
  console.log($(this).val());


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

});
