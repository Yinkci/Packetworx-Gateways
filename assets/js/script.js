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
///////////////////////////////////////////////////////////////////////////////////////////////////
// DELETE ALL GATEWAYS
///////////////////////////////////////////////////////////////////////////////////////////////////

   $('.delAll').click(function(e){ 
      e.preventDefault();
    if (confirm("Are you sure you want to Delete all records?")) {
          if (confirm("This is a permanent delete, are you sure?")) {

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
          else{

          }
  }          
     else {
       
      }
  
    });

  ///////////////////////////////////////////////////////////////////////////////////////////////////
// ADD NEW USER
///////////////////////////////////////////////////////////////////////////////////////////////////

   $('.addUser_ajax').click(function(e){ 
      var form = $("#addUserForm");
      var url = form.attr('action');
      $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
             $(".success_new_user").html("Succesfully added new user");

           },
            error: function () {
                    alert("Something Went Wrong");
                }
         });
      e.preventDefault();
  
    });
//
   $('.check_pass').click(function(e){  
    var x = $('.f_pass').val();
    var y = $('.confirm_password').val();
    if (x!=y) {
    alert("Password didn't match!");
     e.preventDefault();
    };
    });

});


})(jQuery);





