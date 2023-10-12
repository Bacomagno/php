/* 
 * COMMON EDITOR
 */

$(document).ready(function(){

    try{
        // Always declare this function to do something before loading the table
        commonBeforeEditor();
    }catch(e){}

    // Adapta la altura del main_div para todas las secciones
    //$("div#main_div_" + editor_stack[editor_stack.length-1]).css("height", "1800px");
    $("div#main_div_" + editor_stack[editor_stack.length-1]).css("height", "-webkit-fill-available");
    
    // Hace scroll automáticamente hasta el principio de la página
    $(document).scrollTop(0);
    
    // Set the actual resource name the editor is using
    $("span#number-" + editor_stack[editor_stack.length-1]).html(getCurrentWord(editor_stack[editor_stack.length-1]));
    
    // Todos los formularios tienen el atributo: enctype='multipart/form-data'
    $("form#" + editor_stack[editor_stack.length-1]).attr("enctype", "multipart/form-data");

    // Obtain the given resource data form API
    $.ajax({
        type: 'GET',
        url: location.origin + '/' + location.pathname.split("/")[1] + '/index.php/api/v1/' + editor_stack[editor_stack.length-1] + "/" + editor_id_stack[editor_id_stack.length-1],
        encode: "application/json",
        error: function (jqXHR, textStatus, errorThrown) {
            alert(textStatus + ": " + errorThrown);
        },
        success: function (data, textStatus, jqXHR) {
            
            // Add the columns wich are not actually in the JSON data
            for(c in data.columns){
                data.columns[c]["name"] = data.columns[c]["Field"];
                var type = data.columns[c]["Type"];
                type = type.split(/\s+/);
                type = type[0];
                type = type.replace(/\(.*\)/g, "");
                data.columns[c]["type"] = fieldType(type);
                data.columns[c]["title"] = data.columns[c]["Field"];

                if(data.columns[c]["Key"] !== "PRI"){
                    if(window["orderedColumns_" + editor_stack[editor_stack.length -1]].length === 0){
                        data.columns[c]["required"] = true;
                    }    
                }

            }
            
            // Set the action of the form adding the action='...' attribute
            $("form#" + editor_stack[editor_stack.length-1]).attr("action", location.href + action + "/" + editor_stack[editor_stack.length-1]);

            // Genera el formulario autimáticamente si genFormAuto es true
            if(genFormAuto){

                // Create inputs, textareas and selects according to the order 
                // given in the window["orderedColumns_" + editor_stack[editor_stack.length -1]] array
                for(i in window["orderedColumns_" + editor_stack[editor_stack.length -1]]){                    
                    for(j in data.columns){                        
                        if(window["orderedColumns_" + editor_stack[editor_stack.length -1]][i]["name"] === data.columns[j]["Field"]){
                            var required = "";
                            var required_asterisk = "";
                            if(typeof window["orderedColumns_" + editor_stack[editor_stack.length -1]][i]["required"] != "undefined" && window["orderedColumns_" + editor_stack[editor_stack.length -1]][i]["required"]){
                                required = "required";
                                required_asterisk = "*";
                            }
                            if(data.columns[j]["Field"].indexOf("imagen") >= 0 || data.columns[j]["Field"].indexOf("image") >= 0 || data.columns[j]["Field"].indexOf("img") >= 0 || data.columns[j]["Field"].indexOf("file") >= 0 || data.columns[j]["Field"].indexOf("archivo") >= 0){
                                data.columns[j]["type"] = "file";
                            }
                            if(data.columns[j]["type"] !== "textarea"){

                                // Find if the actual column has a Key value of 
                                // "MUL" wich means that is a foreing key and 
                                // must be rendered as a SELECT
                                if(data.columns[j]["Key"] === "MUL"){
                                    html = '<div class="form-group">\n\
                                        <label class="control-label col-md-3 ' + data.columns[j]["Field"]  + '" for="' + data.columns[j]["Field"]  + '">' + getCurrentWord(data.columns[j]["Field"])  + ' ' + required_asterisk + '</label>\n\
                                        <div class="col-md-8">\n\
                                        <select name="' + data.columns[j]["Field"] + '" id="' + data.columns[j]["Field"] + '" class="form-control" data-live-search="true" ' + required + '>\n\
                                            <option selected disabled value class="default">' + getCurrentWord(data.columns[j]["Field"]) + '</option>\n\
                                        </select>\n\
                                        </div>\n\
                                        </div>';
                                }else{                                    
                                    if(data.columns[j]["Field"].indexOf("imagen") >= 0 || data.columns[j]["Field"].indexOf("image") >= 0 || data.columns[j]["Field"].indexOf("img") >= 0){
                                        html = '<div class="form-group">\n\
                                            <label class="control-label col-md-3 imagen" for="' + data.columns[j]["Field"]  + '">' + getCurrentWord(data.columns[j]["Field"]) + ' ' + required_asterisk + '</label>\n\
                                            <div class="col-md-8">\n\
                                            <center style="border: 1px dashed #003366;padding: 20px;">\n\
                                            <img style="cursor: pointer;max-width: 254px;width: 100%" onclick="$(\'#' + data.columns[j]["Field"] + '\').click()" id="selected-img" src="' + location.origin + "/" + location.pathname.split("/")[1] + "/assets/images/img-add.png" + '">\n\
                                            </center>\n\
                                            <input type="file" class="form-control hidden ' + data.columns[j]["Field"] + '" name="' + data.columns[j]["Field"] + '" id="' + data.columns[j]["Field"] + '" onchange="archivo()" ' + required + '>\n\
                                            </div>\n\
                                            </div>';
                                    }else if(data.columns[j]["Field"].indexOf("file") >= 0 || data.columns[j]["Field"].indexOf("archivo") >= 0){                                        
                                        html = '<div class="form-group">\n\
                                            <label class="control-label col-md-3 ' + data.columns[j]["Field"]  + '" for="' + data.columns[j]["Field"]  + '">' + getCurrentWord(data.columns[j]["Field"])  + '  ' + required_asterisk + '</label>\n\
                                            <div class="col-md-8">\n\
                                            <input name="' + data.columns[j]["Field"] + '" type="' + data.columns[j]["type"] + '" class="form-control" value="" placeholder="' + getCurrentWord(data.columns[j]["Field"]) + '" ' + required + '>\n\
                                            </div>\n\
                                            </div>';
                                    }else{
                                        html = '<div class="form-group">\n\
                                            <label class="control-label col-md-3 ' + data.columns[j]["Field"]  + '" for="' + data.columns[j]["Field"]  + '">' + getCurrentWord(data.columns[j]["Field"])  + '  ' + required_asterisk + '</label>\n\
                                            <div class="col-md-8">\n\
                                            <input name="' + data.columns[j]["Field"] + '" type="' + data.columns[j]["type"] + '" class="form-control" value="" placeholder="' + getCurrentWord(data.columns[j]["Field"]) + '" ' + required + '>\n\
                                            </div>\n\
                                            </div>';
                                    }
                                }
                            }else{
                                html = '<div class="form-group">\n\
                                    <label class="control-label col-md-3 ' + data.columns[j]["Field"]  + '" for="' + data.columns[j]["Field"]  + '">' + getCurrentWord(data.columns[j]["Field"])  + '  ' + required_asterisk + '</label>\n\
                                    <div class="col-md-8">\n\
                                    <textarea name="' + data.columns[j]["Field"] + '" rows="5" class="form-control" placeholder="' + getCurrentWord(data.columns[j]["Field"]) + '" ' + required + '></textarea>\n\
                                    </div>\n\
                                    </div>';
                            }
                            $("form#" + editor_stack[editor_stack.length-1] + " .my-inputs").append(html);

                            // Hides the primary key field
                            if(window["key_" + editor_stack[editor_stack.length-1]] === data.columns[j]["Field"]){
                                $("form#" + editor_stack[editor_stack.length-1] + " [name='" + window["key_" + editor_stack[editor_stack.length-1]] + "']").parents(".form-group").addClass("hidden");
                            }

                            // Terminate the loop to skip unnecesary iterations
                            break;
                        }
                    }
                }

                // Put the action button
                html = '<hr/><div class="form-group">\n\
                    <label class="control-label col-md-3 ' + action  + '" for="' + action  + '"></label>\n\
                    <div class="col-md-8">\n\
                    <button id="' + action  + '" class="btn btn-primary btn-block pull-right">' + getCurrentWord(action)  + '</button>\n\
                    </div>\n\
                    </div>';

                $("form#" + editor_stack[editor_stack.length-1] + " .my-inputs").append(html);

            }

            // Set the action title Agregar, Editar o Copiar
            $("#txt_action_" + editor_stack[editor_stack.length-1]).html(getCurrentWord(action));

            // Establece los valores elegidos si la acción es "edit" o "copy"
            if(action === "edit" || action === "copy"){

                // Quita el valor del id de la seccion actual si la acción es copiar
                // dado que copiar significa que se creará un registro nuevo con 
                // información cargada de otro registro.
                if(action === "copy" || action === "add"){
                    $("form#" + editor_stack[editor_stack.length-1] + " input[name='" + window["key_" + editor_stack[editor_stack.length-1]] + "']").val("");
                }else{
                    $("form#" + editor_stack[editor_stack.length-1] + " input[name='" + window["key_" + editor_stack[editor_stack.length-1]] + "']").attr("required", "required");
                }
                for(i in data.columns){

                    // Establece el campo predeterminado si está establedido
                    if(data.columns[i]["Key"] ==="MUL"){
                        $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + data.columns[i]["Field"] + "'] > .default").html(data.rows[0][data.columns[i]["Field"]]);
                        $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + data.columns[i]["Field"] + "'] > .default").removeAttr("disabled");
                        $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + data.columns[i]["Field"] + "'] > .default").val(data.clean[0][data.columns[i]["Field"]])
                    }
                    // Verificar si existe un documento con el mismo ID de avance y tipo de documento = 3
                    // Si existe, mostrar un mensaje y evitar que se guarde el nuevo documento
                    console.log("com_edi_171: ", data.rows[0][data.columns[0]['Field']] );
                    console.log("com_edi_172: ", data.rows[0].tipo_documento);
                    if (data.rows[0][data.columns[0]['Field']] !== null && data.rows[0].tipo_documento === "Proyecto final") {
                        alert('Ya hay un archivo final guardado para este proyecto.');
                        // return false;
                        event.preventDefault(); // Evita el envío del formulario
                    }
                    if(data.columns[i]["type"] !=="textarea"){
                        if(data.columns[i]["Field"].indexOf("imagen") >= 0 || data.columns[i]["Field"].indexOf("image") >= 0 || data.columns[i]["Field"].indexOf("img") >= 0){
                            if(data.rows[0][data.columns[i]["Field"]] !== ""){
                                var imgPath = location.pathname.split("/");
                                imgPath = imgPath[1];
                                imgPath = location.origin + "/" + imgPath + "/documents/" + whereAmI + "/" + data.rows[0][data.columns[i]["Field"]];
                                $("img#selected-img").attr("src", imgPath);
                            }
                        }else if(data.columns[i]["Field"].indexOf("file") >= 0 || data.columns[i]["Field"].indexOf("archivo") >= 0){

                            // Que hacer si es un archivo lo que debe ir ahí
                            if(data.rows[0][data.columns[i]["Field"]] !== null){
                                    
                                    var filePath = location.pathname.split("/");
                                    filePath = filePath[1];
                                    filePath = location.origin + "/" + filePath + "/documents/" + whereAmI + "/" + data.rows[0][data.columns[i]["Field"]]; 
                                    console.log("com_edi_185", filePath);                               
                                    var icon = "fa fa-folder-open";
                                    console.log("com_edit_187", data.rows[0][data.columns[i]["Field"]].split(".")[1]);

                                switch (data.rows[0][data.columns[i]["Field"]].split(".")[1]) {
                                    case "doc":
                                        icon = "fa fa-file-word-o";
                                        break;
                                    case "docx":
                                        icon = "fa fa-file-word-o";
                                        break;                                
                                    case "pdf":
                                        icon = "fa fa-file-pdf-o";
                                        break;
                                    case "gif":
                                        icon = "fa fa-file-image-o";
                                        break;
                                    case "jpg":
                                        icon = "fa fa-file-image-o";
                                        break;
                                    case "png":
                                        icon = "fa fa-file-image-o";
                                        break;
                                    case "jpeg":
                                        icon = "fa fa-file-image-o";
                                        break;
                                    case "svg":
                                        icon = "fa fa-file-image-o";
                                        break;
                                    case "jfif":
                                        icon = "fa fa-file-image-o";
                                        break;
                                    case "xls":
                                        icon = "fa fa-file-excel-o";
                                        break;
                                    case "xlsx":
                                        icon = "fa fa-file-excel-o";
                                        break;
                                    case "XLSX":
                                        icon = "fa fa-file-excel-o";
                                        break;
                                    case "txt":
                                        icon = "fa fa-file-text-o";
                                        break;
                                    default:
                                        break;
                                }
                                $("form#" + editor_stack[editor_stack.length-1] + " input[name='" + data.columns[i]["Field"] + "']")
                                        .parent()
                                        .addClass("col-md-4")
                                        .removeClass("col-md-8")
                                        .after('<div class="col-md-4"><span class="form-control"><a target="_blank" href="' + filePath + '"><i class="' + icon + '" style="font-size:24px"></i></a></span></div>');   
                            }
                            
                        }else{
                            $("form#" + editor_stack[editor_stack.length-1] + " input[name='" + data.columns[i]["Field"] + "']").val(data.rows[0][data.columns[i]["Field"]]);
                        }
                    }else{
                        $("form#" + editor_stack[editor_stack.length-1] + " textarea[name='" + data.columns[i]["Field"] + "']").html(data.rows[0][data.columns[i]["Field"]]);
                    }
                }
                
            }else{

                // Determinar si es necesario filtrar los resultados para un determinado recurso
                // basado en otra tabla "extra_info"
                if(editor_stack[editor_stack.length-1] !== extra_info){
                    for(f in data.rows_fks){
                        if(data.rows_fks[f]["REFERENCED_COLUMN_NAME"] === window["key_" + extra_info]){
                            $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + data.rows_fks[f]["COLUMN_NAME"] + "']").html('<option selected="" value="' + editor_id_stack[editor_id_stack.length-2] + '" class="default">' + editor_id_stack[editor_id_stack.length-2] + '</option>');
                            $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + data.rows_fks[f]["COLUMN_NAME"] + "']").parent().parent().addClass("hidden");
                            break;
                        }
                    }
                }
            }
            
            //------------ User interactions with the form. --------------//

            // Cuando el valor cambia, evalúa si algún campo requiere de él para resetear el campo que lo está referenciando
            $("form#" + editor_stack[editor_stack.length-1] + " select").change(function(){
                
                var field = $(this).attr("name");
                
                // Si existen restricciones que apuntan al select actual y no están vacías
                if(window["selectRestrictions_" + editor_stack[editor_stack.length-1]] !== undefined){
                    
                    if(window["selectRestrictions_" + editor_stack[editor_stack.length-1]].length > 0){
                        
                        // Revisa si la restricción aplica .
                        for(s in window["selectRestrictions_" + editor_stack[editor_stack.length-1]]){

                            // Si la restriccion existe para el select actual "field"
                            if(window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["requires"] === field){

                                // Quita el selectpicker y quita el valor del select que apunta al select actual (this)
                                $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["field_name"] + "']").selectpicker("destroy");
                                $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["field_name"] + "']").html('<option selected disabled value class="default">' + getCurrentWord(window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["field_name"]) + '</option>');
                            }
                        }                        
                    }                    
                }                
            });

            // When a user clicks over a clean select loads the required options for the given select element
            $("form#" + editor_stack[editor_stack.length-1] + " select").mousedown(function(){

                var field = $(this).attr("name");
                var fk = [];
                for(i in data.rows_fks){
                    if(data.rows_fks[i]["COLUMN_NAME"] === field){
                        fk = data.rows_fks[i];
                        break;
                    }
                }

                // Set and prepare the foreing key table to get the list
                fk = fk["REFERENCED_TABLE_NAME"];
                fk = fk.replace("om_", "");

                var show = true;
                var myUrl = location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/index.php/api/v1/' + fk;

                // Si existen restricciones para el select actual y no están vacías
                if(window["selectRestrictions_" + editor_stack[editor_stack.length-1]] !== undefined){
                    
                    if(window["selectRestrictions_" + editor_stack[editor_stack.length-1]].length > 0){
                        
                        // Revisa si la restricción aplica .
                        for(s in window["selectRestrictions_" + editor_stack[editor_stack.length-1]]){

                            // Si la restriccion existe para el select actual "field"
                            if(window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["field_name"] === field){

                                // Comprueba si el valor requerido ha sido establecido
                                if($("form#" + editor_stack[editor_stack.length-1] + " select[name='" + window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["requires"] + "']").val() !== null){
                                    
                                    myUrl =  location.protocol + '//' + location.host;
                                    myUrl += '/' + location.pathname.split("/")[1] + '/index.php/api/v1/' + fk + "/x/";
                                    myUrl += window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["resource"] + "/";
                                    myUrl += $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["requires"] + "']").val();
                                    
                                }else{
                                    show = false;
                                    alert("Requerido: " + getCurrentWord(window["selectRestrictions_" + editor_stack[editor_stack.length-1]][s]["requires"]));
                                }
                                break;
                            }
                        }                        
                    }                    
                }                    
                if(show){

                    // Obtains the resource data form API
                    $.ajax({
                        type: 'GET',
                        url: myUrl,
                        encode: "application/json",
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert(textStatus + ": " + errorThrown);
                        },
                        success: function (data, textStatus, jqXHR) {

                            // Si el select no require de otro campo para desplegar 
                            // la información, procede a mostrarlo

                            var idName;
                            var columnName;

                            // Find the primary key column name
                            for(i in data.columns){
                                if(data.columns[i]["Key"] === "PRI"){
                                    idName = data.columns[i]["Field"];
                                    break;
                                }
                            }

                            // Find the first column corresponding to "name" or "nombre"
                            for(i in data.columns){
                                if(data.columns[i]["Field"].indexOf("name") >= 0 || data.columns[i]["Field"].indexOf("nombre") >= 0){
                                    columnName = data.columns[i]["Field"];                            
                                    break;
                                }
                            }
                            var html = "";

                            // Verifica si se deben poner datos adicionales al select
                            if(window["selectData_" + editor_stack[editor_stack.length-1]] !== undefined){
                                for(i in data.rows){                                    
                                    attrData = "";                                    
                                    // Si existe el objeto con los datos a agregar revisa que exista para el campo actual
                                    for(d in window["selectData_" + editor_stack[editor_stack.length-1]]){
                                        if(window["selectData_" + editor_stack[editor_stack.length-1]][d]["field_name"] === field){
                                            console.log("424: ", field);
                                            // Agrega los campos data requeridos
                                            for(sd in window["selectData_" + editor_stack[editor_stack.length-1]][d]["data"]){
                                                attrData += "data-" + window["selectData_" + editor_stack[editor_stack.length-1]][d]["data"][sd] + "='" + data.rows[i][window["selectData_" + editor_stack[editor_stack.length-1]][d]["data"][sd]] + "' ";
                                            }                                            
                                            break;
                                        }
                                    }                                    
                                    html += "<option value='" + data.rows[i][idName] + "' " + attrData + ">" + data.rows[i][columnName] + "</option>";                                    
                                }
                            }else{
                                for(i in data.rows){
                                    html += "<option value='" + data.rows[i][idName] + "'>" + data.rows[i][columnName] + "</option>";
                                }
                            }
                            $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + field + "']").html(html);
                            $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + field + "']").addClass("selectpicker");

                            // Enable select2 plugin
                            $('.selectpicker').selectpicker();
                            $("button[data-id='" + field + "']").click();
                            try{
                                // Always declare this function to do something before loading the table
                                commonAfterSelect(field);
                            }catch(e){}
                        }
                    });                    
                }
            });
            
            // When the form is sent to execute the given action
            $("form#" + editor_stack[editor_stack.length-1]).on("submit", function(e){

                var this_form = $(this);
                
                // Agregar el indice actual del editor si el modo es edición o
                // dejar vacío si la acción es agregar o copia
                if(action === "edit"){
                    $("form#" + editor_stack[editor_stack.length-1] + " input[name='" + window["key_" + editor_stack[editor_stack.length-1]] + "']").val(editor_id_stack[editor_id_stack.length-1]);
                }else{
                    $("form#" + editor_stack[editor_stack.length-1] + " input[name='" + window["key_" + editor_stack[editor_stack.length-1]] + "']").val("");
                }

                e.preventDefault();
                if (this.checkValidity && !this.checkValidity()) {
                    return;
                }

                // Almacena el formulario para enviarlo como objeto Formulario
                // Esto es útil por si es necesario enviar archivos o imágenes
                    var form = $("form#" + editor_stack[editor_stack.length-1])[0];
                    var formData = new FormData(form);
                    console.log("com_edit_440:", formData );

                $.ajax({
                    type: 'POST',
                    enctype: 'multipart/form-data',
                    url: $(this).attr("action"),
                    data: formData,
                    processData: false,
                    contentType: false,
                    encode: false,
                    cache: false,
                    error : function (jqXHR, textStatus, errorThrown) {
                        alert(textStatus + ": " + errorThrown);
                    },
                    success : function (data, textStatus, jqXHR) {
                        if(typeof data === "string"){
                            data = JSON.parse(data);
                        }                        
                        if(data.status){

                            // Este objeto contentdrá la información acutalizada
                            // ya sea para agregar una nueva fila en la foo table
                            // que se está editando o para actualizar los valores
                            var obj = {};
                            
                            /*
                             * Establece el id del objeto que se esté 
                             * acutalizando, si no se estaba copiando o agregando, 
                             * entonces pone el indice que se obtuvo al copiar o agregar
                             */
                            if(action === "edit"){
                                index = editor_id_stack[editor_id_stack.length-1];
                            }else{
                                index = data.index;
                            }
                            
                            // Establece el nombre del id actual y el valor en 
                            // el objeto "obj" previamente inicializado
                            obj[window["key_" + editor_stack[editor_stack.length-1]]] = index;
                            
                            var all = this_form.serializeArray();

                            // Modifica los id de los select por los textos de la opción seleccionada
                            for(i in all){

                                // Get the text of the option selected
                                if($("form#" + editor_stack[editor_stack.length-1] + " select[name='" + all[i]["name"] + "'] option:selected").text() !== ""){
                                    all[i]["value"] = $("form#" + editor_stack[editor_stack.length-1] + " select[name='" + all[i]["name"] + "'] option:selected").text();
                                }

                                // Si el campo actual no es el id agrega los valores
                                if(all[i]["name"] !== window["key_" + editor_stack[editor_stack.length-1]]){
                                    obj[all[i]["name"]] = all[i]["value"];
                                }
                            }                            
                            if(action === "edit"){
                                // Actualiza la tabla relacionada al editor actual con la información del formulario
                                window.current_row.val(obj);
                            }else{
                                // Agrega el nuevo registro a la tabla del editor actual
                                window["ft_" + editor_stack[editor_stack.length-1]].rows.add(obj);
                            }                            
                            try{
                                // Always declare this function to do something after loading the table
                                commonSuccessEditor(data);
                            }catch(e){}
                            
                            // Establece la acción a editar para abrir el editor 
                            // del registro actual.
                            window.action = 'edit';
                            // Oscurece el fondo y muestra el spinner
                            $("div#div_loading").addClass("background-loading");
                            $("div#div_spinner").addClass("spinner-loading");
                            
                            // Genera la url para pasar al modo edicion de la información recientemente agregada.
                            var url = location.href;
                            url = url.split("/");
                            url = url[0] 
                                + "//" + url[2] + "/" + url[3] + "/" 
                                + url[4] + "/" + url[5] + "/" + url[6] 
                                + "/editor/" + action + "/" + editor_stack[editor_stack.length-1] + "/" + index;

                            // Establece el nuevo id en la pila de id's del editor
                            editor_id_stack[editor_id_stack.length-1] = Number(index);
                            
                            // Carga el editor actual en el div correspondiente.
                            $("div#div_editor_" + editor_stack[editor_stack.length-1]).load(url, function (result, status, xhr) {
                                if (status === 'error') {
                                    alert(status + ": " + xhr.status + " (" + xhr.statusText + ")");
                                }else{
                                    // Verificar si existe un documento con el mismo ID de avance y tipo de documento = 3
                                    // Si existe, mostrar un mensaje y evitar que se guarde el nuevo documento
                                    console.log("com_edi_522: ", data.rows[0][data.columns[0]['Field']] );
                                    console.log("com_edi_523: ", data.rows[0].tipo_documento);
                                    if (data.rows[0][data.columns[0]['Field']] !== null && data.rows[0].tipo_documento === "Proyecto final") {
                                        alert('Ya hay un archivo final guardado para este proyecto.');
                                        return false;
                                    }else{
                                        alert(getCurrentWord("txt_n_correct"));
                                    }
                                }                                
                            });
                        }                        
                    }
                });                
            });
            
            // Action when the close button is clicked
            $("span#btn_close_" + editor_stack[editor_stack.length-1]).click(function(){
                
                // Establece el recurso de dónde se abrió el editor
                current = editor_stack[editor_stack.length-1];
                
                // Quita el div del editor
                $("div#div_editor_" + editor_stack[editor_stack.length-1]).remove();
                
                // Quita el último elemento de la pila de editores
                editor_stack.pop();
                // Quita el último elemento de la pila de ids
                editor_id_stack.pop();
                
                // Si la pila de editores no se ha acabado establece el ultimo
                // recurso disponible.
                if(editor_stack.length !== 0){
                    current = editor_stack[editor_stack.length-1];
                }
                
                // Muestra el editor que estaba debajo del último
                $("div#div_editor_" + editor_stack[editor_stack.length-1]).removeClass("hidden");
                
                if(action === "edit" || action === "delete"){
                
                    // Borra el ultimo lock del stack
                    $.ajax({
                        type: 'POST',
                        url: location.href + "del_lock",
                        data: {id_lock: locks_stack[locks_stack.length-1]},
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert(textStatus + ": " + errorThrown);
                        },
                        success: function (data, textStatus, jqXHR) {
                            locks_stack.pop();
                        }
                    });                    
                }
                
                // Si al quitar el editor de la pila queda vacía muestra la tabla de la sección actual
                if(editor_stack.length === 0){

                    // Borra action
                    action = "";
                    
                    // Borrar current_row
                    current_row = "";

                    // Resetea cualquier información adicional que se haya usado
                    extra_info = "";
                    
                    // Inicializa la pila de locks
                    locks_stack = [];

                    // Muestra la tabla, la barra de navegación y el sidebar si
                    // está oculto
                    $("div#content_selected").removeClass("hidden");
                    $("div#top_navbar").removeClass("hidden");

                    if(!$("nav#sidebar").hasClass("active")){
                        $("button#sidebarCollapse").click();
                    }
                }else{
                    
                    // Establece la acción por defecto para el editor previo
                    action = "edit";                    
                }
                
                // Muestra las opciones de la barra lateral
                $("#mySidebar a").css("display", "");                
            });
            try{
                // Always declare this function to do something after loading the table
                commonAfterEditor();
            }catch(e){}
        }
    });
});

// Updates the plus/munus glyphicon
$("h4.panel-title > a").click(function () {
    if ($(this).parents("div.panel-heading").siblings(":first").hasClass("in")) {
        $(this).children().removeClass("glyphicon-minus-sign").addClass("glyphicon-plus-sign");
    } else {
        $(this).children().removeClass("glyphicon-plus-sign").addClass("glyphicon-minus-sign");
    }
});

// Tipos de datos
function fieldType(field){

    field = field.toUpperCase();

    var type = "text";
    var isNumber = ["TINYINT", "SMALLINT", "MEDIUMINT", "INT", "BIGINT", "BIT", "BOOLEAN", "SERIAL", "DECIMAL", "FLOAT", "DOUBLE", "REAL"];
    var isTime = ["DATE", "TIMESTAMP", "TIME", "YEAR"];
    var isFullTime = ["DATETIME", "TIMESTAMP"];
    var isText = ["TEXT", "MEDIUMTEXT", "LONGTEXT", "BINARY", "VARBINARY", "TINYBLOB", "MEDIUMBLOB", "BLOB", "LONGBLOB","-", "ENUM", "SET"];
    var isShortText = ["CHAR", "VARCHAR", "TINYTEXT"];

    if(isNumber.indexOf(field) != -1) type = "number";
    if(isTime.indexOf(field) != -1) type = "date";
    if(isFullTime.indexOf(field) != -1) type = "datetime-local";
    if(isText.indexOf(field) != -1) type = "textarea";
    if(isShortText.indexOf(field) != -1) type = "text";

    return type;
}

function archivo() {

    var files = $("input[type='file']")[0]["files"]; // FileList object

    // Gets the image from field "file".
    for (var i = 0, f; f = files[i]; i++) {

        // Only images allowed...
        if (!f.type.match('image.*')) {
            alert("* png\n* jpeg\n* jpg\n* svg");
            $("input[type='file']").val("");
            continue;
        }else{
            if(f.type != "image/webp"){
                var reader = new FileReader();
                reader.onload = function (e) {
                    // Shows the image preview replacing the default image
                    $("img#selected-img").attr('src', e.target.result);
                }
                reader.readAsDataURL(f);
            }else{
                alert("Formato desconocido.");
                $("input[type='file']").val("");
            }
        }
    }
}