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
  document.getElementById('transporteurConditionYesRow').style.display="none";

  switch (document.title) {
    case "Expedition":
    // expedition.php
    document.getElementById('pMatos').style.display = "none";
    //sub_popup_Exp_Ret
    document.getElementById('nbColisRow').style.display="none";
    document.getElementById('numDevisRow').style.display="none";
    break;

    case "Retour":
    //Retour
    document.getElementById('numSerieRow').style.display="none";
    //sub_popup_Exp_Ret
    document.getElementById('nbColisRow').style.display="none";
    document.getElementById('numDevisRow').style.display="none";
    break;

    case "SAV":
    //sav
    document.getElementById('savExpYesRow').style.display="none";
    break;

    default:
    break;
  }
});

//on select Exp ou Ret
//affichage nb colis si groupe = Yes
/*$('input[type="radio"]').on('click',function(){
	console.log(document.getElementById('EnvGroupYes').checked)
})*/
$('input[type="radio"]').on('click',function(){

$('#'+$('input[type="radio"].prop("checked")').data('divId')).css('display',$('input[type="radio"].prop("checked")').data('display'));
console.log($('input[type="radio"].prop("checked")'));
/*
if($('#EnvGroupYes').prop('checked')){
	$('#nbColisRow').css('display',"block");
}else if ($('#EnvGroupNo').prop('checked')){
$('#nbColisRow').css('display',"none");
}*/

});

});
