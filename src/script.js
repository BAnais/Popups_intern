document.addEventListener("DOMContentLoaded", function(event){
/*
function openPopup(){
  document.window.open('', '_blank', 'width=200,height=700,scollbars=1,resizable=0');
};
*/
//doc pret
$(document).ready(function(){
  console.log("Document chargé");

  // expedition.php
  document.getElementById('pMatos').style.display = "none";
  //sub_popup_Exp_Ret
  document.getElementById('nbColisRow').style.display="none";
  document.getElementById('numDevisRow').style.display="none";
  //sub_popup
  document.getElementById('transporteurConditionYesRow').style.display="none";
  //sav
  document.getElementById('savExpYesRow').style.display="none";
  //Retour
  document.getElementById('numSerieRow').style.display="none";
  
});


});
/*
window.onload = function() {
    if (window.jQuery) {
        alert(" Jquery OK");
    } }
    */
