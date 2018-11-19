(function($) {

///////////////////////////////////////////////////////////////////////////////////////////////////
// DELETE GATEWAYS
///////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
     $('.deleteGate_').click(function(e){ 
      e.preventDefault();
    if (confirm("Are you sure you want to Delete?")) {
              var x = $(this).data('name'); 
              var y = ".esn_"+x; 
              $.ajax({
                type: 'POST',
                url: 'data/gatewaysDelete',
                data: {
                  x : x,
                },
               success: function (result) {
               	$(y).remove();
                },
                error: function () {
                    $(".deleteGate_").html("Something Went Wrong");
                }
          
            });
		}
            
     else {
       
    	}
  
    });

   $('.delAll').click(function(e){ 
      e.preventDefault();
    if (confirm("Are you sure you want to Delete all records?")) {
              var x = $(this).data('name'); 
              var y = ".esn_"+x; 
              $.ajax({
                type: 'POST',
                url: 'data/gatewaysDeleteAll',
                data: {
                  x : x,
                },
               success: function (result) {
               window.location.href = "gateways";
                },
                error: function () {
                    $(".delAll").html("Something Went Wrong");
                }
          
            });
    }
            
     else {
       
      }
  
    });


});


})(jQuery);





