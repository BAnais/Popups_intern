document.addEventListener("DOMContentLoaded", function(event){

  document.getElementById('subSend').onclick= function openSend() {
    alert("Expédition");
  };
  document.getElementById('subReturn').onclick= function openSend() {
    alert("Retour");
  };
  document.getElementById('subSav').onclick= function openSend() {
    alert("SAV");
  };

  $(document).ready(function(){
    //document.title="Expédition"

  });
});
