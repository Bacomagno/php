/*
 * COMMON API JS
 * Inicializa la tabla de datos con las caracteristicas dadas en los parametros
 */

function initialize(allow_edit = true, opt_add = true, opt_edit = true, opt_copy = true, opt_delete = true){
    
    // The table name
    table = '#table_' + current;
    
    // Limpia el nombre del recurso si es necesario
    current = current.replace("_dashboard", "");
    
    // Determinar si es necesario filtrar los resultados para un determinado recurso
    // basado en otra tabla dada en la variable global: "extra_info" que se carga
    // en script.js
    if(extra_info !== ""){
        var url = location.origin + '/' + location.pathname.split("/")[1] + '/index.php/api/v1/' + current + "/x/" + extra_info + "/" + editor_id_stack[editor_id_stack.length-1];
    }else{
        var url = location.origin + '/' + location.pathname.split("/")[1] + '/index.php/api/v1/' + current;
    }
    
    // Obtenemos el contenido de la tabla basado en la solicitud 
    // que se hace al api a través de la url
    $.ajax({
        type: 'GET',
        url: url,
        encode: "application/json",
        error: function (jqXHR, textStatus, errorThrown) {
            alert(textStatus + ": " + errorThrown);
        },
        success: function (data, textStatus, jqXHR) {

            // Agrega los campos que falten al objeto columns (name, required...)
            for(c in data.columns){

                data.columns[c]["name"] = data.columns[c]["Field"];

                // Store the primary key into the given variable
                // its used in various places ahead.
                if(data.columns[c]["Key"] === "PRI"){
                    window["key_" + current] = data.columns[c]["Field"];
                }

                // Set the value required as true for the fields with multivalues
                // primarily.
                if(data.columns[c]["Key"] === "MUL"){
                    data.columns[c]["required"] = true;
                }

                // Load the image if any field contain one of the following names
                if(data.columns[c]["Field"].indexOf("imagen") >= 0 || data.columns[c]["Field"].indexOf("image") >= 0 || data.columns[c]["Field"].indexOf("img") >= 0){
                    for(i in data.rows){
                        if(data.rows[i][data.columns[c]["Field"]] == "" || data.rows[i][data.columns[c]["Field"]].indexOf(".") < 0){
                            data.rows[i][data.columns[c]["Field"]] = "<img src='" + location.origin + "/" + whereAmI + "/documents/" + whereAmI + "/default.png'  style='width: 60px;'>";
                        }else{
                            data.rows[i][data.columns[c]["Field"]] = "<img src='" + location.origin + "/" + whereAmI + "/documents/" + whereAmI + "/" + data.rows[i][data.columns[c]["Field"]] + "'  style='width: 60px;'>";
                        }
                    }
                }

                // Load the document if any field contain one of the following names
                if(data.columns[c]["Field"].indexOf("archivo_") >= 0){

                    for(i in data.rows){
                        if(data.rows[i][data.columns[c]["Field"]] == "" || data.rows[i][data.columns[c]["Field"]].indexOf(".") < 0){
                            //data.rows[i][data.columns[c]["Field"]] = "<img src='" + location.origin + "/" + whereAmI + "/documents/" + whereAmI + "/default.png'  style='width: 60px;'>";
                        }else{

                            var icon = "fa fa-folder-open";

                            switch (data.rows[i][data.columns[c]["Field"]].split(".")[1]) {
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

                            data.rows[i][data.columns[c]["Field"]] = "<a target='_blank' href='" + location.origin + "/" + location.pathname.split("/")[1] + "/documents/" + whereAmI + "/" + data.rows[i][data.columns[c]["Field"]] + "'><i class='" + icon + "' style='font-size:24px'></i></a>";
                        }
                    }

                }

            }

            // Set orderedColumns Array to data.columns if it is empty.
            // If orderedColumns Array is set then aggregates the default
            // required attributes
            
            //console.log(orderedColumns.length);
            if($(orderedColumns).length === 0){
                orderedColumns = data.columns;
            }

            // Ceate aditional fields for orderedColumns
            for(var i in orderedColumns){
                orderedColumns[i].title = '<span class="' + orderedColumns[i].name + '">' + getCurrentWord(orderedColumns[i].name) + '</span>';
                if(data.rows[0] !== undefined){
                    if(orderedColumns[i].extra){
                        for(var j in data.rows){
                            var str = orderedColumns[i].content;
                            // If extra requires the Id, it will be replaplaced by @
                            if(orderedColumns[i].id){
                                str = str.replace('@',data.rows[j][window["key_" + current]]);
                            }
                            data.rows[j][orderedColumns[i].name] = str;
                        }
                    }
                }
                // Set the required value from data.columns into the orderedColumns Array
                for(var k in data.columns){
                    if(data.columns[k]["Field"] === orderedColumns[i]["name"]){
                        if(data.columns[k]["required"] !== undefined){
                            orderedColumns[i].required = true;
                            break;
                        }

                    }
                }
            }
            
            try{
                // Always declare this function to do something before loading the table
                commonBeforeApi(data);
            }catch(e){}

            // Create personalized table
            jQuery(function ($) {

                // Stores the object containing the actual orderedColumns information 
                window["orderedColumns_" + current] = orderedColumns;
                orderedColumns = undefined;
                
                // Guarda la tabla actual con su nombre unico basado en el recurso JCG se agrega id a key para que sea por usuario
                window["ft_" + current] = FooTable.init(table, {
                    stopPropagation: true,
                    empty: $('.no_results').html(),
                    state: {
                        enabled: true,
                        filtering: true,
                        paging: true,
                        sorting: true,
                        key: location.pathname + ui + ':' + current
                    },
                    sorting: {
                        enabled: true
                    },
                    filtering: {
                        enabled: true,
                        placeholder: getCurrentWord('lbl_search'),
                    },
                    paging: {
                        enabled: true, 
                        countFormat: '{PL} / {TR}'
                    },
                    showToggle: true,
                    toggleColumn: "first",
                    toggleSelector: ".footable-toggle",
                    expandFirst: false,
                    useParentWidth: true,
                    columns: window["orderedColumns_" + current],
                    rows: data.rows,
                    editing: {
                        enabled: allow_edit,
                        allowAdd: opt_add,
                        allowEdit: opt_edit,
                        allowCopy: opt_copy,
                        allowDelete: opt_delete,
                        showText: '<span class="fooicon fooicon-pencil"></span> <span class="btn_modify">' + getCurrentWord('btn_modify') + '</span>',
                        hideText: '<span class="txt_cancel">' + getCurrentWord('txt_cancel') + '</span>',
                        addText: '<span class="btn_new">' + getCurrentWord('btn_new') + '</span>',
                        copyText: '<span class="glyphicon glyphicon-copy"></span>',
                        addRow: function () {
                            if (opt_add) {

                                window.action = 'add';
                                
                                // Oculta las opciones de la barra lateral
                                $("#mySidebar a").css("display", "none");

                                var url = location.href;

                                // Get the actual table from the state foo table
                                resource = this.ft.state.key.split(":");
                                
                                // Establece el recurso de dónde se abrió el editor
                                current = resource[1];
                                
                                if(!ifInArray(resource[1], editor_stack)){
                                    editor_stack.push(resource[1]);
                                    editor_id_stack.push(Number(1));
                                }
                                
                                // Si no existe el div editor actual.
                                if($("div#div_editor_" + resource[1]).length === 0){
                                    
                                    // Agrega el nuevo editor despues de el div content_selected
                                    $("div#content_selected").after("<div id='div_editor_" + resource[1] + "' style='z-index: " + depth + "'></div>");
                                    depth++;
                                
                                    // Oscurece el fondo y muestra el spinner
                                    $("div#div_loading").addClass("background-loading");
                                    $("div#div_spinner").addClass("spinner-loading");
                                
                                    // Load the information into the div with the given id into "where_id"
                                    $("div#div_editor_" + resource[1]).load(url + "editor/" + action + "/" + resource[1], function (result, status, xhr) {

                                        if (status === 'error') {
                                            alert(status + ": " + xhr.status + " (" + xhr.statusText + ")");
                                        }else{

                                            if(editor_stack.length === 1){
                                                
                                                // Oculta la foo table del recurso actual
                                                $("div#content_selected").addClass("hidden");
                                                
                                            }else if(editor_stack.length > 1){
                                                
                                                // Oculta los editores que no sean el ultimo que se abrió
                                                for(e in editor_stack){
                                                    if(e != editor_stack.length-1){
                                                        if(!$("div#div_editor_" + editor_stack[e]).hasClass("hidden")){
                                                            $("div#div_editor_" + editor_stack[e]).addClass("hidden");
                                                        }
                                                    }
                                                }
                                            }

                                            // Hides the sidebar
                                            if($("nav#sidebar").hasClass("active")){
                                                $("button#sidebarCollapse").click();
                                            }

                                            // Hides the navbar
                                            if(!$("div#top_navbar").hasClass("hidden")){
                                                $("div#top_navbar").addClass("hidden");
                                            }

                                        }

                                    });
                                    
                                }

                            }
                        },
                        editRow: function (row) {
                            if (opt_edit) {
                                
                                // Get the actual table from the state foo table
                                resource = this.ft.state.key.split(":");
                                
                                // Establece el recurso de dónde se abrió el editor
                                current = resource[1];
                                
                                // Verifica si el registro existe
                                $.ajax({
                                    type: 'GET',
                                    url: location.origin + '/' + location.pathname.split("/")[1] + '/index.php/api/v1/' + resource[1] + "/" + row.value[window["key_" + resource[1]]],
                                    encode: "application/json",
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        alert(textStatus + ": " + errorThrown);
                                    },
                                    success: function (data, textStatus, jqXHR) {
                                        
                                        // Si hay resultados de la consulta procede
                                        if(data.rows.length !== 0){
                                            
                                            // Verificar si el registro está siendo editado
                                            $.ajax({
                                                type: 'GET',
                                                url: location.origin + '/' + location.pathname.split("/")[1] + '/index.php/api/v1/locks',
                                                encode: "application/json",
                                                error: function (jqXHR, textStatus, errorThrown) {
                                                    alert(textStatus + ": " + errorThrown);
                                                },
                                                success: function (data, textStatus, jqXHR) {
                                                    
                                                    var locked = false;

                                                    for(r in data.rows){

                                                        if(data.rows[r]["tabla"] === resource[1] && Number(data.rows[r]["id_registro"]) === Number(row.value[window["key_" + resource[1]]])){

                                                            // Calcula la diferencia de timestamps para determinar el lapso de tiempo transcurrido
                                                            ini = new Date(data.rows[r]["timestamp"]);
                                                            ini.setTime(ini.getTime() + ini.getTimezoneOffset()*60*1000 );

                                                            fin = new Date();
                                                            fin.setTime(fin.getTime() + fin.getTimezoneOffset()*60*1000 );

                                                            time_diff = fin.getTime() - ini.getTime();
                                                            time_diff = time_diff/60/1000;

                                                            // Si el lock es menor a 15 minutos no deja editar el registro
                                                            if(parseInt(time_diff) < 15){
                                                                time_to_wait = 15-parseInt(time_diff);
                                                                alert("El registro: " + row.value[window["key_" + resource[1]]] + ",\nEstá siendo editado por: " + data.rows[r]["nombre_usuario"] + "\nVuelva a intentar en: " + time_to_wait + " min.");
                                                                locked = true;
                                                                break;
                                                            }else{

                                                                // Si el lock tiene más de 15 minutos lo borra de la tabla
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: location.href + "del_lock",
                                                                    data: {id_lock: data.rows[r]["id_lock"]},
                                                                    error: function (jqXHR, textStatus, errorThrown) {
                                                                        alert(textStatus + ": " + errorThrown);
                                                                    }
                                                                });

                                                                break;
                                                            }
                                                        }
                                                    }

                                                    if(!locked){

                                                        if(!ifInArray(resource[1], editor_stack)){
                                                            editor_stack.push(resource[1]);
                                                            editor_id_stack.push(Number(row.value[window["key_" + editor_stack[editor_stack.length-1]]]));
                                                        }
                                                        
                                                        window.action = 'edit';
                                                        
                                                        // Oculta las opciones de la barra lateral
                                                        $("#mySidebar a").css("display", "none");

                                                        window.current_row = row;

                                                        // Agrega el registro como bloqueado...
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: location.href + "add_lock",
                                                            data: {
                                                                id_usuario: ui,
                                                                nombre_usuario: un,
                                                                tabla: resource[1],
                                                                id_registro: row.value[window["key_" + resource[1]]]
                                                            },
                                                            error: function (jqXHR, textStatus, errorThrown) {
                                                                alert(textStatus + ": " + errorThrown);
                                                            },
                                                            success: function (data, textStatus, jqXHR) {
                                                                data = JSON.parse(data);
                                                                locks_stack.push(data.index);
                                                            }
                                                        });

                                                        // Si el editor actual no existe aún en el DOM
                                                        if($("div#div_editor_" + resource[1]).length === 0){

                                                            // Agrega el nuevo editor despues de el div content_selected
                                                            $("div#content_selected").after("<div id='div_editor_" + resource[1] + "' style='z-index: " + depth + "'></div>");
                                                            depth++;

                                                            // Oscurece el fondo y muestra el spinner
                                                            $("div#div_loading").addClass("background-loading");
                                                            $("div#div_spinner").addClass("spinner-loading");

                                                            // Load the information into the div with the given id into "where_id"
                                                            $("div#div_editor_" + resource[1]).load(location.href + "editor/" + action + "/" + resource[1] + "/" + row.value[window["key_" + resource[1]]], function (result, status, xhr) {

                                                                if (status === 'error') {
                                                                    alert(status + ": " + xhr.status + " (" + xhr.statusText + ")");
                                                                }else{

                                                                    if(editor_stack.length === 1){

                                                                        // Oculta la tabla de datos principal
                                                                        $("div#content_selected").addClass("hidden");
                                                                        
                                                                    }else if(editor_stack.length > 1){

                                                                        // Oculta los editores que no sean el ultimo que se abrió
                                                                        for(e in editor_stack){
                                                                            if(e != editor_stack.length-1){
                                                                                $("div#div_editor_" + editor_stack[e]).addClass("hidden");
                                                                            }
                                                                        }
                                                                    }

                                                                    // Hides the sidebar
                                                                    if($("nav#sidebar").hasClass("active")){
                                                                        $("button#sidebarCollapse").click();
                                                                    }

                                                                    // Hides the navbar
                                                                    if(!$("div#top_navbar").hasClass("hidden")){
                                                                        $("div#top_navbar").addClass("hidden");
                                                                    }

                                                                }

                                                            });

                                                        }

                                                    }

                                                }

                                            });
                                            
                                        }else{
                                            
                                            alert("Este registro fué borrado previamente.");
                                            row.delete();
                                            
                                        }
                                        
                                    }
                                });
                                
                            }
                        },
                        copyRow: function (row) {
                            if (opt_copy) {

                                window.action = 'copy';

                                // Oculta las opciones de la barra lateral
                                $("#mySidebar a").css("display", "none");
                                
                                // Get the actual table from the state foo table
                                resource = this.ft.state.key.split(":");
                                
                                // Establece el recurso de dónde se abrió el editor
                                current = resource[1];
                                
                                // Verifiqua si el registro existe
                                $.ajax({
                                    type: 'GET',
                                    url: location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/index.php/api/v1/' + resource[1] + "/" + row.value[window["key_" + resource[1]]],
                                    encode: "application/json",
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        alert(textStatus + ": " + errorThrown);
                                    },
                                    success: function (data, textStatus, jqXHR) {
                                        
                                        // Si hay resultados de la consulta procede
                                        if(data.rows.length !== 0){
                                            
                                            if(!ifInArray(resource[1], editor_stack)){
                                                editor_stack.push(resource[1]);
                                                editor_id_stack.push(Number(row.value[window["key_" + resource[1]]]));
                                            }

                                            var url = location.href;

                                            if($("div#div_editor_" + resource[1]).length === 0){

                                                // Agrega el nuevo editor despues de el div content_selected
                                                $("div#content_selected").after("<div id='div_editor_" + resource[1] + "' style='z-index: " + depth + "'></div>");
                                                depth++;

                                                // Oscurece el fondo y muestra el spinner
                                                $("div#div_loading").addClass("background-loading");
                                                $("div#div_spinner").addClass("spinner-loading");

                                                // Load the information into the div with the given id into "where_id"
                                                $("div#div_editor_" + resource[1]).load(url + "editor/" + action + "/" + resource[1] + "/" + row.value[window["key_" + resource[1]]], function (result, status, xhr) {

                                                    if (status === 'error') {
                                                        alert(status + ": " + xhr.status + " (" + xhr.statusText + ")");
                                                    }else{

                                                        if(editor_stack.length === 1){

                                                            // Hides the table of data
                                                            $("div#content_selected").addClass("hidden");
                                                        }else if(editor_stack.length > 1){

                                                            // Oculta los editores que no sean el ultimo que se abrió
                                                            for(e in editor_stack){
                                                                if(e != editor_stack.length-1){
                                                                    $("div#div_editor_" + editor_stack[e]).addClass("hidden");
                                                                }
                                                            }
                                                        }

                                                        // Hides the sidebar
                                                        if($("nav#sidebar").hasClass("active")){
                                                            $("button#sidebarCollapse").click();
                                                        }

                                                        // Hides the navbar
                                                        if(!$("div#top_navbar").hasClass("hidden")){
                                                            $("div#top_navbar").addClass("hidden");
                                                        }

                                                    }

                                                });

                                            }
                                            
                                        }else{
                                            
                                            alert("Este registro fué borrado previamente.");
                                            row.delete();
                                            
                                        }
                                    }
                                });

                            }
                        },
                        deleteRow: function (row) {
                            if (opt_delete) {

                                window.action = 'delete';

                                // Get the actual table from the state foo table
                                resource = this.ft.state.key.split(":");
                                
                                // Establece el recurso de dónde se abrió el editor
                                current = resource[1];
                                
                                // Verificar si el registro está siendo editado
                                $.ajax({
                                    type: 'GET',
                                    url: location.protocol + '//' + location.host + '/' + location.pathname.split("/")[1] + '/index.php/api/v1/locks',
                                    encode: "application/json",
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        alert(textStatus + ": " + errorThrown);
                                    },
                                    success: function (data, textStatus, jqXHR) {
                                        
                                        var locked = false;
                                        
                                        for(r in data.rows){
                                            
                                            if(data.rows[r]["tabla"] === resource[1] && Number(data.rows[r]["id_registro"]) === Number(row.value[window["key_" + resource[1]]])){
                                                
                                                // Si el lock tiene menos de 15 minutos no permite editar
                                                ini = new Date(data.rows[r]["timestamp"]);
                                                ini.setTime(ini.getTime() + ini.getTimezoneOffset()*60*1000 );

                                                fin = new Date();
                                                fin.setTime(fin.getTime() + fin.getTimezoneOffset()*60*1000 );

                                                time_diff = fin.getTime() - ini.getTime();
                                                time_diff = time_diff/60/1000;

                                                // Si el lock es menor a 15 minutos no deja editar el registro
                                                if(parseInt(time_diff) < 15){
                                                    time_to_wait = 15-parseInt(time_diff);
                                                    alert("El registro: " + row.value[window["key_" + resource[1]]] + ",\nEstá siendo editado por: " + data.rows[r]["nombre_usuario"] + "\nVuelva a intentar en: " + time_to_wait + " min.");
                                                    locked = true;
                                                    break;
                                                }else{
                                                    
                                                    // Si el lock tiene más de 15 minutos lo borra de la tabla
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: location.href + "del_lock",
                                                        data: {id_lock: data.rows[r]["id_lock"]},
                                                        error: function (jqXHR, textStatus, errorThrown) {
                                                            alert(textStatus + ": " + errorThrown);
                                                        },
                                                        success: function (data, textStatus, jqXHR) {}
                                                    });
                                                    
                                                    break;
                                                }
                                            }
                                        }
                                        
                                        if(!locked){
                                            
                                            // Procede a borrar el registro, primero solicita confirmar el borrado
                                            if(confirm(getCurrentWord("txt_q_delete") + "\n" + getCurrentWord(resource[1]) + "\nRegistro: " + row.value[window["key_" + resource[1]]])){
                                                
                                                $.ajax({
                                                    type: 'POST',
                                                    url: location.href + "delete",
                                                    encode: "application/json",
                                                    data: {
                                                        resource: resource[1],
                                                        item: row.value[window["key_" + resource[1]]]
                                                    },
                                                    error: function (jqXHR, textStatus, errorThrown) {
                                                        alert(textStatus + ": " + errorThrown);
                                                    },
                                                    success: function (data, textStatus, jqXHR) {
                                                        
                                                        // Se convierte a JSON porque viene como texto
                                                        data = JSON.parse(data);
                                                        
                                                        if(data.status){
                                                            row.delete();
                                                        }

                                                    }
                                                });
                                            
                                            }else{
                                                
                                                // Quita el valor de la acción actual
                                                action = "";
                                                
                                            }
                                                   
                                        }
                                        
                                    }
                                    
                                });

                            }
                        }
                    }
                });
                
            });
            
            // Corrige el editor stack si se cargó el contenido habiendolo filtrado previamente
            if(window.loadedFilteredContent === 1){
                
                editor_stack = [];
                editor_id_stack = [];
                
                window.loadedFilteredContent = 0;
                
            }
            
            try{
                // Always declare this function to do something after loading the table
                commonAfterApi();
            }catch(e){}
        }

    });
    
}