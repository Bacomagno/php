<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="title">
    <span id="btn_close" title="" class="btn btn-default glyphicon glyphicon-remove pull-right btn_close_editor"></span>
    <h2><span id="txt_action"></span> <span id="number"></span></h2>
</div>

<div id="main_div" class="col-xs-12">
    <form id="f1" name="main_form" class="form-horizontal" method="post">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2">
                            <span class="glyphicon glyphicon-minus-sign"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 my-inputs"></div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>

    // Title
    $("div.title").addClass("title-" + editor_stack[editor_stack.length-1]).removeClass("title");
    
    // Close
    $("span#btn_close").attr("id", "btn_close_" + editor_stack[editor_stack.length-1]).attr("title", getCurrentWord("txt_close"));
    
    // Action
    $("span#txt_action").attr("id", "txt_action_" + editor_stack[editor_stack.length-1]);
    
    // Number
    $("span#number").attr("id", "number-" + editor_stack[editor_stack.length-1]);
    
    // Main Div
    $("div#main_div").attr("id", "main_div_" + editor_stack[editor_stack.length-1]);
    
    // Form
    $("form#f1").attr("id", editor_stack[editor_stack.length-1]);

    // Contenido personalizado
    function commonAfterEditor(){

        // Actualiza el elemento cuando esté visible
        var timer1 = setInterval(function () {
            try{
                // Cuando el formulario esté cargado
                if($("form#" + editor_stack[editor_stack.length-1]).length > 0){

                    // Quita el fondo y el spinner
                    $("div#div_loading").removeClass("background-loading");
                    $("div#div_spinner").removeClass("spinner-loading");

                    // Establece el campo correo de tipo email
                    $("input[name='user_email']").prop("type", "email");

                    clearInterval(timer1);

                }
            }catch(e){
                console.log($(e));
                //clearInterval(timer1);
            }
        }, 500);
        
    }

    // Set to "true" if you want the system to create the form automatically
    // Set to "false" if you want to create the form manually
    var genFormAuto = true;
        
    $.getScript(location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/assets/js/common_editor.js', function () {});

</script>

<link rel="stylesheet" href="<?php echo base_url('assets/css/style_editor.css')?>">