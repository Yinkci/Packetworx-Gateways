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

});


})(jQuery);





