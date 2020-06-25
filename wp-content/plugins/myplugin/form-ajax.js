jQuery(document).ready(function($) {
    //console.log("hi");
    $("button").click(function(){
        var Name=$("#name").val();
        var Email=$("#email").val();
        var Feedback=$("#feedback").val();
        var mydata = new Array(Name,Email,Feedback);
        console.log(mydata);
       
    
    $.ajax({
                url: formajax_obj.ajaxurl,
                data: {
                       'action': 'ajax_request',
                       'mydata':mydata
                    //    'nonce' : formajax_obj.nonce
                      },
                
                success:function(data) {
                    // This outputs the result of the ajax the request
                    console.log(data);
                }
                
         });
    });
});
 