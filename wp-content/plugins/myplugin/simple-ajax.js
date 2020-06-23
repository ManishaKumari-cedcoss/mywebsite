jQuery(document).ready(function($) {
 
    // We'll pass this variable to the PHP function example_ajax_request
    var fruit = 'Banana';
     
    // This does the ajax request
    $.ajax({
        url: ajax_obj.ajaxurl,
        data: {
            'action': 'ajax_request',//handler function
            'fruit' : fruit,
            'nonce' : ajax_obj.nonce
        },
        success:function(data) {
            // This outputs the result of the ajax request
            console.log(data);
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });  
              
}); 