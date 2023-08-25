/* 
 * Login Script
 */

$("form input").keyup(function(e){
    
    if(e.originalEvent.key !== "Enter"){

        $("form input").removeClass("w3-border-red");
        $("form button").removeAttr("disabled");
        
        $("form p").html("").removeClass("w3-text-red");
    
    }
    
});


$("form#login-form").submit(function(e){
    
    e.preventDefault();
        
    var form = $(this)[0];
    var formData = new FormData(form);
    
    $.ajax({
        type: 'POST',
        enctype: 'multipart/form-data',
        url: $(this).attr("action"),
        data: formData,
        processData: false,
        contentType: false,
        encode: true,
        cache: false,
        error : function (jqXHR, textStatus, errorThrown) {
            alert(textStatus + ": " + errorThrown);
        },
        success : function (data, textStatus, jqXHR) {

            if(data.status){
                
                $("form p.form-message").html(data.message + "!").addClass("w3-text-green");
                location.href = data.content;
                
            }else{
                
                $("form input").attr("enable", false);
                $("form input").addClass("w3-border-red");
                $("form button").attr("disabled", 'disabled');
                
                $("form p.form-message").html("* " + data.message).addClass("w3-text-red");
                
            }

        }

    });
    
    
});
