document.addEventListener("DOMContentLoaded", function(event){

  document.getElementById('Send').onclick= function openSend() {
    window.open("../php/popupTemplate.php");
  };


  $(document).ready(function(){
    //document.title="Expédition"

  });
});
