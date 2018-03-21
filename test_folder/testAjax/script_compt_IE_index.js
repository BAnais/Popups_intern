document.addEventListener("DOMContentLoaded", function(event){
  $('.ajax').submit(function(event){
    event.preventDefault();
          $.get("testGetAjax.php", function(data){
  $("body")
  .append(" nom : " + data.name + ",   time : " + data.time + ", co : " + data.co);
}, "json");
  });


});
$(function() {
    $.ajaxSetup({
        error: function(jqXHR, exception) {
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error [500].');
            } else if (exception === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (exception === 'timeout') {
                alert('Time out error.');
            } else if (exception === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error.\n' + jqXHR.responseText);
            }
        }
    });
});
