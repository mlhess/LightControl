
$(document).ready(function(){
   $(":button").click(function(){
       var v = $("#cmd").val();
      $("#cmd").val(v + $(this).val());
   });
 });