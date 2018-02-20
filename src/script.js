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
if(document.getElementById('EnvGroupYes').checked){
  document.getElementById('nbColisRow').style.display="block";
}else if(document.getElementById('EnvGroupNo').checked){
  if(document.getElementById('nbColisRow').style.display != "none"){
    document.getElementById('nbColisRow').style.display="none";
  }
}




});
