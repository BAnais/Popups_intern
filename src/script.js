document.addEventListener("DOMContentLoaded", function(event){
  /*
  function openPopup(){
  document.window.open('', '_blank', 'width=200,height=700,scollbars=1,resizable=0');
};
*/
//doc pret
$(document).ready(function(){
  console.log("Document chargé");

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
});

//detecte un clic bouton radio et réagis dynamiquement en fonction de ce dernier
$('input[type="radio"]').on('click',function(){
//récupère l'id de la div row correspondante dans data-divId puis change le style display
//selon l'instruction displaydivrow
$('#'+$(this).attr('data-divId')).css('display',$(this).data('display'));
//si data('display')="block" alors on passe divname concernées required à true
//sinon si = none alors on passe required à false
if($(this).data('display') == "block"){
console.log("si display = block on va te mettre en required");
}
//récupère le name des divs correspondantes dans data
$('[name='+$(this).data('divname')+']').css('display','inline-'+$(this).data('display'));

//si le radio checked est transporteur3 alors on uncheck le bonUPS
if($("#transporteurChoice3").prop("checked")){
  $('[name="contentTrCondYes"]').prop('checked', false);
}
//popupTemplate changement de la valeur du bouton en fct de la langue selectionné
var btnFR = "Envoyer";
var btnEN = "Send";
//if()

//test console log
console.log($(this).attr('data-divId'));
console.log($(this).data('divname'));
console.log($(this).data('display'));
console.log($(this));


});



});
