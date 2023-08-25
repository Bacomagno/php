/*
 * HANDLING PROFILE
 */

var current = 'profile';

$(document).ready(function () {
    
    // Clear previous info
    $('#project_selector').html('');
    
    // Set navbar section's title to show when sidebar is hidden
    $('#nav_title').html(getCurrentWord('navbar_myprofile'));
    $('#nav_title').removeAttr('class');
    $('#nav_title').addClass('navbar_myprofile');
    
    $('#content_tabs').html('');
    setTimeout(function () {
        $('#lang_' + globalLang).click();
    }, 100);
    
});

function update(){
    
    /* Validates forms */
    var valid = false;
    $('form :visible[required="required"]').each(function (){
        if (!this.validity.valid){
            $(this).focus();
            $("form")[0].reportValidity();
            valid = false;
            //break
            return false;            
        }else{
            valid = true;
        }
    });
    if(valid) {
        var datosEnviados = {
            user_name: $('input[name="user_name"]').val(),
            user_email: $('input[name="user_email"]').val(),
            user_password: $('input[name="user_password"]').val()
        }
        $.ajax({
            type: 'POST',
            url: location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/index.php/' + whereAmI + '/profile/edit',
            data: datosEnviados,
            dataType: 'json',
            encode: true,
            error: function () {
                alert($('.txt_n_error').html());
            }
        }).done(function (datos) {
            if(datos.status){
                $('#nav_username').html(datosEnviados.user_name);
                $('#editor_username').html(datosEnviados.user_name);
                $('input[name="user_password"]').val('');
                alert($('.txt_n_correct').html());
            }
        });
        
    }

}

function prueba(element){
    if(element.value !== ''){
        element.name = element.id;  
    }else{
        element.name = '';
    }
}