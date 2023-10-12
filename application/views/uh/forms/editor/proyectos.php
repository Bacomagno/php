<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="title">
    <span id="btn_close" title="" class="btn btn-default glyphicon glyphicon-remove pull-right btn_close_editor"></span>
    <h2><span id="txt_action"></span> <span id="number"></span></h2>
</div>

<div id="main_div" class="col-xs-12">
    <div class="container">
        <ul class="nav nav-tabs" id="myTabs">
            <li class="active"><a href="#formulario" data-toggle="tab">Formulario</a></li>
            <li><a href="#avances" data-toggle="tab">Documentos soporte</a></li>
            <li><a href="#productos" data-toggle="tab">Productos</a></li>
            <li><a href="#docentes" data-toggle="tab">Docentes</a></li>
            <li><a href="#estudiantes" data-toggle="tab">Estudiantes</a></li>
            <li><a href="#pro_minciencias" data-toggle="tab">Grupo Minciencias</a></li>
            <li><a href="#pro_facultades" data-toggle="tab">Facultades</a></li>
            <li><a href="#pro_programas" data-toggle="tab">Programas</a></li>
            <li><a href="#pro_lineas_programas" data-toggle="tab">Lineas de programas</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="formulario">
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
            <div class="tab-pane" id="avances">
                <div class="col-md-6 extra_content">
                    <div id="content_avances"></div>
                </div>
            </div>
            <div class="tab-pane" id="productos">
                <div class="col-md-6 extra_content">
                    <div id="content_productos"></div>
                </div>
            </div>
            <div class="tab-pane" id="docentes">
                <div class="col-md-6 extra_content">
                    <div id="content_docentes"></div>
                </div>
            </div>
            <div class="tab-pane" id="estudiantes">
                <div class="col-md-6 extra_content">
                    <div id="content_estudiantes"></div>
                </div>
            </div>
            <div class="tab-pane" id="pro_facultades">
                <div class="col-md-6 extra_content">
                    <div id="content_pro_facultades"></div>
                </div>
            </div>
            <div class="tab-pane" id="pro_programas">
                <div class="col-md-6 extra_content">
                    <div id="content_pro_programas"></div>
                </div>
            </div>
            <div class="tab-pane" id="pro_minciencias">
                <div class="col-md-6 extra_content">
                    <div id="content_pro_minciencias"></div>
                </div>
            </div>
            <div class="tab-pane" id="pro_lineas_programas">
                <div class="col-md-6 extra_content">
                    <div id="content_pro_lineas_programas"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    // Obtener número consecutivo
    var consecutivo = 0;
    
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

    // // Usar cuando un select identificado con "name" dependa de otro
    // window["selectRestrictions_" + editor_stack[editor_stack.length-1]] = [
    //     // el campo dependiente, seguido de el campo requerido, seguido por el recurso del campo requerido
    //     {field_name: "linea_facultad", requires: "facultad", resource: "facultades_lista"},
    //     {field_name: "programa_academico", requires: "linea_facultad", resource: "lineas_facultad_lista"},
    //     {field_name: "linea_programa", requires: "programa_academico", resource: "programa_academico_lista"}
    // ];
    
    // Usar cuando se requiera que el select o los select dados tengan "meta-datos" para obtenerlos con data.
    window["selectData_" + editor_stack[editor_stack.length-1]] = [
        // En el array de data se pueden poner todos los campos necesarios, separando con comas
        {field_name: "facultad", data: ["codificacion"]},
        {field_name: "programa_academico", data: ["codificacion"]}
    ];
    
    
    
    var new_consecutivo = true;
    var current_consecutivo = "";
    var current_tipo_solicitud = "";

    function commonSuccessEditor(data){}

    function commonAfterEditor(){
        
        // Actualiza el elemento cuando esté visible
        var timer0 = setInterval(function () {
            try{
                // if ($("#f1").length > 0) {
                if($("form#" + editor_stack[editor_stack.length-1]).length > 0){
                    // Oculta el campo "archivo_proyecto" por su nombre
                    $("label[for='archivo_proyecto']").hide();
                    $("input[name='archivo_proyecto']").hide();
                    $("div.form-group > div.col-md-4 > span.form-control").hide();
                }
                // Cuando el formulario esté cargado
                if($("form#" + editor_stack[editor_stack.length-1]).length > 0){
                    // Load additional content when required
                    if(action === "edit"){

                        if(Number(consecutivo) == 0){
                            consecutivo = $("form#" + editor_stack[editor_stack.length-1] + " input[name='codigo_institucional_proyecto']").val();
                        }else{
                        }

                        // Change the components size for this view
                        $("#main_div_" + editor_stack[editor_stack.length-1]).addClass("col-md-6").removeClass("col-xs-12");
                        $("form#" + editor_stack[editor_stack.length-1] + " .my-inputs").addClass("col-md-12").removeClass("col-md-8").removeClass("col-md-offset-2");
                        
                        loadContent("#content_avances", "avances", editor_stack[0]);

                        var timer1 = setInterval(function () {
                            try{
                                if(window["ft_" + "avances"].initialized){
                                    loadContent("#content_productos", "productos", editor_stack[0]);
                                    clearInterval(timer1);
                                }
                            }catch(e){
                                console.log($(e));
                                //clearInterval(timer1);
                            }
                        }, 400*3);
                        var timer2 = setInterval(function () {
                            try{
                                if(window["ft_" + "productos"].initialized){
                                    loadContent("#content_estudiantes", "grupos_unihorizonte", editor_stack[0]);
                                    clearInterval(timer2);
                                }
                            }catch(e){
                                console.log($(e));
                                //clearInterval(timer2);
                            }
                        }, 400*4);                        
                        var timer3 = setInterval(function () {
                            try{
                                if(window["ft_" + "grupos_unihorizonte"].initialized){
                                    loadContent("#content_docentes", "docentes_grupos_unihorizonte", editor_stack[0]);
                                    clearInterval(timer3);
                                }
                            }catch(e){
                                console.log($(e));
                                //clearInterval(timer3);
                            }
                        }, 400*5);
                        var timer4 = setInterval(function () {
                            try{
                                if(window["ft_" + "docentes_grupos_unihorizonte"].initialized){
                                    loadContent("#content_pro_facultades", "proyectos_facultades", editor_stack[0]);
                                    clearInterval(timer4);
                                }
                            }catch(e){
                                console.log($(e));
                                //clearInterval(timer3);
                            }
                        }, 400*6);
                        var timer5 = setInterval(function () {
                            try{
                                if(window["ft_" + "proyectos_facultades"].initialized){
                                    loadContent("#content_pro_minciencias", "proyectos_minciencias", editor_stack[0]);
                                    clearInterval(timer5);
                                }
                            }catch(e){
                                console.log($(e));
                                //clearInterval(timer3);
                            }
                        }, 400*7);
                        var timer6 = setInterval(function () {
                            try{
                                if(window["ft_" + "proyectos_minciencias"].initialized){
                                    loadContent("#content_pro_programas", "proyectos_programas", editor_stack[0]);
                                    clearInterval(timer6);
                                }
                            }catch(e){
                                console.log($(e));
                                //clearInterval(timer3);
                            }
                        }, 400*8);
                        var timer7 = setInterval(function () {
                            try{
                                if(window["ft_" + "proyectos_programas"].initialized){
                                    loadContent("#pro_lineas_programas", "proyectos_lineas_programa", editor_stack[0]);
                                    clearInterval(timer7);
                                }
                            }catch(e){
                                console.log($(e));
                                //clearInterval(timer3);
                            }
                        }, 400*9);
                        var timer8 = setInterval(function () {
                            try{
                                if(window["ft_" + "grupos_unihorizonte"].initialized){
                                    
                                    // Establece el campo presupuesto_ejecutado como de solo lectura
                                    $("form#" + editor_stack[editor_stack.length-1] + " input[name='presupuesto_asignado']").attr("readonly", "readonly");
                                    
                                    // Quita el fondo y el spinner
                                    $("div#div_loading").removeClass("background-loading");
                                    $("div#div_spinner").removeClass("spinner-loading");                                    
                                    clearInterval(timer8);                                    
                                }
                            }catch(e){
                                console.log($(e));
                                //clearInterval(timer4);
                            }
                        }, 400*10);                     
                    }else{                        
                        // Al copiar quita los campos que obligan a refrescar 
                        // el consecutivo
                        if(action === "copy"){                            
                            $("form#" + editor_stack[editor_stack.length-1] + " input[name='nombre_proyecto']").val("");
                            $("form#" + editor_stack[editor_stack.length-1] + " input[name='codigo_institucional_proyecto']").val("");
                            $("form#" + editor_stack[editor_stack.length-1] + " input[name='fecha_inicio']").val("");
                            $("form#" + editor_stack[editor_stack.length-1] + " input[name='fecha_final']").val("");
                            
                            $("form#" + editor_stack[editor_stack.length-1] + " select[name='facultad']").html("");
                            // $("form#" + editor_stack[editor_stack.length-1] + " select[name='linea_facultad']").html("");
                            $("form#" + editor_stack[editor_stack.length-1] + " select[name='programa_academico']").html("");
                            $("form#" + editor_stack[editor_stack.length-1] + " select[name='linea_programa']").html("");
                            
                            // Restablece el valor campo presupuesto_ejecutado a cero.
                            $("form#" + editor_stack[editor_stack.length-1] + " input[name='presupuesto_ejecutado']").val(0);                            
                        }                        
                        actualizar_consecutivo();                        
                    }                    
                    // Establece el campo codigo_institucional_proyecto como de solo lectura
                    $("form#" + editor_stack[editor_stack.length-1] + " input[name='codigo_institucional_proyecto']").attr("readonly", "readonly");
                    
                    // Establece el campo presupuesto_ejecutado como de solo lectura
                    $("form#" + editor_stack[editor_stack.length-1] + " input[name='presupuesto_ejecutado']").attr("readonly", "readonly");
                    
                    // Crea un evento para cuando se cambie la fecha.
                    $("form#" + editor_stack[editor_stack.length-1] + " input[name='fecha_inicio']").on("change", function(){
                        
                        var a = $("select[name='facultad']").val();
                        // var b = $("select[name='linea_facultad']").val();
                        
                        // Evalúa si se eligió facultad y línea de facultad para crear el código institucional
                        if(a == null ){
                            // Borra cualquier valor elegido
                            this.value = "";
                            
                            // Avisa que falta alguno de los dos select por escoger
                            alert("Falta Facultad");
                        }else{
                            actualizar_codigo();   
                        } 
                    });
                    clearInterval(timer0);
                }
            }catch(e){
                console.log($(e));
                //clearInterval(timer1);
            }
        }, 500); 
    }
    function actualizar_codigo(){        
        var txt = "";                            
        txt += $("form#" + editor_stack[editor_stack.length-1] + " select[name='facultad']").find(":selected").data("codificacion");
        txt += $("form#" + editor_stack[editor_stack.length-1] + " select[name='programa_academico']").find(":selected").data("codificacion");
        txt += consecutivo;
        // Actualiza el campo código institucional
        $("form#" + editor_stack[editor_stack.length-1] + " input[name='codigo_institucional_proyecto']").val(txt);        
    }
    // Obtiene el numero consecutivo de este sistema
    function actualizar_consecutivo(){
        
        // Obtiene y actualiza el consecutivo
        $.ajax({
            type: 'POST',
            url: location.href + "getconsecutivo",
            data: {
                system: 1
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(textStatus + ": " + errorThrown);
            },
            success: function (data, textStatus, jqXHR) {
                data = JSON.parse(data);
                if(data.status){
                    var txt = data.index.toString();
                    while(txt.toString().length < 4){
                        txt = "0" + txt;
                    }
                    consecutivo = txt;
                }
                // Quita el fondo y el spinner cuando se cargue todo
                $("div#div_loading").removeClass("background-loading");
                $("div#div_spinner").removeClass("spinner-loading");
            }
        });        
    }

    // Qué hacer cuando el select esté cargado
    function commonAfterSelect(select_name){

        // Evento de bootstrap select para el select específico...
        //console.log("form#" + editor_stack[editor_stack.length-1] + " select#" + select_name);
        $("form#" + editor_stack[editor_stack.length-1] + " select#" + select_name).on('hide.bs.select', function (e, clickedIndex, isSelected, previousValue) {
            
            // Activa el select de país si se ha escogido el tipo de solicitud y la fase
            if($("form#" + editor_stack[editor_stack.length-1] + " select#" + "tipo_solicitud").val() !== null && $("form#" + editor_stack[editor_stack.length-1] + " select#" + "fase").val() !== null){
                
                // Obtiene el nuevo consecutivo si la accion es add o copy o cambió el tipo de solicitud
                if($("form#" + editor_stack[editor_stack.length-1] + " input[name='nombre_consecutivo']").val() === "" && new_consecutivo || $("form#" + editor_stack[editor_stack.length-1] + " select#" + "tipo_solicitud").val() !== current_tipo_solicitud){
                 
                    if(action === "add" || action === "copy"){
                        
                        // Cambiar el funcionamiento para que cree el action listener según el nombre que llegue en el parámetro de la función... JCG
                        
                        /*$("form#" + editor_stack[editor_stack.length-1] + " select#" + "fase").selectpicker("destroy");
                        $("form#" + editor_stack[editor_stack.length-1] + " select#" + "pais").selectpicker("destroy");
                        $("form#" + editor_stack[editor_stack.length-1] + " input[name='nombre_consecutivo']").val("");*/
                        
                        // Traer un consecutivo AJAX
                        t_solic = $("form#" + editor_stack[editor_stack.length-1] + " select#" + "tipo_solicitud").val();

                        // Agrega el registro como bloqueado...
                        /*$.ajax({
                            type: 'POST',
                            url: location.href + "getConsecutivo",
                            data: {
                                process: t_solic
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                alert(textStatus + ": " + errorThrown);
                            },
                            success: function (data, textStatus, jqXHR) {
                                data = JSON.parse(data);
                                
                                if(data.status){
                                    
                                    current_consecutivo = data.index;
                                    current_tipo_solicitud = $("form#" + editor_stack[editor_stack.length-1] + " select#" + "tipo_solicitud").val();
                                    
                                    new_consecutivo = false;
                                    
                                }
                                
                            }
                        });*/
                        
                    }                 
                }                
                $("form#" + editor_stack[editor_stack.length-1] + " select#" + "pais").removeAttr("disabled");                
            }            
            // Lo que hace cuando se elige el país
            if($("form#" + editor_stack[editor_stack.length-1] + " select[name='pais']").val() !== null){
                
                pais_cod1 = $("select#pais").find(":selected").data("country_cod1");
                                 
                // Si el pais es CO (Colombia) o Indefinido (No) Establece automáticamente el agente como otro...
                if(pais_cod1 === "CO" || pais_cod1 === "No"){
                    pais_cod1 = "";
                    $("form#" + editor_stack[editor_stack.length-1] + " select[name='agente_" + whereAmI + "']").selectpicker("destroy");
                    $("form#" + editor_stack[editor_stack.length-1] + " select[name='agente_" + whereAmI + "']").html('<option selected value="93">Option.</option>');
                }
                $("form#" + editor_stack[editor_stack.length-1] + " input[name='nombre_consecutivo']").val(pais_cod1 + current_consecutivo);                
            }            
        });        
    }

    // Set to "true" if you want the system to create the form automatically
    // Set to "false" if you want to create the form manually
    var genFormAuto = true;
        
    $.getScript(location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/assets/js/common_editor.js', function () {});

</script>

<link rel="stylesheet" href="<?php echo base_url('assets/css/style_editor.css')?>">