document.addEventListener("DOMContentLoaded", function(event){

  document.getElementById('Send').onclick= function openSend() {
    popup = window.open("../php/popupTemplate.php", 'Popup','height=200, width=150');
  };


  $(document).ready(function(){
    //document.title="Expédition"

  });
});
